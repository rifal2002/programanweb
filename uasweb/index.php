<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $group_id = $_POST['group'];
    $country_id = $_POST['country'];
    $wins = $_POST['wins'];
    $draws = $_POST['draws'];
    $losses = $_POST['losses'];
    $points = ($wins * 3) + ($draws);

    $sql = "INSERT INTO standings (group_id, country_id, wins, draws, losses, points)
            VALUES ('$group_id', '$country_id', '$wins', '$draws', '$losses', '$points')
            ON DUPLICATE KEY UPDATE
            wins='$wins', draws='$draws', losses='$losses', points='$points'";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$groups = $conn->query("SELECT * FROM groups");
$countries = $conn->query("SELECT * FROM countries");
$standings = $conn->query("SELECT g.name AS group_name, c.name AS country_name, s.wins, s.draws, s.losses, s.points 
                           FROM standings s
                           JOIN groups g ON s.group_id = g.id
                           JOIN countries c ON s.country_id = c.id");
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
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Uas Program web 2</h1>
    <p><b><?php echo $_SESSION['nim']; ?></b></p>
    <p><?php echo date('l, d F Y H:i:s'); ?></p> 

    <h2>Input Data</h2>
    <form method="post" action="">
        <label>Group:</label>
        <select name="group">
            <?php while ($group = $groups->fetch_assoc()) { ?>
                <option value="<?php echo $group['id']; ?>"><?php echo $group['name']; ?></option>
            <?php } ?>
        </select>
        <label>Negara:</label>
        <select name="country">
            <?php while ($country = $countries->fetch_assoc()) { ?>
                <option value="<?php echo $country['id']; ?>"><?php echo $country['name']; ?></option>
            <?php } ?>
        </select>
        <label>Menang:</label>
        <input type="number" name="wins" required>
        <label>Seri:</label>
        <input type="number" name="draws" required>
        <label>Kalah:</label>
        <input type="number" name="losses" required>
        <input type="submit" value="Simpan">
    </form>

    <h2>Hasil Standings</h2>
    <table>
        <tr>
            <th>Group</th>
            <th>Negara</th>
            <th>Menang</th>
            <th>Seri</th>
            <th>Kalah</th>
            <th>Poin</th>
        </tr>
        <?php while ($row = $standings->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['group_name']; ?></td>
                <td><?php echo $row['country_name']; ?></td>
                <td><?php echo $row['wins']; ?></td>
                <td><?php echo $row['draws']; ?></td>
                <td><?php echo $row['losses']; ?></td>
                <td><?php echo $row['points']; ?></td>
            </tr>
        <?php } ?>
    </table>

    <button><a href="logout.php" style="color:white; text-decoration:none;">Logout</a></button>
</body>
</html>
