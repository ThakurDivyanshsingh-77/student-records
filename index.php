<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        h2 { text-align: center; }
        table { border-collapse: collapse; width: 80%; margin: auto; background: #fff; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }
        form { width: 50%; margin: auto; background: #fff; padding: 15px; border-radius: 8px; }
        input, button { padding: 8px; margin: 5px; width: 95%; }
        button { background: #28a745; color: white; border: none; }
        button:hover { background: #218838; }
    </style>
</head>
<body>

<h2>Student Records</h2>
<table>
    <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>Age</th>
        <th>City</th>
        <th>Mobile</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM students");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['rollno']}</td>
            <td>{$row['name']}</td>
            <td>{$row['age']}</td>
            <td>{$row['city']}</td>
            <td>{$row['mobno']}</td>
        </tr>";
    }
    ?>
</table>

<h2>Update Student Record</h2>
<form action="update.php" method="POST">
    Roll No: <input type="number" name="rollno" required><br>
    Name: <input type="text" name="name" required><br>
    Age: <input type="number" name="age" required><br>
    City: <input type="text" name="city" required><br>
    Mobile No: <input type="text" name="mobno" required><br>
    <button type="submit">Update</button>
</form>

</body>
</html>
