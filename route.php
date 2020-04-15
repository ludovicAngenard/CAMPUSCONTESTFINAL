<!DOCTYPE html>
    <html>
        <head>
            <title>Cours PHP / PDO / MySQL</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="cours.css">
        </head>
        <body>
            <h1>Bases de données MySQL</h1>  
            <?php
            $user='root';
            $pass='';
                try {
                    $dbh = new PDO('mysql:host=localhost;dbname=portfoliov3', $user, $pass);
                    foreach($dbh->query('SELECT * from FOO') as $row) {
                        print_r($row);
                    }
                    $dbh = null;
                } catch (PDOException $e) {
                    print "Erreur !: " . $e->getMessage() . "<br/>";
                    die();
                }
            ?>
        </body>
    </html>