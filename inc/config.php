<?php
//
$db = new mysqli("localhost", "test", "test", "test");

if (!$db->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $db->error);
    } else {
        $db->character_set_name();
    }
    if ($mysqli->connect_errno) {
        die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
    } 
?>