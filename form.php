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








    /************************/
    // $conn = mysqli_connect('localhost','typiortx_test4job', 'test4job', 'typiortx_Test4JOB');
    // $reslut = mysqli_query($con,"SELECT user_id, login.firstName, login.lastName, MAX(wpmSpeed) AS wpmSpeed, accValue, time, date_time FROM results, login WHERE login.id = results.user_id GROUP BY user_id ORDER BY wpmSpeed DESC");
    // $row = mysqli_fetch_array($reslut);
    // echo $row['firstName'];
?>