<?php
@ob_start();
session_start();
if(isset($_SESSION['email'])){
    if(isset($_POST['type'])){

    $email = $_SESSION['email'];
    $type = $_POST['type'];

    include_once '../includes/dbh.inc.php'; 

    function encryptData($data) {
    $cipher = "aes-256-cbc"; 
    $encryption_key = "31a4135318fb765bb037aa53ee1ed3ed";
    $iv = hex2bin("4690ed68f7b720fcbe2b820d8307cb67");
    $tag = null;
    $options = 0;
    $encrypted_data = openssl_encrypt($data, $cipher, $encryption_key, $options, $iv); 
    return $encrypted_data;
    }

    switch ($type) {
        case "CLO":
            $fees=250;
            break;
        case "SMA":
            $fees=300;
            break;
        default:
            $fees=1;
            break;
    }

    $id = $_SESSION['login'];
    if($id==0){
        echo 'false';
    }else {

        $fname = $_SESSION['fname'];
        $name = str_replace(" ","$",$fname);
        $type = $_POST['type'];
        $returnurl = "https://atom.psgtech.ac.in/payconfirm.php";
        // $returnurl = "http://localhost/ATOM_2k23/payconfirm.php";
        $transactionid = "ATOM23_".$type."_".$id.substr(md5(microtime()), 0, 6);

        $query = "INSERT INTO payment (id,name,amount,transaction_id,payment_status) VALUE ('$id','$fname','$fees','$transactionid','Created')";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        $data = "atomid=ATOM23".$id." name=".$name." email=".$email." categoryid=18 transactionid=".$transactionid." fees=".$fees." returnurl=".$returnurl;
        $hash = base64_encode(hash('sha256',$data,TRUE));
        $finalstr = $data.$hash;

        $encdata = encryptData($finalstr);
        $url = "https://ecampus.psgtech.ac.in/payapp?payment=".$encdata;

        echo $url;
    }
    }else{
        echo 'false';
    }
}else{
    header("location:../login.php ");
}