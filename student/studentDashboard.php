<?php

// Assuming you have a database connection established
// Fetch student information from the database
// Replace "your_table_name" with the actual name of your student table
$sql = "SELECT * FROM your_table_name WHERE student_id = :student_id"; // Change "student_id" to the actual primary key column name
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':student_id', $student_id); // Replace $student_id with the actual student ID
$stmt->execute();
$student = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .profile {
            margin-bottom: 20px;
        }
        .profile h2 {
            margin-bottom: 10px;
        }
        .profile-info {
            margin-left: 20px;
        }
        .profile-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Student Dashboard</h1>
        
        <div class="profile">
            <h2>Profile Overview</h2>
            <div class="profile-info">
                <p><strong>Email:</strong> <?php echo $student['email']; ?></p>
                <p><strong>Class:</strong> <?php echo $student['class']; ?></p>
                <!-- Add more profile information as needed -->
            </div>
        </div>
    </div>
</body>
</html>
