<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shafici Hospital</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar" class="js-sidebar">
            <div >
                <div class="sidebar-logo">
                    <a href="#">Shafici Hospital</a>
                </div>
                <ul class="sidebar-nav">
                    <!-- Faculty Section -->
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#faculty" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-file-lines pe-2"></i> Doctors
                        </a>
                        <ul id="faculty" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="doctors.php" target="tea" class="sidebar-link">Add Doctor</a>
                            </li>
                             
                        </ul>
                    </li>

                    <!-- Students Section -->
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#students" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-sliders pe-2"></i> Patient
                        </a>
                        <ul id="students" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="patient.php" target="tea" class="sidebar-link">Patient Reg</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="paitentlists.php" target="tea" class="sidebar-link">Patient List</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Bills Section -->
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#bills" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-regular fa-user pe-2"></i> Blood Bank
                        </a>
                        <ul id="bills" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="donors.php" target="tea" class="sidebar-link">Donors</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="reciever.php" target="tea" class="sidebar-link">Recievers</a>
                            </li>
                        </ul>

                       
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="main">
            <!-- Navbar -->
            <nav class="navbar navbar-expand px-3 border-bottom">
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="hos-image.jpeg" class="avatar img-fluid rounded" alt="Profile">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" style="background-color:blue;">
                                <a href="profile.php" target="tea" class="sidebar-link">Profile</a>
                                <a href="login.php" class="sidebar-link">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>


            <!-- Main Content Area (iframe for different pages) -->
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <iframe name="tea" style="width: 100%; height: 80vh; border: none;"></iframe>
                </div>
            </main>




            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-light">
                                    <strong>iamismail</strong>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.js"></script>
    <!-- Custom JS -->
    
</body>

</html>
