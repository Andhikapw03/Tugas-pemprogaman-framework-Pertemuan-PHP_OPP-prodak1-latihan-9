<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BUKU</title>
</head>
<body>

<div class="container">
  <h3>Data Buku</h3>   
    <br>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>JUDUL</th>
            <th>PENGARANG</th>
            <th>PENERBIT</th>
            <th>TAHUN</th>
        </tr>
    <tbody>
    <?php
        $query = mysqli_query($db, "SELECT * FROM book");

        while($book = mysqli_fetch_array($query)){
            ?>

            <tr>
            <td><?php echo $book['no']?></td>
            <td><?php echo $book['judul']?></td>
            <td><?php echo $book['pengarang']?></td>
            <td><?php echo $book['penerbit']?></td>
            <td><?php echo $book['tahun']?></td>

            </tr>
        <?php
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</div>
    </body>
</html>