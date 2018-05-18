<?php


if ($_SERVER["PHP_AUTH_USER"] == "zaz" && $_SERVER["PHP_AUTH_PW"] == "jaimelespetitsponeys")
    $valid_user = TRUE;
else
{
    $valid_user = FALSE;
}
if (!$valid_user)
{
    header("WWW-Authenticate: Basic realm=''Espace membres'");
    header('HTTP/1.0 401 Unauthorized');
    ?>
<html><body>Cette zone est accessible uniquement aux membres du site</body></html>
<?php
}
else
{?>
<html><body>
Bonjour Zaz<br />
<?php echo $data."\n"; ?>
</body></html>
<?php
}
?>
