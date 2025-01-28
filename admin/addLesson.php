
<?php
session_start();
include './admininclude/header.php';
include '../databaseconnect.php';




if (isset($_REQUEST['lessonSubmitBtn'])) {
    // Check if form is submitted
    if (($_REQUEST['lesson_name']== "") ||($_REQUEST['lesson_desc']== "") ||
        ($_REQUEST['course_id']== "") || ($_REQUEST['course_name']== "") ||($_FILES['lesson_link']['name']=="")) {
        
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill all fields</div>';
    } else {
        $lesson_name = $_REQUEST['lesson_name'];
        $lesson_desc = $_REQUEST['lesson_desc'];
        $course_id = $_REQUEST['course_id']; // Retrieve course ID from form submission
        $course_name = $_REQUEST['course_name']; // Retrieve course name from form submission
        $lesson_link = $_FILES['lesson_link']['name'];
        $lesson_link_temp = $_FILES['lesson_link']['tmp_name'];
        $link_folder = '../image/lessonvid/' . $lesson_link;

        // Move uploaded file to destination folder
        if (move_uploaded_file($lesson_link_temp, $link_folder)) {
            $sql = "INSERT INTO lesson (lesson_name, lesson_desc, lesson_link , course_id, course_name)
                    VALUES ('$lesson_name', '$lesson_desc', '$link_folder','$course_id', '$course_name')";

            if ($conn->query($sql) === TRUE) {
                $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Lesson Added Successfully</div>';  
            } else {
                $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Add Lesson</div>';
            }
        } else {
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Error uploading file</div>';
        }
    } 
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h2 class="text-center">Add New Lesson</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- Display Course ID and Name -->
        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name ="course_id" value="<?php if(isset($_SESSION['course_id'])){echo $_SESSION['course_id'];} ?>"readonLy>
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name ="course_name" value="<?php if(isset($_SESSION['course_name'])){echo $_SESSION['course_name'];} ?>"readonLy>
        </div>
        
        <!-- Other fields for adding lesson -->
        <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input type="text" class="form-control" id="lesson_name" name="lesson_name">
        </div>
        <div class="form-group">
            <label for="lesson_desc">Lesson Description</label>
            <textarea class="form-control" id="lesson_desc" name="lesson_desc" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="lesson_link">Lesson Link</label>
            <input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" name="lessonSubmitBtn" id="lessonSubmitBtn">Submit</button>
            <a href="lessons.php" class="btn btn-secondary">Close</a>
</div>
     
        <?php if(isset($msg)){echo $msg;} ?>
        </form>
   
    </div>

<?php
include './admininclude/footer.php';
?>