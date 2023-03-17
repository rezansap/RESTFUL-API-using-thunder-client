<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RESTFUL API - DATA KAMPUS</title>
 
    <!-- Bootstrap CSS -->
 
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
 
    <!-- Area Konten -->
 
    <?php
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
        switch ($page) {
 
            default:
                echo "Maaf, halaman tidak ditemukan !";
                break;
 
        }
    } else {
        include "ReadLinkJSON.php";
    }
 
    ?>
 
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>