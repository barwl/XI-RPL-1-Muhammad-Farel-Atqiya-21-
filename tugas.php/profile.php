<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile.php</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background-repeat: no-repeat;   
            background-size: cover;         
            background-position: center;    
            background-image: url('old trafford.jpg');
            backdrop-filter: blur(4px);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-container {
            background-color: white;
            padding: 130px;
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: justify;
            max-width: 300px;
        }

        
        .profile-picture {
            border-radius: 50%;
            width: 250px;
            height: 250px;
            object-fit: cover;
            border: 3px solid #ddd;
            margin-bottom: 30px;
        }
        .profile-info h2 {
            margin: 10px 0;
            font-size: 24px;
            color: #333;
        }
        .profile-info p {
            margin: 5px 0;
            color: #777;
        }

    
    
    
    
    </style>
</head>

<body>
<div class="profile-container">
    <?php
    $nama= "Muhammad Farel Atqiya";
    $umur= "16tahun";
    $sekolah= "SMKN2 Bandung";
    $pemainbola= "Cristiano ronaldo";
    $citacita= "menjadi pemilik saham MU";


    echo "<img src='./farel.png' alt='Profile Picture' class='profile-picture'>";
    echo "<div class='profile-info'>";
    echo "<h2>$nama</h2>";
    echo "<p>Umur:$umur</p>";
    echo "<p>Sekolah:$sekolah</p>";
    echo "<p>Pemain bola favorite: $pemainbola</p>";
    echo "<p>Cita-Cita:$citacita</p>"
   
    ?>
</div>
</body>
</html>
