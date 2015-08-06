<?php
    $db = new mysqli("localhost", "root", "1234", "banking_sys");
    $sql = "insert into accounts (account_id, amount) values (44, '6000')";

    if($db->query($sql)) {
        echo "Account saved successfully.";
    }
    else {
        echo "INSERT attempt failed, please try again later, or call tech support.";
    }

    $db->close();
?>