<?php


function getMag($nom_filtre, $adresse_filtre, $pdo){

    // Vérification des parametres
    if (!$nom_filtre && !$adresse_filtre) {
        $message["Erreur"]["Message"] = "Parametres requis manquants";
        return json_encode($message);
    } else {
        // Requête SQL pour récupérer les enregistrements filtrés
        $sql = "SELECT * FROM magasins WHERE nom = :nom_filtre OR adresse = :adresse_filtre";
        
        // Préparation et exécution de la requête
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nom_filtre', $nom_filtre);
        $stmt->bindParam(':adresse_filtre', $adresse_filtre);
        $stmt->execute();
        
        // Récupération des résultats sous forme de tableau associatif
        $magasins = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $magasins = sort_magasins_by_nom($magasins);

        // Renvoie un message si aucun résultat trouvé
        if(!$magasins){
            $message["Resultat"]["Message"] = "Aucun resultat";
            return json_encode($message);
        }

        // Renvoie le résultat au format json
        return json_encode($magasins);
    }
}

function postMag($nom, $adresse, $pdo){

    // Vérification des parametres
    if(!$nom || !$adresse){
        $message["Erreur"]["Message"] = "Parametres requis manquants";
        return json_encode($message);
    }else{

        // Insertion des donnees soumis
        $stmt = $pdo->prepare("INSERT INTO magasins VALUES (0, '$nom', '$adresse')");
        $stmt->execute();
    
        // Encode le resultat en format json
        return json_encode(array('success' => true));
    }

}

function updateMag($id, $nom, $adresse, $pdo){

    // Vérification des parametres
    if (!$nom || !$adresse || !$id) {
        $message["Erreur"]["Message"] = "Paramètres requis manquants";
        return json_encode($message);
    } else {

        // Mise à jour des donnees soumis
        $stmt = $pdo->prepare('UPDATE magasins SET nom = :nom, adresse = :adresse WHERE id = :id');
        $stmt->execute(array(':nom' => $nom, ':adresse' => $adresse, ':id' => $id));

        // Encode le resultat en format json
        return json_encode(array('success' => true));
    }
}

function deleteMag($id, $pdo){

    // Vérification des parametres
    if (!$id) {
        $message["Erreur"]["Message"] = "Paramètre id manquant";
        return json_encode($message);
    } else {

        // Suppression des donnees soumis
        $stmt = $pdo->prepare('DELETE FROM magasins WHERE id = :id');
        $stmt->execute(array(':id' => $id));

        // Encode le resultat en format json
        return json_encode(array('success' => true));
    }
}

?>