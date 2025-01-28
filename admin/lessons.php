<?php
session_start();

include './admininclude/header.php';
include '../databaseconnect.php';

$msg = ''; // Initialize message variable

if (isset($_POST['checkid'])) {
    $course_id = $_POST['checkid'];

    // Fetch course details based on provided course ID
    $sql = "SELECT * FROM course WHERE course_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $course_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['course_id'] = $row['course_id'];
        $_SESSION['course_name'] = $row['course_name'];
    } else {
        // Handle case where course ID is not found
        $msg = '<div class="alert alert-danger">Course not found.</div>';
    }
}

// Handle delete action
if (isset($_POST['delete'])) {
    $lesson_id = $_POST['id'];
    // Delete lesson from database
    $sql = "DELETE FROM lesson WHERE lesson_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $lesson_id);
    if ($stmt->execute()) {
        $msg = '<div class="alert alert-success">Lesson deleted successfully.</div>';
    } else {
        $msg = '<div class="alert alert-danger">Failed to delete lesson.</div>';
    }
}

?>

<div class="col-sm-9 mt-5 mx-3">
    <form action="" class="mt-3 form-inline d-print-none" method="POST">
        <div class="form-group mr-3">
            <label for="checkid">Enter Course Id:</label>
            <input type="text" class="form-control ml-3" id="checkid" name="checkid">
        </div>
        <button type="submit" class="btn btn-danger">Search</button>
    </form>

    <?php echo $msg; ?>

    <?php if (isset($_SESSION['course_id'])) : ?>
        <div>
            <h3 class="mt-5 bg-dark text-white p-2">
                Course Id: <?php echo $_SESSION['course_id']; ?>
                Course Name: <?php echo $_SESSION['course_name']; ?>
            </h3>
            <a class="btn btn-danger box" href="./addLesson.php">
                <i class="fas fa-plus fa-2x"></i>
            </a>
        </div>

        <?php
        // Fetch lessons for the selected course
        $sql = "SELECT * FROM lesson WHERE course_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $_SESSION['course_id']);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) :
        ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Lesson ID</th>
                        <th scope="col">Lesson Name</th>
                        <th scope="col">Lesson Link</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <th scope="row"><?php echo $row['lesson_id']; ?></th>
                            <td><?php echo $row['lesson_name']; ?></td>
                            <td><?php echo $row['lesson_link']; ?></td>
                            <td>
                                <form action="editlesson.php" method="GET">
                                    <input type="hidden" name="id" value="<?php echo $row["lesson_id"]; ?>">
                                    <button type="submit" class="btn btn-info mr-3" name="edit" value="edit">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </form>
                                <form method="POST" class="d-inline">
                                    <input type="hidden" name="id" value="<?php echo $row["lesson_id"]; ?>">
                                    <button type="submit" class="btn btn-secondary" name="delete" value="delete" onclick="return confirm('Are you sure you want to delete this lesson?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>No lessons found for this course.</p>
        <?php endif; ?>

    <?php endif; ?>
</div>

<?php
include './admininclude/footer.php';
?>
