<!-- Utilizzare questo array: https://pastebin.com/CkX3680A.
 Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
 <?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
// echo"<pre>";
//  var_dump($db);
// echo"</pre>";
  
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .gray{
            background-color:gray;
        
        }
        .green{
            background-color:green;
        }
    
    </style>
</head>
<body>
    
   
    <?php
        $roles = array_keys($db);
        echo "<pre>";
        var_dump($roles);
        echo "</pre>";
        for ($i=0; $i < count($db); $i++) { 
           
            $role= $roles[$i];
    ?>
        <div class="<?php echo $role =='teachers' ? 'gray' :'green' ;?>">
            <?php
                for ($j=0; $j < count($db[$role]) ; $j++) { 
                    $user =$db[$role][$j];
             ?>  
             <p><?php echo $user['name'] . ' ' . $user['lastname'];?></p>     
               
            
        </div>
            }

        }



  
    
   
</body>
</html>
            