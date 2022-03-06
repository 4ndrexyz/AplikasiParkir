<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>PARKIR MOBIL BANG ANDRE</h1>
    <menu>
        <button><a href="form_mobil_masuk.php">Mobil Masuk</a></button>
        <button><a href="list_mobil_parkir.php">Data Mobil</a></button>
    </menu>
    <span>
        <?php if(isset($_GET['status'])): ?>
            <?php 
            
            if($_GET['status'] == 'sukses'){
                echo "Sukses !";
            } else {
                echo "Gagal !";
            }
            
            ?>
        <?php endif ?>
    </span>
    <footer>
        &copy; 4ndrexyz
    </footer>
</body>
</html>