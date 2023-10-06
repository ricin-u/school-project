<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generic Website</title>
    <link rel="stylesheet" href="../stylesheet.css">
    <link rel="icon" href="">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2 class="title">Generic Edit Data Form</h2>
            <hr>
            <ul>
                <li><a href="../index.php">home</a></li>
                <li><a href="profile.php">profile</a></li>
                <li><a href="artikel.php">article</a></li>
                <!-- <li><a href="#">Tambah Data</a></li> -->
            </ul>
            <hr>
        </div>
        <div class="content cf">
            <div class="ctitle">
                <div class="main">
                    <a href="javascript:history.back()">Kembali</a>
                    <br>
                    <h3>UBAH DATA MAHASISWA</h3>
                    <?php 
                    include 'connection.php';
                    $id = $_GET['id'];
                    $data = mysqli_query($connect, "SELECT * FROM dbbaru where id='$id'");
                    while ($d = mysqli_fetch_array($data)){
                    ?>
                    <form method="post" action="edit-process.php">
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td>
                                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                    <input type="text" name="name" value="<?php echo $d['name']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td><input type="text" name="class" value="<?php echo $d['class']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Jurusan</td>
                                <td><input type="text" name="major" value="<?php echo $d['major']; ?>"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="SIMPAN"></td>
                            </tr>
                        </table>
                    </form>
                    <?php } ?>
                </div>
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
            <div class="copy">Copyright 2023. Ibrahim Bintang</div>
        </div>
    </div>
</body>
</html>