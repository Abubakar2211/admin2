<?php
include("session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
    rel="stylesheet"
/>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h5 class="text-primary"><i class="fa fa-user-edit me-2"></i>Feature developer</h5>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpeg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Abubakar baig</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link "><i class="ri-graduation-cap-fill me-2"></i>Student</a>

                    <a href="users.php" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Users</a>
                    
                    <a href="student.php" class="nav-item nav-link active"><i class="ri-shield-user-fill me-2"></i>Registration</a>
                    <a href="form.php" class="nav-item nav-link "><i class="ri-login-circle-line me-2"></i>Sign up</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpeg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Abubakar send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpeg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Abubakar send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpeg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Abubakar send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpeg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Abubakar baig</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <?php


            include("../connection.php");

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                if (isset($_POST['submit'])) {

                    $image = $_FILES['image']['name'];
                    $image_temp = $_FILES['image']['tmp_name'];
                    $image_path = "images/" . $image;
                   
                    move_uploaded_file($image_temp, $image_path);
                    // echo "<img src='$image_path' >";
                    $student_id = $_POST['student_id'];
                    $student_name = $_POST['student_name'];
                    $father_name = $_POST['father_name'];
                    $batch_code = $_POST['batch_code'];
                    $fees = $_POST['fees'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $status = $_POST['status'];



                    // $sql = "INSERT INTO `users` (`image`, `category`, `email`, `password`) VALUES ('$image_path', '$category', '$email', '$password')";
                    $sql =" INSERT INTO `student` ( `student_id`, `student_name`, `father_name`, `batch_code`, `fees`, `phone`, `email`, `password`, `status`, `image`)
                     VALUES ('$student_id', '$student_name', '$father_name', '$batch_code', '$fees', '$phone', '$email', '$password', '$status', '$image_path')";
                    $result = mysqli_query($conn, $sql);

                    if (!$result) {
                        echo "Data failed";
                    }
                }
            }

            ?>


            <!-- Form Start -->

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Student Form</h6>
                            <form action="student.php" method="POST" enctype="multipart/form-data">


                                <div class="mb-3">

                                    <label for="student_id" class="form-label">Student ID</label>
                                    <input type="text" name="student_id" class="form-control" id="student_id" required>
                                </div>
                                <div class="mb-3">

                                    <label for="student_name" class="form-label">Student Name</label>
                                    <input type="text" name="student_name" class="form-control" id="student_name" required>
                                </div>                                
                                <div class="mb-3">

                                    <label for="Father_name" class="form-label">Father Name</label>
                                    <input type="text" name="father_name" class="form-control" id="Father_name" required>
                                </div> 
                                <div class="mb-3">

                                    <label for="batch_code" class="form-label">Batch Code</label>
                                    <input type="text" name="batch_code" class="form-control" id="batch_code" required>
                                </div>                                                               
                                <div class="mb-3">

                                    <label for="fees" class="form-label">Fees</label>
                                    <input type="text" name="fees" class="form-control" id="fees" required>
                                </div>
                                <div class="mb-3">

                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" name="phone" class="form-control" id="phone" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                                </div>
                                <div class="mb-3 ">
                                    <label for="status" class="form-label">Status : </label>
                                    <select name="status" id="status">
                                    <option name="status" value="active">Active</option>
                                </select>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Upload your picture:</label>
                                    <input type="file" id="myFile" name="image" required>
                                </div>


                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                    <!-- Form End -->


                    <!-- Footer Start -->
                    <div class="container-fluid  ">
                        <div class="bg-secondary rounded-top p-4">
                            <div class="row">
                                <div class="col-12 col-sm-6 text-center text-sm-start">
                                    &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                                </div>
                                <div class="col-12 col-sm-6 text-center text-sm-end">
                                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                                    <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer End -->
                </div>
                <!-- Content End -->


                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
            </div>

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/chart/chart.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/tempusdominus/js/moment.min.js"></script>
            <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
            <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
</body>

</html>