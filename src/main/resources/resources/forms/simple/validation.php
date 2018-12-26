<?php
   if (isset($_GET["appsubmit"])) {
    $nameErr = $emailErr = "";
    $name = $email = "";
    $price = ($_GET["price"]);
    
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (empty($_GET["name"])) {
            $nameErr = "Chýba meno.";
        }
        else {
            $name = substr($_GET["name"],0,60);
            $nameErr = test_name($name);
        }
    
        if (empty($_GET["email"]))  {
            $emailErr = "Chýba email.";
        }
        else {
            $email = substr($_GET["email"],0,100);
            $emailErr = test_email($email);
        }

        if  ( $nameErr == "" && $emailErr == "" ){
           appendToParticipantList($name, $email, $price);
           
       } 
    
    }
} 

function appendToParticipantList($name, $email, $price){
   $reg = file_put_contents('zoznam.txt', $name."\n", FILE_APPEND | LOCK_EX);
   $allreg = file_put_contents('data/zoznamajsadresami.txt', $name.", ".$email.", ".$price."\n", FILE_APPEND | LOCK_EX);
   if($allreg === false || $reg === false ) {
       die('Registrácia zlyhala: napíšte nám, prosím, email na office.lezeckaakademia@gmail.com.');
   }
   else {   
        header("Location: submit_confirmation.php");
       
   }
}

function test_name($name){
     if (!preg_match("/^[a-zA-Z ÁáČčĎďéÉěĚÍíĺĹĽľŇňóÓřŘŠšŤťÚúÝýžŽ]*$/",$name)) {
        return "Meno nesmie obsahovať špeciálne znaky.";
    }
}

function test_email($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Neplatný email.";
      }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>