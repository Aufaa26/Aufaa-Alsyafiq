<?php

$mahasiswa = [
    "001"=> "rehan",
    "002"=> "dika",
    "003"=> "rahman",
    "004"=> "kevin",
    "005"=> "irvan",];

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>array associative</title>
    </head>
    <>
        <?php foreach ($mahasiswa as $nrp => $nama) : ?>
            <li><?php echo "$nrp : $nama"; ?></li>
            <?php endforeach; ?>
    </body>
    </html>