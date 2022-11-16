<DOCTYPE html>
<html>
<head>
    <title>Membuat Login</title>
</head>
<body>
    <h2>Latihan Login XII RPL SMKN 1 SAYUNG</h2>
    <br/>
    <!-- cek pesan notifikasi-->
    <?php
    if(isset($_GET['pesan'])){
        if($GET_['pesan'] == "gagal"){
            echo "Login gagal username dan password salah!";
        }else if($_GET["pesan"] == "logout"){
            echo "Anda telah berhail logout";
        }else if($_GET["pesan"] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
    <br/>
    <br/>
    <form method="POST" action="cek_login.php">
        <table>
            <tr>
                <td>username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukan username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td>
                <input type="password" name=password placeholder="Masukan password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value ="LOGIN"></td>
            </tr>
        </tabele>
    </form>
</body>
</html>


                

