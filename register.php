<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <style>
        body {
            background-image: url('assets/images/1713169194147.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-center mb-3">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form id="registrationForm" method="post" action="reg-process.php">
                            <div class="form-group mb-4">
                                <input type="text" name="fname" id="firstname" placeholder="Enter First Name" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="lname" id="lastname" placeholder="Enter Last Name" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" name="email" id="e-mail" placeholder="Enter E-mail Address" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="contact" id="cont" placeholder="Enter Contact Number" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="address" id="addr" placeholder="Enter Resident Address" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" name="password" id="pass" placeholder="Enter Password" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" name="cpass" id="cpass" placeholder="Confirm Password" class="form-control" required>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <button type="button" id="reg" class="btn btn-primary w-100">Register Now</button>
                                </div>
                            </div>
                            <div class="text-center">
                                <p>If you already have an account, <a href="index.php">Sign In</a> here.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
    //     $(function(){
    //         $('#reg').click(function(e) {
    //             e.preventDefault();

    //             var form = $('#registrationForm')[0];
    //             var valid = form.checkValidity();
                
    //             if(valid){
    //                 var fname    = $('#firstname').val();
    //                 var lname    = $('#lastname').val();
    //                 var email    = $('#e-mail').val();
    //                 var contact  = $('#cont').val();
    //                 var address  = $('#addr').val();
    //                 var password = $('#pass').val();
    //                 var cpass    = $('#cpass').val();

    //                 if (password !== cpass) {
    //                     Swal.fire({
    //                         title: 'Error',
    //                         text: 'Passwords do not match',
    //                         icon: 'error'
    //                     });
    //                     return;
    //                 }

    //                 $.ajax({
    //                     type: 'POST',
    //                     url: 'reg-process.php',
    //                     data: {
    //                         register: true,  // Add this line to match the PHP condition
    //                         fname: fname,
    //                         lname: lname,
    //                         email: email,
    //                         contact: contact,
    //                         address: address,
    //                         password: password,
    //                         cpass: cpass
    //                     },
    //                     success: function(data){
    //                         Swal.fire({
    //                             title: 'SUCCESSFUL',
    //                             text: 'ADMIN SUCCESSFULLY REGISTERED',
    //                             icon: 'success'
    //                         }).then(() => {
    //                             // Clear the form inputs
    //                             $('#registrationForm')[0].reset();
    //                             window.location.href = 'index.php';
    //                         });
    //                     },
    //                     error: function(data){
    //                         Swal.fire({
    //                             title: 'Error',
    //                             text: 'Something went wrong',
    //                             icon: 'error'
    //                         });
    //                     }
    //                 });
    //             } else {
    //                 alert('Please fill out the form correctly.');
    //             }               
    //         });
    //     });
    // </script>
</body>
</html>