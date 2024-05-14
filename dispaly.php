<?php
// require_once 'db.php'
// require_once 'function.php';
// $result = dipaly_data()





require_once('db.php'); // Assuming this file contains your database connection

// Check if the connection is valid
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$query = "SELECT * FROM registrationform";
$result = mysqli_query($con, $query);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($con));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display</title>
    <style>
    	body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #007bff;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #0056b3;
        }

        .action-column {
            width: 80px;
        }

        .delete-link {
            color: #dc3545;
            transition: color 0.3s ease;
        }

        .delete-link:hover {
            color: #c82333;
        }
        /* Your CSS styles */
    </style>
</head>
<body>
    <h2 align="center"><mark>Displaying All Records</mark></h2>
    <table align="center" width="80%">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>	
            <tr>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td>
                    <a href="delete.php?id=<?php echo urlencode($row['id']); ?>">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>