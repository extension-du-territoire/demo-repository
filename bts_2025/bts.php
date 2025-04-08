<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>tableau</title>
</head>
<body>
   
    <h1>liste de modele de voiture </h1>
   
        
        <?php 
         $bd = 'vehiculedb';
         $host = 'localhost';
         $pass = '';
         $user = 'root';
         try{
            $conn = new PDO("mysql:host=$host;dbname=$bd",$user, $pass);
            
         }
         catch(PDOException $e){
            echo'echec:'.$e-> getMessage();
         }
         $sql = "SELECT * FROM modele ORDER BY Marque";
         if(!$conn-> query($sql)){
            echo'erreur';
         }
         else{

         }
        ?>
    <table>
        <tr>
            <td>id</td>
            <p></p>
            <td>nom modele</td>
            <p></p>
            <td>marque</td>
            <p></p>
            <td>Puissance</td>
            <P></P>
            <td>carburant</td>
         </tr>
         <?php
         foreach($conn-> query($sql) as $row)
        echo"<tr>
        <td>".$row['Modele'],"</td>
        <td> ".$row['Marque'],"</td>
        <td> ".$row['Puissance'],"</td>
        <td> ".$row['carburant'],"</td>
         </tr>\n";

         ?>
    </table>
    <?php 
    
    ?>

</body>
</html>