<?php
@ob_start();
session_start();

if  (isset($_SESSION['email'])) {
    
        $wsname = $_POST['wsname'];
        $email = $_SESSION['email'];

        include_once 'includes/dbh.inc.php'; 

        $query = "SELECT workshops FROM members WHERE email='$email'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $num_row = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        $count_query = "SELECT count('email') AS ws_count FROM workshops WHERE `$wsname`='paid'";
        $count = mysqli_query($conn, $count_query) or die(mysqli_error($conn));
        $count1 = mysqli_fetch_array($count);

        if ($num_row = 1) {

            $_SESSION['workshops'] = $row['workshops'];
            $ev_arr = explode (", ", $_SESSION['workshops']); 
            
            if (in_array($wsname, $ev_arr)){
                echo 'rem';
            }else {
                if ($count1['ws_count']>79){
                    echo 'full';
                    // echo $count1['ws_count'];
                } else if( $wsname =="MISSING PIECES OF BUSINESS SAGA")
                {
                     $query = "UPDATE members SET workshops=concat('$wsname' , ', ' , workshops) WHERE email = '$email'" ;
                     $sql = "UPDATE workshops SET `$wsname`='yes' WHERE email = '$email'";
                     $update = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                     echo 'true';
                }
                else{
                    // $query = "UPDATE members SET workshops=concat('$wsname' , ', ' , workshops) WHERE email = '$email'" ;
                    $sql = "UPDATE workshops SET `$wsname`='yes' WHERE email = '$email'";
                    $update = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    // $result = mysqli_query($conn, $query) or die(mysqli_error());
                    echo 'true';
                }
            }

        } else{
            echo 'false1';
        }
    
}else{
    echo 'false';
}

?>