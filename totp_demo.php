<?php
    include 'otphp/lib/otphp.php';
    include 'Base32.php';

    
    // edit account here
    $useraccount = "piyawad.k@udru.ac.th";
    // edit secret code here
    $secret = "secretcode";
    
    $a = new Base32en();
    $secretcode = $a->base32_encode($secret); 
    $totp = new \OTPHP\TOTP($secretcode);
    $chl = $totp->provisioning_uri($useraccount); 

?>
<br>
<img src='https://www.google.com/chart?chs=250x250&chld=M|0&cht=qr&chl=<?php echo $chl; ?>'>

<?php
     echo "<br><h1>OTP ===> ". $totp->now(). "</h1>"; 
?>
