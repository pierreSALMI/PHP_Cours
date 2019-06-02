<?php
    include './pokemon.php';
    include './carapuce.php';  
    include './salameche.php';

    include './balls/ball.php';
    include './balls/pokeball.php';

    include './potion/potions.php';
    include './potion/potion.php';
    include './potion/superpotion.php';

    $carapuce = new Carapuce(5);
    var_dump($carapuce);

    $salameche = new Salameche(5);
    var_dump($salameche);

    $pokeball = new Pokeball();

    $potion = new Potion();
    $superpotion = new Superpotion();
    
    $nb_pokeball = 0; //3 MAX
    $nb_potion = 0; //2MAX
    $nb_superpotion = 0; //1MAX

    while($carapuce->life > 0 && $salameche->life > 0){
            if ($salameche->life < 50 && $nb_pokeball < 3){
                echo nl2br("Tentative de capture \n");
                $pokeball->capture($salameche);
                $nb_pokeball += 1; 
            }
            else if($carapuce->life <= 50 && $nb_potion < 2){
                $potion->heal($carapuce);
                echo nl2br("Heal carapuce \n");
                $nb_potion += 1;
            }
            else if($carapuce->life <= 30 && $nb_superpotion < 1){
                $superpotion->heal($carapuce);
                echo nl2br("SuperHeal carapuce \n");
                $nb_superpotion += 1;
            }
            else{
                $carapuce->charge($salameche);
            }
            if($carapuce->life <= 0){
                echo nl2br ("Carapuce est mort");
            }
            else if($salameche->life <= 0){
                echo nl2br ("Salameche est mort"); 
            }
            else {
                $salameche->charge($carapuce);
            }
    }