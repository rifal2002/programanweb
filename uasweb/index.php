<?php
session_start();
if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
                button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <h1>Uas Program web 2 <br><br><?php echo $_SESSION['nim']; ?></h1>
    <button><a href="input.php">Input Data</button></a>
    <button><a href="report.php">Laporan</button></a>
    <button><a href="logout.php">Logout</button></a>
</body>
</html>
