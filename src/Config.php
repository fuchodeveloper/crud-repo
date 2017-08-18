<?php

/**
 * Database credentials
 */

$server = "127.0.0.1";
$username = "username";
$password = "password";
$database = "database-name";

/**
 * Connect to the mysql database using the credentials specified above
 * If connection is successful, read data from users table else display error message
 */

    try{

        $connection = new PDO("mysql:host=$server;dbname=$database", $username, $password);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    } catch (PDOException $exception) {
        echo "An error occurred  - " . $exception->getMessage();
    }

    $users = $connection->query("SELECT name FROM users WHERE age >= 18 ORDER BY name ASC");
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP script to read and fetch from MySQL database</title>
</head>
<body>

    <h3>PHP script to read and fetch names of users in alphabetical order.</h3>
    <p><b>Names of users - </b><br>
        <?php

        foreach ($users as $user) {
            echo $user["name"] . "<br>";
        }

        ?>
    </p>

</body>
</html>
