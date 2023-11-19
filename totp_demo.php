<?php
    require_once('otphp/lib/otphp.php');

    $secretcode  = "JDDK4U6G3BJLEZ7Y";
    $useraccount = "piyawad.k@udru.ac.th";

    $totp = new \OTPHP\TOTP($secretcode);
    $chl = $totp->provisioning_uri($useraccount); 
    echo "url  ".$chl;

    // 'https://www.google.com/chart?chs=200x200&chld=M|0&cht=qr&chl=otpauth://totp/piyawad?secret=JDDK4U6G3BJLEZ7Y

    echo "<br>Current OTP: ". $totp->now();

    //comment
