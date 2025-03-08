<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nama       = $_POST['nama'];
    $ttl        = $_POST['ttl'];
    $pendidikan = $_POST['pendidikan'];
    $noHP       = $_POST['noHP'];
    
} else {
    header("Location: form.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <div class="container">

       <div class="avatar">
            <img src="/New folder/gambar3.jpeg" alt="Avatar">
       </div>

       <div class="name">
            <h1><?php echo htmlspecialchars($nama); ?></h1>
            <div class="specialize">Undergraduate Information Systems</div>
            <ul class="contact">
                <li>
                    <span>P</span> <?php echo htmlspecialchars($noHP); ?>
                </li>
                <li>
                    <span>E</span> <?php echo htmlspecialchars($_SESSION['email']); ?>
                </li>
                <li>
                    <span>W</span> iqbalryn.com
                </li>
            </ul>
       </div>

       <div class="info">
            <ul>
 
                <li><?php echo htmlspecialchars($ttl); ?></li>
                <li><?php echo nl2br(htmlspecialchars($pendidikan)); ?></li>
            </ul>
       </div>


       <div class="intro">
            <h2>INTRODUCE MYSELF</h2>

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eligendi omnis quasi dolores modi eius aliquam ipsum soluta, dolore tenetur excepturi praesentium porro alias itaque enim labore qui necessitatibus molestias hic cum deserunt ab! Illum sed eveniet distinctio, alias sunt repudiandae labore a dolorum tenetur? Harum deleniti mollitia odio neque.
       </div>


       
    </div>
</body>
</html>
