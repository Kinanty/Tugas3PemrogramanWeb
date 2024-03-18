<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Form Penyewaan</p>
    <div class="container">
        <form action="penyewaanpost.php" method="post">
            <table>
                <tr>
                    <td><label for="title">Judul Buku</label></td>
                    <td>:</td>
                    <td><input type="text" id="title" name="title"></td>
                </tr>
                <tr>
                    <td><label for="kategori">Kategori Buku</label></td>
                    <td>:</td>
                    <td><input type="text" id="kategori" name="kategori"></td>
                </tr>
                <tr>
                    <td><label for="date">Tanggal Pinjam</label></td>
                    <td>:</td>
                    <td>
                        <select name="tanggal" id="date">
                        <?php
                            for($i = 1; $i <= 31; $i++){
                                echo '<option value="$i">' .$i. '</option>';
                            }
                        ?>
                        </select>
                        <select name="bulan" id="date">
                            <?php
                                $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                foreach($bulan as $month){
                                    echo '<option value="$month">' .$month. '</option><br>';
                                }
                            ?>
                        </select>
                        <select name="tahun" id="date">
                            <?php
                                for($i = 2019; $i <= 2024; $i++){
                                    echo '<option value="$i">' .$i. '</option>';
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="lama_pinjam">Lama Pinjam</label></td>
                    <td>:</td>
                    <td>
                        <input type="number" id="lama_pinjam" name="lama_pinjam">
                        <label for="lama_pinjam">hari</label>
                    </td>
                </tr>
                <tr>
                    <td><label for="anggota">Nama Anggota</label></td>
                    <td>:</td>
                    <td><input type="text" id="anggota" name="anggota"></td>
                </tr>
                <tr>
                    <td><label for="petugas">Nama Petugas</label></td>
                    <td>:</td>
                    <td>
                        <select name="petugas" id="petugas">
                            <option value="Nicholas Saputra">Nicholas Saputra</option>
                            <option value="Elon Musk">Elon Musk</option>
                            <option value="Wiji Thukul">Wiji Thukul</option>
                            <option value="Tan Malaka">Tan Malaka</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="btnSave" value="Simpan">
                        <input type="submit" name="btnCancel" value="Batal">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>