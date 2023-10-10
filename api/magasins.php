<?php

require_once("../controller/controller.php");
require_once("../config/db.php");
require("../src/functions.php");

    // Vérifie le type de requete GET, POST, PUT ou DELETE
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

        // Définition des valeurs de filtrage
        $nom_filtre = $_GET["nom"];
        $adresse_filtre = $_GET["adresse"];
        
        // Appel de la fonction get() du controller
        get($nom_filtre,$adresse_filtre,$pdo);

    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        // Requête pour ajouter un magasin
        $nom = $_GET['nom'];
        $adresse = $_GET['adresse'];
     
        // Appel de la fonction post() du controller
        post($nom, $adresse, $pdo);

    } elseif ($_SERVER['REQUEST_METHOD'] == 'PUT') {
        
        // Requête pour mettre à jour un magasin
        $param = parse_url($_SERVER['REQUEST_URI']);
        parse_str($param['query'],$data);
        
        $id = $data['id'];
        $nom = $data['nom'];
        $adresse = $data['adresse'];

        // Appel de la fonction update() du controller
        update($id, $nom, $adresse, $pdo);

    } elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {

        // Requête pour supprimer un magasin
        $param = parse_url($_SERVER['REQUEST_URI']);
        parse_str($param['query'], $data);

        $id = $data['id'];

        // Appel de la fonction delete() du controller
        delete($id, $pdo);

    }
