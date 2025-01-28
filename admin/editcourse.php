<?php
include('./admininclude/header.php');
include('../databaseconnect.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM course WHERE course_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $course = $result->fetch_assoc();
    $stmt->close();
}

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $author = $_POST['author'];
    
    $sql = "UPDATE course SET course_name = ?, course_author = ? WHERE course_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $name, $author, $id);
    
    if($stmt->execute()) {
        echo '<div class="alert alert-success" role="alert">Course updated successfully!</div>';
        $stmt->close();
        header("Location: courses.php");
        exit();
    } else {
        echo '<div class="alert alert-danger" role="alert">Error updating course!</div>';
    }
}
?>

<div class="col-sm-6 mt-5">
    <form method="POST">
        <div class="form-group">
            <label for="name">Course Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $course['course_name']; ?>">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="<?php echo $course['course_author']; ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $course['course_id']; ?>">
        <button type="submit" class="btn btn-primary" name="update">Update</button>
    </form>
</div>

<?php
include('./admininclude/footer.php');
?>
