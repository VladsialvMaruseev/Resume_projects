<?php
session_start();
include("database.php");
global $pdo;

function genRandomString($length = 8)
{
    $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $charsLength = strlen($chars);
    $randomString = "";
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $chars[rand(0, $charsLength - 1)];
    }
    return $randomString;
}

function checkAuth()
{
    global $pdo;
    $token = @$_SESSION["token"];
    $session = session_id();
    $sql = "SELECT * FROM tokens WHERE token = :token AND session_id = :session AND token_expiration > now()";
    $query = $pdo->prepare($sql);
    $query->execute(array(
        "token" => $token,
        "session" => $session
    ));
    $count = $query->rowCount();
    $result = $query->fetch(PDO::FETCH_OBJ);
    if ($count) {
        $sql = "UPDATE tokens SET token_expiration = DATE_ADD(now(), INTERVAL 24 MINUTE) WHERE id_user =:user AND  token = :token AND session_id = :session";
        $query = $pdo->prepare($sql);
        $query->execute(array(
            "user" => $result->id_user,
            "token" => $token,
            "session" => $session
        ));
        return true;
        //Действия в случае нахождения активного ключа безопасности. Требуется вернуть «истину» и обновить существующий ключ.
    } else {
        return false;
        //Действия в случае отсутствия активного ключа безопасности. Требуется вернуть «ложь».
    }
}

if (checkAuth()) {
    echo "Вы уже вошли в систему!";
} else {
    $form = @$_POST["form"];
    switch ($form) {
        case "reg":
            $login = $_POST["login"];
            $email = $_POST["email"];
            $name = $_POST["name"];
            $password = $_POST["psw1"];
            $confirm = $_POST["psw2"];

            $sql = "SELECT * FROM users WHERE user_login = :login OR user_email = :mail";
            $query = $pdo->prepare($sql);
            $query->execute(array(
                "login" => $login,
                "mail" => $email
            ));
            $count = $query->rowCount();

            if ($count == 0) {
                if ($_POST["psw1"] === $_POST["psw2"]) {

                    $datas = array(
                        "user_login" => $_POST["login"],
                        "user_email" => $_POST["email"],
                        "user_psw" => md5($_POST["psw1"]),
                        "user_name" => $_POST["name"]
                    );
                    $sql = "INSERT INTO users (user_login, user_email, user_psw, user_name) VALUES (:user_login, :user_email, :user_psw, :user_name)";
                    $query = $pdo->prepare($sql);
                    $query->execute($datas);
                    echo "Регистрация завершена.";
                } else {
                    echo "Пароли не совпадают.";
                }
            } else {
                echo "Пользователь с такими данынми уже существует.";
            }
            break;
        case "auth":
            $login = $_POST["login"];
            $password = md5($_POST["psw"]);
            $sql = "SELECT * FROM users WHERE (user_login = :login OR user_email = :login) AND BINARY user_psw = :psw";
            $query = $pdo->prepare($sql);
            $query->execute(array(
                "login" => $login,
                "psw" => $password
            ));
            $count = $query->rowCount();
            $result = $query->fetch(PDO::FETCH_OBJ);

            if ($count == 1) {

                $token = genRandomString(32);
                session_start();
                $_SESSION["token"] = $token;
                $session = session_id();
                $sql = "INSERT INTO tokens (id_user, token, session_id, token_expiration) VALUES (:user, :token, :session, DATE_ADD(now(), INTERVAL 24 MINUTE))";
                $query = $pdo->prepare($sql);
                $query->execute(array(
                    "user" => $result->id_user,
                    "token" => $token,
                    "session" => $session
                ));


                if ($login == "admin") {

                    header("Location: ../profile/admin.php");
                } else {
                    header("Location: ../profile/profile.php");
                }
            } else {
                echo "Вы ввели неверный логин или пароль";
            }

            break;
        default:
            echo "Вы кто такие? Я вас не звал.";
            break;
    }
}
