<!-- - Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
- Stampiamo a schermo tutte le partite con questo schema:
- Olimpia Milano - Cantù | 55-60  -->

<?php 

$matches = [
    [
        "home" => 'Chicago Bulls',
        "visitor" => 'Los Angeles Lakers',
        "homeScore" => '104',
        "visitorScore" => '93',
    ],
    [
        "home" => 'Boston Celtics',
        "visitor" => 'Miami Heat',
        "homeScore" => '131',
        "visitorScore" => '119',
    ],
    [
        "home" => 'San Antonio Spurs',
        "visitor" => 'New York Knicks',
        "homeScore" => '120',
        "visitorScore" => '114',
    ],
    [
        "home" => 'Detroit Pistons',
        "visitor" => 'Orlando Magic',
        "homeScore" => '96',
        "visitorScore" => '103',
    ],
    [
        "home" => 'Philadelphia 76ers',
        "visitor" => 'Toronto Raptors',
        "homeScore" => '99',
        "visitorScore" => '104',
    ],
    

];
var_dump($matches);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basketball Match</title>
</head>
<body>
    <h1> 🏀⛹️‍♂️ NBA MATCHES ⛹️‍♂️🏀</h1>
    <span>
        <?php 
            echo $matches[0][0]."-".$matches [0][1]."|".$matches [0][2]."-".$matches [0][3]."<br>";
            echo $matches[1][0]."-".$matches [1][1]."|".$matches [1][2]."-".$matches [1][3]."<br>";
            echo $matches[2][0]."-".$matches [2][1]."|".$matches [2][2]."-".$matches [2][3]."<br>";
            echo $matches[3][0]."-".$matches [3][1]."|".$matches [3][2]."-".$matches [3][3]."<br>";
            echo $matches[4][0]."-".$matches [4][1]."|".$matches [4][2]."-".$matches [4][3]."<br>";

        ?>
    </span>

</body>
</html>