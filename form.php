<?php
    if(isset($_POST["Nom"]) && isset($_POST["Prenom"]) && isset($_POST["Civilite"]) ){  
        try{
            $connection = mysqli_connect('localhost','root', '', 'web');
        }
        catch(Exception $e){
            die($e->getMessage());
        }

        $nom = $_POST['Nom'];
        $prenom = $_POST['Prenom'];
        $civilite = $_POST['Civilite'];

        $query=mysqli_query($connection,"INSERT INTO formValidation (nom, prenom, civilite) VALUES ('$nom','$prenom', '$civilite')");
    }

?>