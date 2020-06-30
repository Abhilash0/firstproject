<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
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
                <h1 class="text-success text-center">Reset Password</h1>
                    <div class="col-lg-8 m-auto d-block shadow">

                        <form class="bg-light" action="" method="POST">
                                                            
                                <div class="form_group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="" id="email">                                 
                                </div><br>

                                <div class="form_group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" value="" id="email">                                 
                                </div><br>

                                <div class="form_group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="confirmpassword" class="form-control" value="" id="email">                                 
                                </div><br>

                                <button name="submt" class="btn btn-primary">Reset Password</button>
                                

                        </form>                   
                </div>                
            </div>

      
</body>
</html>
