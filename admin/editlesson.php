<?php
session_start();

include './admininclude/header.php';
include '../databaseconnect.php';

$msg = '';

if (isset($_GET['id'])) {
    $lesson_id = $_GET['id'];

    // Fetch lesson details based on provided lesson ID
    $sql = "SELECT * FROM lesson WHERE lesson_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $lesson_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $lesson_name = $row['lesson_name'];
        $lesson_desc = $row['lesson_desc'];
        // Fetch course details based on course ID from lesson table
        $course_id = $row['course_id'];
        $course_name = $row['course_name'];
        $lesson_link = $row['lesson_link'];
    } else {
        // Handle case where lesson ID is not found
        $msg = '<div class="alert alert-danger">Lesson not found.</div>';
    }
}

if (isset($_POST['updateLessonBtn'])) {
    $lesson_name = $_POST['lesson_name'];
    $lesson_desc = $_POST['lesson_desc'];
    $lesson_link = $_POST['lesson_link'];

    $sql = "UPDATE lesson SET lesson_name = ?, lesson_desc = ?, lesson_link = ? WHERE lesson_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $lesson_name, $lesson_desc, $lesson_link, $lesson_id);

    if ($stmt->execute()) {
        $msg = '<div class="alert alert-success">Lesson updated successfully.</div>';
        // Redirect back to lessons page
        header("Location: lessons.php");
        exit();
    } else {
        $msg = '<div class="alert alert-danger">Failed to update lesson.</div>';
    }
}

?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h2 class="text-center">Edit Lesson</h2>
    <?php echo $msg; ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input type="text" class="form-control" id="lesson_name" name="lesson_name" value="<?php echo $lesson_name; ?>">
        </div>
        <div class="form-group">
            <label for="lesson_desc">Lesson Description</label>
            <textarea class="form-control" id="lesson_desc" name="lesson_desc" rows="2"><?php echo $lesson_desc; ?></textarea>
        </div>
        <div class="form-group">
            <label for="lesson_link">Lesson Link</label>
            <input type="text" class="form-control" id="lesson_link" name="lesson_link" value="<?php echo $lesson_link; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="updateLessonBtn">Update Lesson</button>
    </form>
</div>

<?php
include './admininclude/footer.php';
?>
