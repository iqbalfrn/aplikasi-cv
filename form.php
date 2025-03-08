<?php
session_start();
// Hanya izinkan akses jika sudah login
if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Form CV - Aplikasi CV</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    
    .form-group {
      margin-bottom: 15px; 
    }

    .form-group label {
      display: block;      
      margin-bottom: 5px;  
      font-weight: 700;   
    }

    .form-group input[type="text"],
    .form-group textarea {
      width: 100%;         
      box-sizing: border-box;
      padding: 8px;        
      font-size: 14px;
    }

    .form-group input[type="submit"] {
      margin-top: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Isi Data CV Anda</h2>
    <form action="cv.php" method="post">
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
      </div>
      
      <div class="form-group">
        <label for="ttl">Tempat, Tanggal Lahir:</label>
        <input type="text" name="ttl" id="ttl" required>
      </div>

      <div class="form-group">
        <label for="noHP">NO HP:</label>
        <input type="text" name="noHP" id="noHP" required>
      </div>
      
      <div class="form-group">
        <label for="pendidikan">Riwayat Pendidikan:</label>
        <textarea name="pendidikan" id="pendidikan" rows="5" required></textarea>
      </div>
      
      <div class="form-group">
        <input type="submit" value="Buat CV">
      </div>
    </form>
  </div>
</body>
</html>

