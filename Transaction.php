<?php

    try {
        $db = new PDO("mysql:host=localhost; dbname=banking_sys", "root", "1234");
    }
    catch(Exception $error) {
        die("Connection failed: " . $error->getMessage());
    }

    try {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->beginTransaction();
        
        $db->exec("insert into accounts (account_id, amount) values (23, '5000')");
        $db->exec("insert into accounts (account_id, amount) values (27, '-5000')");
        
        $db->commit();
    }
    catch (Exception $error)
    {
        $db->rollBack();
        echo "Transaction not completed: " . $error->getMessage();
    }
          
?>