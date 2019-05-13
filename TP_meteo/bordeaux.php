<?php 
    $heure = date("h")
    if ( ( $heure <= "07" ) || ( $heure >= "19" )) {
        echo '<style> 
                body {background: black; color: white;}
                img { filter: invert(100%); -webkit-filter: invert(100%); }
            </style>';
    }
    echo '<h1> Bonjour, voici la météo de bordeaux </h1>';

    for ($i = 0; $i < 4; $i++) {
        echo '<h2> J+' . $i .'</h2>';
        echo '<img src="https://www.prevision-meteo.ch/uploads/widget/bordeaux_' . $i . '.png" >';
    };