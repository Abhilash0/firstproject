<?php 
        
    $con = mysqli_connect("localhost", "root", "", "registration");
    if(isset($_POST['submit'])){

        $email = mysqli_real_escape_string($con,$_POST('email'));
        $query = "select * from register where email = '$email'";
        $run = mysqli_query($con,$query);
        if(mysqli_num_rows($run)>0){
            $row = mysqli_fetch_array($run);
            $bd_email = $row['email'];
            $db_id = $row['id'];
            $token = uniqid(md5(time()));  
            $forgetpass_url = 'http://localhost/demo?token=' . $token;
            ////this is a random token
           // $query = "INSERT INTO reset(id, email, token) VALUES (NULL, '$email', '$token')";
           // if(mysqli_query($con,$query)){
                $to = $email;
                $subject = "Password reset link";
                $message = "click <a href='.$forgetpass_url.'>here</a> to reset your password";
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= 'From: <demo@demo.com>' . "\r\n";
                mail($to, $subject, $message, $headers);  ///if workling on live server
                $msg = "<div class='alert alert-success'>Password reset link has been send to the email.</div>";
          //  }
        }else{
                 $msg = "<div class='alert alert-success'>User not found.</div>";
        }

    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Forget Password</title>
         <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>
<body>

            <div class="container">
                <h1 class="text-success text-center">Forget Password</h1>
                    <div class="col-lg-8 m-auto d-block shadow">

                        <form class="bg-light" action="" method="POST">
                                                            
                                <div class="form_group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="" id="email">                                 
                                </div><br>

                                <?php 
                                if(isset($msg)){ echo $msg; } ?>
                                <button name="submt" class="btn btn-primary">submit</button>
                                

                        </form>                   
                </div>                
            </div>

      
</body>
</html>

