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
            <h2 class="title">Generic Create Data Form</h2>
            <hr>
            <ul>
                <li><a href="../index.php">home</a></li>
                <li><a href="../profile.php">profile</a></li>
                <li><a href="../artikel.php">article</a></li>
                <!-- <li><a href="#">Tambah Data</a></li> -->
            </ul>
            <hr>
        </div>
        <div class="content cf">
            <div class="ctitle">
                <div class="main">
                    <a href="javascript:history.back()">Kembali</a>
                    <br>
                    <h3>TAMBAH DATA MAHASISWA</h3>
                    <form method="post" action="create-process.php">
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td><input type="text" name="name"></td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td><input type="text" name="class"></td>
                            </tr>
                            <tr>
                                <td>Jurusan</td>
                                <td><input type="text" name="major"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="SIMPAN"></td>
                            </tr>
                        </table>
                    </form>
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
            <div class="copy">Copyright 2023. Copyright Holder</div>
        </div>
    </div>
</body>
</html>