<?php
    require_once('otphp/lib/otphp.php');

    $totp = new \OTPHP\TOTP("JDDK4U6G3BJLEZ7Y");
    $chl = $totp->provisioning_uri("piyawad.k@udru.ac.th"); 
    echo "url  ".$chl;

    // 'https://www.google.com/chart?chs=200x200&chld=M|0&cht=qr&chl=otpauth://totp/piyawad?secret=JDDK4U6G3BJLEZ7Y

    echo "<br>Current OTP: ". $totp->now();
