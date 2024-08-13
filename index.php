<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Produk Skincare</h2>
    <table border="1">
        <tr>
            <th>Nama Produk</th>
            <th>Id Produk</th>
</tr>

<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "select * from kategori");
while($data = mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $data["nama"]?></td>
        <td><?php echo $data["id_kategori"]?></td>
    </tr>
    <?php
}
?>
</table>      
</body>
</html>