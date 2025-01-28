<?php
include('./admininclude/header.php');
include('../databaseconnect.php');
?>

<div class="col-sm-9 mt-5">
    <!-- table -->
    <p class="bg-dark text-white p-2">List courses</p>
    <?php
    $sql = "SELECT * FROM course";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Course ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Author</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <th scope="row"><?php echo $row['course_id']; ?></th>
                        <td><?php echo $row['course_name']; ?></td>
                        <td><?php echo $row['course_author']; ?></td>
                        <td>
                            <form action="editcourse.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $row["course_id"]; ?>">
                                <button type="submit" class="btn btn-info mr-3" name="edit" value="edit">
                                    <i class="fas fa-pen"></i>
                                </button>
                            </form>
                            <form method="POST" class="d-inline">
                                <input type="hidden" name="id" value="<?php echo $row["course_id"]; ?>">
                                <button type="submit" class="btn btn-secondary" name="delete" value="delete" onclick="return confirm('Are you sure you want to delete this course?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else {
        echo "0 Result";
    }

    if(isset($_POST['delete'])){
        $id = $_POST['id'];
        // Using prepared statements to prevent SQL injection
        $stmt = $conn->prepare("DELETE FROM course WHERE course_id = ?");
        $stmt->bind_param("i", $id);
        if($stmt->execute()) {
            echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
        } else {
            echo "Unable to delete data!";
        }
        $stmt->close();
    } 

    if(isset($_GET['edit'])){
        $id = $_GET['id'];
        // Redirect to the editcourse.php page with the course ID
        header("Location: editcourse.php?id=$id");
        exit();
    }
    ?>
</div>


<div>
    <a class="btn btn-danger box" href="./addcourse.php">
        <i class="fas fa-plus fa-2x"></i>
    </a>
</div>

<?php
include('./admininclude/footer.php');
?>
