<?php

    global $pdo;

    $host = "localhost";
    $db = "theater_db";
    $user = "root";
    $password = "";

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);

    // Получение статей из БД
    function get_articles(){
        global $pdo;
        $articles = $pdo->query("SELECT * FROM articles ");
        return $articles;
    }

    // Получение информации о спектаклях из БД
    function get_spectacle(){
        global $pdo;
        $spectacles = $pdo->query("SELECT * FROM spectacle ");
        return $spectacles;
    }

    // Получение авторов по id 
    function get_autors_by_id($id){
        global $pdo;
        $autors = $pdo->query("SELECT * FROM autors WHERE id_autor = $id ");
        foreach ($autors as $autor){
            return $autor["fio"];
        }
    }


    // Получение актеров из БД
    function get_actors(){
        global $pdo;
        $articles = $pdo->query("SELECT * FROM actors ");
        return $articles;
    }

    // // Получение картинки по id 
    // function get_singles_by_id($id){
    //     global $pdo;
    //     $singles = $pdo->query("SELECT * FROM biography WHERE id_biography = $id ");
    //     foreach ($singles as $single){
    //         return $single;
    //     }
    // }

    // Получение картинки по id 
    function get_imgs_by_id($id){
        global $pdo;
        $imgs = $pdo->query("SELECT * FROM img WHERE id_img = $id ");
        foreach ($imgs as $img){
            return $img["src_img"];
        }
    }

    //ADMIN PANEL


    // Получение пользователей
    function get_users(){
        global $pdo;
        $users = $pdo->query("SELECT * FROM users ");
        return $users;
    }

    // Получение пола по id 
    function get_pol_by_id($id){
        global $pdo;
        $pols = $pdo->query("SELECT * FROM pol WHERE id_pol = $id ");
        foreach ($pols as $pol){
            return $pol["pol"];
        }
    }

    // Получение должности по id 
    function get_doljnost_by_id($id){
        global $pdo;
        $doljnosti = $pdo->query("SELECT * FROM doljnosti WHERE id_doljnosti = $id ");
        foreach ($doljnosti as $doljnost){
            return $doljnost["nazvanie"];
        }
    }

     // Получение награды по id 
     function get_zvanie_by_id($id){
        global $pdo;
        $zvania = $pdo->query("SELECT * FROM zvania WHERE id_zvania = $id ");
        foreach ($zvania as $zvanie){
            return $zvanie["nazvanie_zvania"];
        }
    }

    // Получение актера по id 
    function get_actors_by_id($id){
        global $pdo;
        $actors = $pdo->query("SELECT * FROM actors WHERE id_actor = $id ");
        foreach ($actors as $actor){
            return $actor["fio"];
        }
    }