<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
    table {
        border-collapse: collapse;
    }
    th, td {
        border: 2px solid black;
        width: 40px;
        height: 40px;
        text-align: center;
        font-weight: bold;
    }
    th {
        background-color: lime; /* Header atas */
    }
    td.header {
        background-color: lime; /* Header samping */
    }
    td.genap {
        background-color: cyan; /* Angka genap */
    }
    td.ganjil {
        background-color: yellow; /* Angka ganjil */
    }
    </style>
</head>
<body>

<h3>Nomor 1: Menampilkan angka genap dari 1 sampai 10</h3>
<p>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
    ?>
</p>

<h3>Nomor 2: Tabel Perkalian</h3>
<table>
    <tr>
        <th>bilangan</th>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <th class="header"><?= $i ?></th>
        <?php endfor; ?>
    </tr>

    <?php for ($i = 1; $i <= 10; $i++): ?>
        <tr>
            <td class="header"><?= $i ?></td>
            <?php for ($j = 1; $j <= 10; $j++): ?>
                <?php 
                    $hasil = $i * $j;
                    $kelas = ($hasil % 2 == 0) ? 'genap' : 'ganjil';
                ?>
                <td class="<?= $kelas ?>"><?= $hasil ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>
