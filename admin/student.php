<?php
include('./admininclude/header.php');
include('../databaseconnect.php');

// Check if delete button is clicked
if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    $delete_sql = "DELETE FROM student WHERE stu_id = $id";
    if ($conn->query($delete_sql) === TRUE) {
        // Redirect to same page after deletion
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Check if update button is clicked
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $update_sql = "UPDATE student SET stu_name='$name', stu_email='$email' WHERE stu_id = $id";
    if ($conn->query($update_sql) === TRUE) {
        // Redirect to same page after update
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

?>

<div class="col-sm-9 mt-5">
    <!-- table -->
    <p class="bg-dark text-white p-2">List of students</p>
    <?php
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <th scope="row"><?php echo $row['stu_id']; ?></th>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="id" value="<?php echo $row["stu_id"]; ?>">
                                <input type="text" name="name" value="<?php echo $row['stu_name']; ?>">
                        </td>
                        <td>
                                <input type="email" name="email" value="<?php echo $row['stu_email']; ?>">
                        </td>
                        <td>
                                <button type="button" class="btn btn-success edit-btn">Update</button>
                                <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else {
        echo "0 Result";
    } ?>

</div>

<div>
    <a class="btn btn-danger box" href="./addnewstudent.php">
        <i class="fas fa-plus fa-2x"></i>
    </a>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const editButtons = document.querySelectorAll(".edit-btn");
        
        editButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                const row = this.closest("tr");
                const id = row.querySelector("input[name='id']").value;
                const nameInput = row.querySelector("input[name='name']");
                const emailInput = row.querySelector("input[name='email']");
                
                // Enable editing
                nameInput.readOnly = false;
                emailInput.readOnly = false;
                
                // Change button text to save
                button.textContent = 'Save';
                button.classList.remove("btn-success");
                button.classList.add("btn-primary");
                
                // Change button behavior to save changes
                button.removeEventListener("click", arguments.callee);
                button.addEventListener("click", function() {
                    const newName = nameInput.value;
                    const newEmail = emailInput.value;
                    
                    // Send AJAX request to update the database
                    const xhr = new XMLHttpRequest();
                    xhr.open("POST", "<?php echo $_SERVER['PHP_SELF']; ?>", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                // Reload the page after successful update
                                window.location.reload();
                            } else {
                                console.error("Error updating record");
                            }
                        }
                    };
                    xhr.send("update=1&id=" + id + "&name=" + encodeURIComponent(newName) + "&email=" + encodeURIComponent(newEmail));
                });
            });
        });
    });
</script>

<?php
include('./admininclude/footer.php');
?>
