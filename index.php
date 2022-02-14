   
   
   <?php

   include "lib/header.php";

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

   include "lib/footer.php";


    ?>