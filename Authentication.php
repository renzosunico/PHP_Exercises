<?php
    $authOK = false;
    $user = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];

    if (isset($user) && isset($password) && $user === strrev($password)) {
        $authOK = true;
    }

    if (!$authOK) {
        header('WWW-Authenticate: Basic realm="Top Secret Files"');
        header('HTTP/1.0 401 Unauthorized');
    }
    exit();
?>

<html>
	<head> <title> </title> </head>

	<body>

	<?php

	?>

	</body>
</html>
