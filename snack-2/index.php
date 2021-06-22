<!-- Passare come parametri GET : name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione):
1. che name sia più lungo di 3 caratteri, 
2. che mail contenga un punto e una chiocciola e
3. che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 

var_dump($_GET);
$_GET['name'];
// $_GET['mail'];
// $_GET['age'];

// name > 3 caracters
$nameLonger = getName($name);
$nameLonger = (strlen($name) > 3);



function getName($writen_name){
    return strlen($writen_name)>3;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify data</title>
</head>
<body>
<p>
 <?php 
    if($nameLonger){
        echo "Accesso riuscito";
    }else{
        echo "Accesso negato";
    }
    
    ?>
</p>
   
</body>
</html>