<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generic Website</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="icon" href="">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2 class="title">Generic Website Homepage</h2>
            <hr>
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="profile.php">profile</a></li>
                <li><a href="artikel.php">article</a></li>
                <li><a href="CRUD/create.php">Tambah</a></li>
            </ul>
            <hr>
        </div>
        <div class="content cf">
            <div class="ctitle">
                <h2>still broken</h2>
                <p>important lesson learned today, xampp is ass. when it is broken, refresh the cache</p>
            </div>
            <!-- <div class="main">
                <p>Welcome to this website, the homepage will guide you even though there is absolutely nothing in this website. I hope you enjoy this half assed website, or not. Socials are always at the sidebar on all pages, no need to thank me.</p>
                <p>Also, this website if it is ever going to be aired, and you have suggestions to add, please email ibrahimbintangef@gmail.com. Thank you.</p>
            </div> -->
            <div class="main">
                <div class="link">
                    <a href="CRUD/create.php">+ Tambah Siswa</a>
                </div>
                <table class="table">
                    <tr class="table">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Opsi</th>
                    </tr>
                    <?php 
                    include 'CRUD/connection.php';
                    $no = 1;
                    $data = mysqli_query($connect, "SELECT * FROM dbbaru");
                    while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr class="table">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['name']; ?></td>
                        <td><?php echo $d['class']; ?></td>
                        <td><?php echo $d['major']; ?></td>
                        <td>
                            <a href="CRUD/edit.php?id=<?php echo $d['id']?>">Edit</a>
                            <a href="CRUD/delete.php?id=<?php echo $d['id']?>">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="sidebar">
                <h2>This is not my socials</h2>
                <ul>
                    <li><a href="http://www.youtube.com/">youtube</a></li>
                    <li><a href="http://www.instagram.com/">instagram</a></li>
                    <li><a href="http://www.discord.com/">discord</a></li>
                </ul>
            </div>
        </div>
        <div class="footer">
            <div class="copy">Copyright 2023. Copyright holder</div>
        </div>
    </div>
</body>
</html>