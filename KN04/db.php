<?php
    //database
    $servername = "m347-kn04a-db"; // Private IP Adresse des DB Server
    $username = "root";
    $password = "example";
    //$dbname = "example-database";

    // Create connection
    $conn = new mysqli($servername, $username, $password);//, $dbname);
    // Check connectionsa<
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select Host, User from mysql.user;";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo($row["Host"] . " / " . $row["User"] . "<br />");
    }
    //var_dump($result);
?>
