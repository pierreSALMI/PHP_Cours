<?php 
    if ( ( date("h") <= "07" ) || ( date("h") >= "19" )) {
        echo '<style> 
                body {background: black; color: white;}
                img { filter: invert(100%); -webkit-filter: invert(100%); }
            </style>';
    }
    echo '<h1> Bonjour, voici la météo de Paris </h1>';

    for ($i = 0; $i < 4; $i++) {
        echo '<h2> J+' . $i .'</h2>';
        echo '<img src="https://www.prevision-meteo.ch/uploads/widget/paris_' . $i . '.png" >';
    };