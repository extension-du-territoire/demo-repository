<?php 
         $bd = 'vehiculedb';
         $host = 'localhost';
         $pass = '';
         $user = 'root';
         try{
            $conn = new PDO("mysql:host=$host;dbname=$bd",$user, $pass);
           # $conn = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
         }
         catch(PDOException $e){
            echo'echec :'.$e-> getMessage();
         }
         #$sql = "SELECT *FROM voiture ORDER BY id";
         #$stmt = $conn ->query($sql);
         #$voiture = $stmt -> fetchAll(PDO::FETCH_ASSOC);
         if($_SERVER["REQUEST_METHOD"]=="POST"){
            if (isset($_POST['Modele'], $_POST['Marque'], $_POST['Puissance'],$_POST['carburant'])) {
                
                $Modele = $_POST['Modele'];
                $Marque = $_POST['Marque'];
                $Puissance = $_POST['Puissance'];
                $caburant = $_POST['carburant'];
                $sql = $conn-> prepare("INSERT INTO modele(Modele, Marque, Puissance, carburant) values (?,?,?,?)");
                $sql ->execute(array($Modele,$Marque,$Puissance,$caburant));
            }
         }
        
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>ajouter</title>
        </head>
        <body>
            <form action="" method="POST" >
                <div>
                    <label for="">modele</label>
                    <input type="text" name="Modele">
                </div>
                <div>
                    <label for="">marque</label>
                    <input type="text" name="Marque">
                </div>
                <div>
                    <label for="">puissance</label>
                    <input type="text" name="Puissance">
                </div>
                <div>
                    <label for="">caburant</label>
                    <input type="text" name="carburant">
                </div>
                <p></p>
                <input type="submit" name="envoie">
            </form>
        </body>
        </html>