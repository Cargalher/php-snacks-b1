<!-- Creare un array contenente qualche alunno di un’ipotetica classe.
 Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
  Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

  <?php

    $students = [
        [
        "name" => "Leonardo",
        "lastname" => "Celia",
        "grades" => [10, 8, 9, 10, 8, 7]
        ],
        [
            "name" => "Aurora",
            "lastname" => "Hernandez",
            "grades" => [7, 6, 10, 7, 7, 6]
        ],
        [
            "name" => "Max",
            "lastname" => "Cohen",
            "grades" => [8, 8, 9, 6, 7, 6]
        ]
    ];
    
    // echo"<pre>";
    // var_dump($students);
    // echo"</pre>";
 
 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Students</title>
 </head>
 <body>
 <h1>Class List </h1>
    <?php foreach($students as $student) { ?>
        <ul>
            <li><?php echo "Name: " . $student["name"] ?></li>
            <li><?php echo "lastname: " . $student["lastname"] ?></li>
            <li><?php echo "Average-grade: " . array_sum($student["grades"]); ?></li>
        </ul>
    <?php } ?>
 </body>
 </html>