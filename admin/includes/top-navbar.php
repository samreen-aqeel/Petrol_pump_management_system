<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <div class="navbar-brand ps-3">
                <img src="assets/images/logo.png" alt="Logo" style="height: 40px;">
            </div>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
    <div class="input-group">
        <li class="list-inline-item google-multi language-list">
            <div id="google_element"></div>
        </li>
    </div>
</form>

            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item " href="profile.php"><i class="fas fa-user-circle text-primary me-2"></i> Profile</a></li>
                    <li><a class="dropdown-item " href="change-pass.php"><i class="fas fa-key text-warning me-2"></i> Change Password</a></li>
                    
                
                <form action="">
                <li><a class="dropdown-item " href=""><i class="fas fa-sign-out-alt text-danger me-2"></i> Logout</a>
                </form>
                </li>
            </ul>


                </li>
            </ul>
        </nav>  
        <script>
    function loadGoogleTranslate(){
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_element');
    }
</script>