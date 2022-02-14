<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Wikrama Bogor</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="assets/logowikrama.png" type="image/x-icon">
</head>
<body>

    <nav>
            <div class="foto-mobile-doang">
                <img src="assets/logowikrama.png" alt="">
            </div>
        <ol>
                <li class="navbar-logo"><div class="foto1"><img src="assets/logowikrama.png" alt=""></div></li>
            <div class="navlist">
                <li class="navbar-list"><a href="index.php?page=home">Beranda</a></li>
                <li class="navbar-list"><a href="index.php?page=sejarah">Sejarah</a></li>
                <li class="navbar-list"><a href="index.php?page=martikulasi">Martikulasi</a></li>
                <li class="navbar-list"><a href="index.php?page=perpustakaan">Perpustakaan</a></li>
                <li class="navbar-list"><a href="index.php?page=kantin">Kantin</a></li>
            </div>
        </ol>
    </nav>
    <?php

    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                include 'page/home.php';
                break;
            case 'sejarah':
                include 'page/sejarah.php';
                break;
            case 'martikulasi':
                include 'page/martikulasi.php';
                break;
            case 'perpustakaan':
                include 'page/perpustakaan.php';
                break;
            case 'kantin':
                include 'page/kantin.php';
                break;
            default:
                include 'page/home.php';
                break;
        }
    }else{
        include 'page/home.php';
    }

    ?>
</body>
</html>
