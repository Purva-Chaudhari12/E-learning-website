<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--Font Awesome css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--Google font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <!--Custom css-->
    <link rel="stylesheet" href="../css/adminstyle.css">

</head>
<body>
<!--Top Navbar-->
<nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color:#225470;">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php">E learning<small class="text-white">Admin Area</small></a>
    </nav>
    <!--Side bar-->
    <div class="content-fluid mb-5" style="margin-top:40px;">
        <div class="row">
            <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="adminDashboard.php">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="courses.php">
                                <i class="fab fa-accessible-icon"></i> Courses
                            </a>
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link" href="lessons.php">
                                <i class="fab fa-accessible-icon"></i> Lessons
                            </a>
                        </li>    
                        <li class="nav-item">
                            <a class="nav-link" href="student.php">
                                <i class="fab fa-users"></i> Students
                            </a>
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fab fa-table"></i> Sell Report
                            </a>
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link" href="feedback.php">
                                <i class="fab fa-accessible-icon"></i> Feedback
                            </a>
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fab fa-key"></i> Change Password
                            </a>
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link" href="../logout.php">
                                <i class="fab fa-sign-out-alt"></i> Logout
                            </a>
                        </li>  
                    </ul>
                </div>
            </nav>
</body>
</html>