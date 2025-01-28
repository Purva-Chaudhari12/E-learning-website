<?php
include('./admininclude/header.php');
include('../databaseconnect.php');

if (isset($_REQUEST['studentSubmitBtn'])) {
    // Check if form is submitted
    if (empty($_REQUEST['stu_name']) || empty($_REQUEST['stu_email']) ||
        empty($_REQUEST['stu_pass']) || empty($_REQUEST['stu_occ']))  {
        
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill all fields</div>';
    } else {
        
        $stu_name = $_REQUEST['stu_name'];
        $stu_email = $_REQUEST['stu_email'];
        $stu_pass = $_REQUEST['stu_pass'];
        $stu_occ = $_REQUEST['stu_occ'];
        

        $sql = "INSERT INTO student (stu_name, stu_email, stu_pass, stu_occ)
                VALUES ('$stu_name', '$stu_email', '$stu_pass', '$stu_occ')";

        if ($conn->query($sql) === TRUE) {
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">student Added Successfully</div>';  
        } else {
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Add student</div>';
        }
    } 
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h2 class="text-center">Add New Student</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="stu_name">Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name" >
        </div>
        <div class="form-group">
            <label for="stu_email">Email</label>
            <input type="email" class="form-control" id="stu_email" name="stu_email" >
        </div>
        <div class="form-group">
            <label for="stu_pass">Password</label>
            <input type="password" class="form-control" id="stu_pass" name="stu_pass" >
        </div>
        <div class="form-group">
            <label for="stu_occ">Occupation</label>
            <input type="text" class="form-control" id="stu_occ" name="stu_occ" >
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" name="studentSubmitBtn" id="studentSubmitBtn">Submit</button>
            <a href="students.php" class="btn btn-secondary">Close</a>
        </div>
    </form>
    <?php if(isset($msg)){ echo $msg; }?>
</div>


<?php
include('./admininclude/footer.php');
?>
