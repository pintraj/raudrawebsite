<?php
/**
 * Created by PhpStorm.
 * User: pappu
 * Date: 12/5/2016
 * Time: 1:01 PM
 */
?>
<?php

function getchecksum($MerchantId,$Amount,$OrderId ,$URL,$WorkingKey)
{
    $str ="$MerchantId|$OrderId|$Amount|$URL|$WorkingKey";
    $adler = 1;
    $adler = adler32($adler,$str);
    return $adler;
}

function verifychecksum($MerchantId,$OrderId,$Amount,$AuthDesc,$CheckSum,$WorkingKey)
{
    $str = "$MerchantId|$OrderId|$Amount|$AuthDesc|$WorkingKey";
    $adler = 1;
    $adler = adler32($adler,$str);
    if($adler == $CheckSum)
        return "true" ;
    else
        return "false" ;
}


function adler32($adler , $str)
{
    $BASE = 65521 ;
    $s1 = $adler & 0xffff ;
    $s2 = ($adler >> 16) & 0xffff;
    for($i = 0 ; $i < strlen($str) ; $i++)
    {
        $s1 = ($s1 + Ord($str[$i])) % $BASE ;
        $s2 = ($s2 + $s1) % $BASE ;
    }
    return leftshift($s2 , 16) + $s1;
}



function leftshift($str , $num)
{
    $str = DecBin($str);
    for( $i = 0 ; $i < (64 - strlen($str)) ; $i++)
        $str = "0".$str ;
    for($i = 0 ; $i < $num ; $i++)
        $str = $str."0"; $str = substr($str , 1 ) ;
    return cdec($str) ;
}


function cdec($num)
{
    $dec = 0;
    for ($n = 0 ; $n < strlen($num) ; $n++)
    {
        $temp = $num[$n] ;
        $dec = $dec + $temp*pow(2 , strlen($num) - $n - 1);
    }
    return $dec;
}


$Merchant_Id ="106155";//This id(also User Id) available at "Generate Working Key" of "Settings & Options"
$Amount = '50';//your script should substitute the amount in the quotes provided here
$Order_Id = "";//your script should substitute the order description in the quotes provided here
$Redirect_Url = "success.php";//your redirect URL where your customer will be redirected after authorisation from CCAvenue
$WorkingKey = "60CA289BFD25BFCCB589C6D0F56C70F9";//put in the 32 bit alphanumeric key in the quotes provided here.Please note that get this key ,login to your CCAvenue merchant account and visit the "Generate Working Key" section at the "Settings & Options" page.
$Checksum = getCheckSum($Merchant_Id,$Amount,$Order_Id ,$Redirect_Url,$WorkingKey);
$billing_cust_name="";
$billing_cust_address="" ;
$billing_cust_state="";
$billing_cust_country="";
$billing_cust_tel="";
$billing_cust_email="";
$delivery_cust_name="";
$delivery_cust_address="";
$delivery_cust_state = "";
$delivery_cust_country = "";
$delivery_cust_tel="";
$delivery_cust_notes="";
$billing_city = "";
$billing_zip = "";
$delivery_city = "";
$delivery_zip = "";
?>


<form id="ccavenue" method="post" action="https://world.ccavenue.com/servlet/ccw.CCAvenueController">
    <input type="hidden" name="Merchant_Id" value="">
    <input type="hidden" name="Amount" value="<?php echo $Amount; ?>">
    <input type="hidden" name="Currency" value="INR">
    <input type="hidden" name="Order_Id" value="<?php echo $Order_Id; ?>">
    <input type="hidden" name="Redirect_Url" value="<?php echo $Redirect_Url; ?>">
    <input type="hidden" name="TxnType" value="A">
    <input type="hidden" name="actionID" value="TXN">
    <input type="hidden" name="Checksum" value="<?php echo $Checksum; ?>">
    <input type="text" name="billing_cust_name" value="">
    <input type="text" name="billing_cust_address" value="">
    <input type="hidden" name="billing_cust_country" value="">
    <input type="hidden" name="billing_cust_state" value="">
    <input type="hidden" name="billing_cust_city" value="">
    <input type="hidden" name="billing_zip" value="">
    <input type="hidden" name="billing_cust_tel" value="">
    <input type="hidden" name="billing_cust_email" value="">
    <input type="hidden" name="delivery_cust_name" value="">
    <input type="hidden" name="delivery_cust_address" value="">
    <input type="hidden" name="delivery_cust_country" value="">
    <input type="hidden" name="delivery_cust_state" value="">
    <input type="hidden" name="delivery_cust_tel" value="">
    <input type="hidden" name="delivery_cust_notes" value="">
    <input type="hidden" name="Merchant_Param" value="2">
    <input type="hidden" name="billing_zip_code" value="">
    <input type="hidden" name="delivery_cust_city" value="">
    <input type="submit" value="Buy Now" />
</form>﻿