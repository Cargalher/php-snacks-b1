<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
 Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

 <?php 
    $quote = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, voluptate. Cum aliquam minima sequi nesciunt nihil culpa alias expedita odio voluptatem dolor. hic natus perspiciatis repudiandae, ut illum esse sapiente nostrum itaque dolores. Temporibus tenetur repellat sit, magni quod. ducimus alias, exercitationem quisquam aut et iste doloribus qui quia! Obcaecati";
    $quoteDivided = explode(".", $quote);
    echo "<pre>";
    var_dump($quoteDivided);
    echo "</pre>";
    
 
 ?>