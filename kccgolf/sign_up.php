<?php
    include "db.php";
    
    $pnum = $_POST["phone1"].$_POST["phone2"].$_POST["phone3"];
    $phone = preg_replace("/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/","$1-$2-$3", $pnum);

    $pnum2 = $_POST["phone11"].$_POST["phone22"].$_POST["phone33"];
    $phone2 = preg_replace("/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/","$1-$2-$3", $pnum2);

    $address = $_POST["address1"].$_POST["address2"];

$sql = "insert into member set name='{$_POST['name']}' ,eName='{$_POST["eName"]}',bYear='{$_POST["bYear"]}',bMonth='{$_POST['bMonth']}',bDay='{$_POST['bDay']}',id='{$_POST['id']}',pw='{$_POST['pw']}',fN='{$Number}',fPn='{$phoneNumber}',sns='{$_POST['sns']}',email='{$_POST['email']}',fPostN='{$_POST['fPostN']}',address='{$_POST['address']}',Iaddress='{$_POST['Iaddress']}',dm='{$_POST['dm']}',emp='{$_POST['emp']}',op='{$_POST['op']}',sp='{$_POST['sp']}',efPostN='{$_POST['efPostN']}',eAddress='{$_POST['eAddress']}',eIaddress='{$_POST['eIaddress']}',efN='{$ephoneNumber}',ffN='{$fexNumber}',wedding='{$_POST['wedding']}',wYear='{$_POST['wYear']}',wMonth='{$_POST['wMonth']}',wDay='{$_POST['wDay']}'";
?>