<?php
    $db = new mysqli("localhost", "root", "1234", "library");
    $sql = "SELECT author_id, title from books";
    $result = $db->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "{$row['author_id']} is the author id of: {$row['title']} <br/>";
    }
    $result->close();
    $db->close();

?>