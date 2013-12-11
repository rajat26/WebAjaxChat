<?php
    session_start();
    $username = "achat";
    $password = "Sahil@raj26";
    $database = "chat";
    $server = "184.168.225.79";

    $db_handle = mysql_connect($server, $username, $password);

   

    $db = mysql_select_db($database, $db_handle);
   

    

    $sql = "INSERT INTO messages(username, message) VALUES ('" . $_SESSION['user'] . "', '" . $_POST['message'] . "');";
 
    $result = mysql_query($sql);

    //echo ($result);

    echo ("<table>");

    $sql = "SELECT * FROM messages;";


    $result = mysql_query($sql);

    while($row = mysql_fetch_assoc($result))
    {
        echo ("<tr><td>".$row['username']."</td><td>".$row['message']."</td></tr>");
    }
    echo ("</table>");

    mysql_close($db_handle);
?>
