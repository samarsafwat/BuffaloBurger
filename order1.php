
<html>
    <head><title> Buffalo Burger </title></head>
<body bgcolor="Ivory">

    <img src="img\cover2.jpg" width="1400"> 



    
    <font size="4" align="centre" color="OrangeRed" face="Verdana" >
        <div> Buffaloburger</div>
        <br>
        <form method="post" action="http://localhost:21350/DistributedSystemProject/Addition?WSDL" >
           
             
             TWO PLUS
            <br>
            Please enter Sandwiches you want:</font>
            <br><p>
            <input type="radio" name="s1" value="34"> CholoChilis 34 EGP<br>
            <input type="radio" name="s1" value="35"> bacon mushrom 35 EGP<br>
            <input type="radio" name="s1" value="36"> animal style 36 EGP<br>
            <br>
            <input type="radio" name="s2" value="34">  CholoChilis 34 EGP<br>
            <input type="radio" name="s2" value="35"> bacon mushrom 35 EGP<br>
            <input type="radio" name="s2" value="36"> animal style 36 EGP<br>
            </p>
            <input type="submit" value="Checkout" onsubmit="http://localhost:21350/DistributedSystemProject/Addition?WSDL">

        </form>
    </body>
</html>


<?php
require 'lib/nusoap.php';
//WSDL location
$wsdl_url ="http://localhost:21350/DistributedSystemProject/AdditionWebService?WSDL";
//create soap client
$client = new SoapClient($wsdl_url);
//specific service call
$result = $client->AdditionWebService();
//display result on browser
print_r($result);

?>
