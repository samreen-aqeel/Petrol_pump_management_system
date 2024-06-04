<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-5">
                <div class="card" style="height: 380px;">
                    <div class="card-header text-center mb-4">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form id="loginForm" method="POST">
                            <div class="form-group mb-4">
                                <input type="email" id="email" name="email" placeholder="Enter Email Address" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control" required>
                            </div>
                            <div class="row mb-4">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <button type="button" id="login" class="btn btn-primary w-100">Login</button>
                                </div>
                            </div>
                            <div class="text-center">
                                <p>If you don't have an account, <a href="register.php">Sign Up</a> here.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap5.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
    //     $(function() {
    //         $('#login').click(function(e) {
    //             e.preventDefault();

    //             var form = $('#loginForm')[0];
    //             var valid = form.checkValidity();

    //             if (valid) {
    //                 var email = $('#email').val();
    //                 var password = $('#password').val();

    //                 $.ajax({
    //                     type: 'POST',
    //                     url: 'login.php',
    //                     data: {
    //                         email: email,
    //                         password: password
    //                     },
    //                     success: function(data){
    //                         Swal.fire({
    //                             title: 'SUCCESSFUL',
    //                             text: 'ADMIN SUCCESSFULLY LOGIN',
    //                             icon: 'success'
    //                         }).then(() => {
    //                             // Clear the form inputs
    //                             $('#loginForm')[0].reset();
    //                             window.location.href = 'admin/index.php';
    //                         });
    //                     },
    //                     error: function(data){
    //                         Swal.fire({
    //                             title: 'Error',
    //                             text: 'Something Went Wrong',
    //                             icon: 'error'
    //                         });
    //                     }
    //                 });
    //             } else {
    //                 alert('Please Fill up the form');
    //             }               
    //         });
    //     });
    // </script>
</body>
</html>
