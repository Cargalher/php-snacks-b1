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
echo "<pre>";
var_dump($matches);
echo "</pre>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basketball Match</title>
</head>
<style>
    span{
        line-height:30px;
    }
</style>
<body>
    <h1> 🏀⛹️‍♂️ NBA MATCHES ⛹️‍♂️🏀</h1>
    <span>
        <?php 
            echo $matches[0]["home"]." - ".$matches [0]["visitor"]." | ".$matches [0]["homeScore"]." - ".$matches [0]["visitorScore"]."<br>";
            echo $matches[1]["home"]." - ".$matches [1]["visitor"]." | ".$matches [1]["homeScore"]." - ".$matches [1]["visitorScore"]."<br>";
            echo $matches[2]["home"]." - ".$matches [2]["visitor"]." | ".$matches [2]["homeScore"]." - ".$matches [2]["visitorScore"]."<br>";
            echo $matches[3]["home"]." - ".$matches [3]["visitor"]." | ".$matches [3]["homeScore"]." - ".$matches [3]["visitorScore"]."<br>";
            echo $matches[4]["home"]." - ".$matches [4]["visitor"]." | ".$matches [4]["homeScore"]." - ".$matches [4]["visitorScore"]."<br>";

        ?>
    </span>

</body>
</html>