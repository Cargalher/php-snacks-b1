<!-- Creare un array con 15 numeri casuali,
 tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

 <?php


$numbers = [];
// option 1
// for ($i=0; count($numbers) <15 ; $i++) { 
//     $randomNumber = rand(1, 100);
//     if(!in_array($randomNumber, $numbers)){
//         $numbers[]= $randomNumber; 
//     }
// }



// option2
while (count($numbers) < 15){
    $randomNumber = rand(1, 100);
    if(!in_array($randomNumber,$numbers)){
        $numbers[] = $randomNumber;
    }
}


echo "<pre>";
var_dump($numbers);
echo"</pre>";

 ?>