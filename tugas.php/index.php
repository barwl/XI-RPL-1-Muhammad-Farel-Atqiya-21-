<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout dengan Sidebar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Container utama yang mengatur layout */
        .container {
            display: flex;
            min-height: 100vh; /* Membuat container penuh tinggi layar */
        }

        /* Sidebar */
        .sidebar {
            width: 250px; /* Lebar sidebar */
            background-color: #333;
            color: white;
            padding: 20px;
            flex-shrink: 0; /* Mencegah sidebar mengecil */
        }

        .sidebar h2 {
            text-align: center;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 5px;
            background-color: #444;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        /* Konten utama */
        .content {
            flex-grow: 1;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .content h1 {
            font-size: 50px;
        }

        /* Responsive untuk layar kecil */
        @media (max-width: 768px) {
            .container {
                flex-direction: column; /* Mengubah sidebar dan konten menjadi satu kolom */
            }

            .sidebar {
                width: 100%; /* Sidebar penuh lebar di layar kecil */
                padding: 10px;
            }

            .content {
                padding: 10px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="sidebar">
        <h2>search</h2>
        <a href="profile.php">Biodata</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </div>
    <div class="content">
        <h1>Halaman Utama</h1>
    </div>
</div>

</body>
</html>
