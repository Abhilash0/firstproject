<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <title></title>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
 </head>
 <body>
<div class="container">
        <div>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">open model</button>
        </div>
        <h2>All Records</h2>
        <div id="records_contant">
        </div>

                    <!-- the modal -->
                       <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                      <!-- Modal Header -->

                                    <div class="modal-header">
                                      <h4 class="modal-title">Fill Information</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>                
                                    </div>

                                    <!-- Modal Body -->

                                          <div class="modal-body">
                                                <form method="post" id="add_details">
                                                        <div class="form-group">
                                                         <label>FirstName</label>
                                                         <input type="text" name id="firstname" class="form-control" required />
                                                        </div>
                                                        <div class="form-group">
                                                         <label>LastName</label>
                                                         <input type="text" name="" id="lastname" class="form-control" required />
                                                        </div>
                                                        <div class="form-group">
                                                         <label>Email</label>
                                                         <input type="text" name="" id="email" class="form-control" required />
                                                        </div>
                                                        
                                                </form>
                                          </div>
                                  
                                          <!-- Modal Footer -->

                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-danger" onclick="addRecord()">Save</button>

                                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>                                    
                                            </div>
                                </div>                                  
                          </div>                                  
                      </div>


                      <!-- update modal -->

                      <!-- the modal -->
                       <div class="modal" id="update_user_modal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                      <!-- Modal Header -->

                                    <div class="modal-header">
                                      <h4 class="modal-title">Fill Information</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>                
                                    </div>

                                    <!-- Modal Body -->

                                          <div class="modal-body">
                                                <form method="post" id="add_details">
                                                        <div class="form-group">
                                                         <label>update_FirstName</label>
                                                         <input type="text" name="" id="update_firstname" class="form-control" required/>
                                                        </div>
                                                        <div class="form-group">
                                                         <label>update_LastName</label>
                                                         <input type="text" name="" id="update_lastname" class="form-control" required />
                                                        </div>
                                                        <div class="form-group">
                                                         <label>update_Email</label>
                                                         <input type="text" name="" id="update_email" class="form-control" required />
                                                        </div>
                                                        
                                                </form>
                                          </div>
                                  
                                          <!-- Modal Footer -->

                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-primary" onclick="updateuserdetail()">Update</button>

                                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  

                                              <input type="hidden" name="" id="hidden_user_id">                                  
                                            </div>
                                </div>                                  
                          </div>                                  
                      </div>
          
      
</div>  
        
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 <script type="text/javascript">

      $(document).ready(function(){
        readRecords();
      });
      function readRecords(){
        var readrecord = "readrecord";
        $.ajax({
             url:"insert.php",
            type:"post",
            data: {readrecord:readrecord},
            success:function(data,status){
              $('#records_contant').html(data);
            }
          });
      }
     function addRecord(){
      var firstname = $('#firstname').val();
      var lastname = $('#lastname').val();
      var email = $('#email').val();

          $.ajax({
            url:"insert.php",
            type:"post",
            data: {
              firstname : firstname,
              lastname : lastname,
              email : email

            },
            success:function(data,status){
                readRecords(); 
            }
          });
     }

     ///Delete User

        function DeleteUser(deleteid){
            var conf = confirm("Are You Sure");
                if (conf == true){
                  $.ajax({
                        url: "insert.php",
                        type: "post",
                        data: {deleteid:deleteid},
                        success:function(data,status){
                          readRecords();
 
                        }
                  });
                }
        }

/////get details

              function GetUserDetails(id){
                  $('#hidden_user_id').val(id);

                  $.post("insert.php", 
                  {id:id},
                  function(data,status){
                  var user = JSON.parse(data);
                      $('#update_firstname').val(user.firstname);
                      $('#update_lastname').val(user.lastname);
                      $('#update_email').val(user.email);
                  }
                    );

                  $('#update_user_modal').modal("show");
              }

///update modal

              function updateuserdetail(){
                var firstnameupd = $('#update_firstname').val();
                var lastnameupd = $('#update_lastname').val();
                var emailupd = $('#update_email').val();

                var hidden_user_idupd = $('#hidden_user_id').val();

                $.post("insert.php", {
                  hidden_user_idupd:hidden_user_idupd, 
                  firstnameupd:firstnameupd,
                  lastnameupd:lastnameupd, 
                  emailupd:emailupd,
                },
                  function(data,status){
                    $('#update_user_modal').modal("hide");
                    readRecords();
                  }
                  );
              }

   </script> 

   </body>
   </html>

