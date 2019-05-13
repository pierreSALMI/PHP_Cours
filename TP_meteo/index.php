<?php 
    if ( ( date("h") <= "07" ) || ( date("h") >= "19" )) {
    echo '<style> 
            body {background: black; color: white;}
        </style>';
    }

    echo '<h1> Bonjour, voici la météo du 06/05/2019 </h1>';
    echo '<a href="bordeaux.php" > bordeaux </a>';
    echo '</br>';
    echo '<a href="paris.php" > Paris </a>';