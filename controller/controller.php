<?php

require_once("../model/model.php");

function get($nom_filtre, $adresse_filtre, $pdo){

    // Appel get la fonction getMag du model
    $get = getMag($nom_filtre, $adresse_filtre, $pdo);

    // Affichage de la vue get
    require("../templates/getView.php");

}

function post($nom, $adresse, $pdo){
    
    // Appel get la fonction postMag du model
    $post = postMag($nom, $adresse, $pdo);

    // Affichage de la vue post
    require("../templates/postView.php");
}

function update($id, $nom, $adresse, $pdo){

    // Appel get la fonction updateMag du model
    $put = updateMag($id, $nom, $adresse, $pdo);
    
    // Affichage de la vue post
    require("../templates/updateView.php");
}

function delete($id, $pdo){
    
    // Appel get la fonction deleteMag du model
    $delete = deleteMag($id, $pdo);

    // Affichage de la vue post
    require("../templates/deleteView.php");
}

?>