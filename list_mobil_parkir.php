<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Parkir</title>
</head>
<body>
    <h1>Data Parkir Mobil</h1>
    <table style="text-align: center;" border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Merk Mobil</th>
                <th>No. Polisi</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php

            $sql = "SELECT * FROM tb_mobil_masuk";
            $query = mysqli_query($conn, $sql);
            $nomor = 0;

            while ($mobil = mysqli_fetch_array($query)) {
                $nomor++;
                echo "<tr>";
                echo "<td>" . $nomor . "</td>";
                echo "<td>" . $mobil['merk'] . "</td>";
                echo "<td>" . $mobil['plat'] . "</td>";
                echo "<td>" . date('d F Y') . "</td>";
                echo "<td>" . $mobil['waktu_masuk'] . "</td>";
                echo "<td>";
                echo "<a href = 'edit.php=" . $mobil['id'] . "'>Edit | </a>";
                echo "<a href = 'delete.php=" . $mobil['id'] . "'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            
            ?>
        </tbody>
    </table>
</body>
</html>