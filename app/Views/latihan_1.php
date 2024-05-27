<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title;?></title>
</head>
<body>
    <h1><?=$pesan;?></h1>

    <table border="1">
        <thread>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Nomor HP</th>
            </tr>
        </thread>
        <tbody>
            <?php foreach ($mhsData as $row) : ?>
            <tr>
                <td><?=$row['nim'];?></td>
                <td><?=$row['nama'];?></td>
                <td><?=$row['jk'];?></td>
                <td><?=$row['dob'];?></td>
                <td><?=$row['hp'];?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>