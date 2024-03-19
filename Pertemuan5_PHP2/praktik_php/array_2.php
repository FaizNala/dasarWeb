<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th {
            color: red;
        }
        td {
            text-align: left;
            padding: 8px;
            color: red;
        }

    </style>
</head>
<body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];
    echo "Nama : {$Dosen ['nama']} <br>";
    echo "Domisili : {$Dosen ['domisili']} <br>";
    echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br><br>";
    ?>

    <table border="1" cellpadding = 5>
        <tr>
            <th colspan = '2'>Informasi dosen</th>
        </tr>

        <tr>
            <td>Nama</td>
            <td><?php echo $Dosen['nama']?></td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td><?php echo $Dosen['domisili']?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $Dosen['jenis_kelamin']?></td>
        </tr>
    </table>
    
</body>
</html>