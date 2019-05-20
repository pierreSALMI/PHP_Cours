<html>
    <head>
    <?php
    $database_host = 'localhost';
    $database_port = '3306';
    $database_dbname = 'spawn';
    $database_user = 'root';
    $database_password = 'root';
    $database_charset = 'UTF8';
    $database_options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];

    $pdo = new PDO(
        'mysql:host=' . $database_host . 
        ';port=' . $database_port . 
        ';dbname=' . $database_dbname . 
        ';charset=' . $database_charset, 
        $database_user,
        $database_password,
        $database_options
    ); 
    ?>

    </head>
    <body>
        <?php
        $oui = 0;
        $nb = rand(1,4);
        while($nb == $oui){
            $nb = rand(1,4);
        }
        $req = $pdo->prepare('SELECT * FROM spawn WHERE id = ?'); 
        $req->execute([$nb]);
        $spawn = $req->fetch();?>
        <h1> Votre spawn est <?=$spawn['Nom'];?></h1>
        <img src="images/<?=$spawn['photo']?>" style="max-width:500px;max-height:500px;">
        <br/>
        <a href="index.php">New Spawn</a>
        <a href="add_spawn.php"> Add spawn</a>
    </body>
</html>