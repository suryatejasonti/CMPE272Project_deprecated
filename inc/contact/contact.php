<?php
$string = file_get_contents("inc/contact/contact.txt");
$json_a=json_decode($string,true);

foreach ($json_a as $key => $value) 
{
    echo '<div class="address-text">
         <p>
         <span>Address:</span>' ; echo $value["address"]; echo '</p>
        </div>
        <div class="phone-text">
        <p>
            <span>Phone:</span>'; echo $value["number"]; echo '</p>
        </div>
        <div class="email-text">
        <p>
            <span>Email:</span>'; echo $value["email"]; echo '</p>
        </div>';
  }
?>