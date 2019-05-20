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
    <h1> Add spawn</h1>

    <?php
        if(isset($_POST['nom']) && isset($_POST['photo'])) {
            $nom = $_POST['nom'];
            $photo = $_POST['photo'];
            $req = $pdo->prepare('INSERT INTO spawn(Nom,photo)
                          VALUES(?,?)');
            $req->execute([$nom, $photo]);
        }
    ?>

    <form method="POST" action="">
        <label for="input_nom">Nom du spawn </label> <br/>
        <input type="text" name="nom" id="input_photo"> <br/>
        <label for="input_photo">Photo du spawn </label> <br/>
        <input type="text" name="photo" id="input_photo"> <br/>
        <button type="submit"> submit</button>
    </form>

    </body>
</html>