<?php
    if(isset($_POST['btnSave'])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $date = $_POST["tanggalLahir"];
        $prodi = $_POST["prodi"];
        $address = $_POST["alamat"];
        $notelp = $_POST["handphone"];
        $gender = $_POST["gender"];
?>
<h1>Data anda sebagai berikut</h1>
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $name;?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><?php echo $email;?></td>
    </tr><tr>
        <td>Password</td>
        <td>:</td>
        <td><?php echo $password;?></td>
    </tr><tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $date;?></td>
    </tr><tr>
        <td>Program Studi</td>
        <td>:</td>
        <td><?php echo $prodi;?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $address;?></td>
    </tr>
    <tr>
        <td>Handphone</td>
        <td>:</td>
        <td><?php echo $notelp;?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $gender;?></td>
    </tr>
</table>
<?php
}else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sign Up</h1>
    <div class="container">
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="name">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" id="name" name="name"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>:</td>
                    <td><input type="email" id="email" name="email"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>:</td>
                    <td><input type="password" id="password" name="password"></td>
                </tr>
                <tr>
                    <td><label for="date">Tanggal Lahir</label></td>
                    <td>:</td>
                    <td><input type="date" id="date" name="tanggalLahir"></td>
                </tr>
                <tr>
                    <td><label for="prodi">Program Studi</label></td>
                    <td>:</td>
                    <td>
                        <select name="prodi" id="prodi">
                            <option value="manajemen">Manajemen</option>
                            <option value="sistemInformasi">Sistem Informasi</option>
                            <option value="ilmuKomputer">Ilmu Komputer</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="psikologi">Psikologi</option>
                            <option value="ilmuKomunikasi">Ilmu Komunikasi</option>
                            <option value="sastraInggris">Sastra Inggris</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="address">Alamat</label></td>
                    <td>:</td>
                    <td>
                        <textarea name="alamat" id="address" cols="30" rows="5">

                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td><label for="handphone">Handphone</label></td>
                    <td>:</td>
                    <td><input type="tel" id="handphone" name="handphone"></td>
                </tr>
                <tr>
                    <td><label for="gender">Jenis Kelamin</label></td>
                    <td>:</td>
                    <td>
                        <input type="radio" id="gender" name="gender" value="lakilaki">
                        <label for="gender">Laki-Laki</label>
                        <input type="radio" id="gender" name="gender" value="perempuan">
                        <label for="gender">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="btnSave" value="Save">
                        <input type="submit" name="btnCancel" value="Cancel">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
<?php
    }
?>