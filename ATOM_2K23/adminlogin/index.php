<?php
@ob_start();
session_start();

if(isset($_GET['page'])){
    $_SESSION['page']=$_GET['page'];
}
if(isset($_POST['admin'])){
    $_SESSION['admin']=$_POST['admin'];
}
if(isset($_SESSION['admin']) && isset($_GET['page']) && $_SESSION['admin']=="atom23@psg")
    {
        header("location:".$_SESSION['page'].".php ");
        

        // if($page=="registrations")
        //       redirect('registrations.php')
    }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Atom2k23 - LOGIN</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- <script type="text/javascript">
                    $(document).ready(function(){
                
                $("#ad-btn").click(function(){
                    
                        password=$("#admin").val();
                        $.ajax({
                            type: "POST",
                            url: "index.php",
                            data: "admin=" + password,
                            success: function(html){
                            if(html=='true')
                            {
                                
                                $("#add_err1").html('<div class="alert alert-success"> \
                                                        <strong>Authenticated</strong> \ \
                                                    </div>');
                            
                            } else {
                                    $("#add_err1").html('<div class="alert alert-danger"> \
                                                        <strong>Email not found!</strong> \ \
                                                    </div>');
                                    
                            
                            }
                            },
                            beforeSend:function()
                            {
                                $("#add_err1").html("loading...");
                            }
                        });
                        return false;
                    });
        });
    </script> -->
</head>
<body>
    <form method="POST">
    <input type="password" id="admin" name="admin">
    <input type="submit" id="ad-btn">
    </form>
</body>