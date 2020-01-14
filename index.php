<?php include 'system/function.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <title>CRUD</title>
</head>

<body>
    <h1>CRUD</h1>
    <h4><a href="<?= base_url('tambah.php') ?>"><button class="btn btn-md">Tambah Data</button></a></h4>
    <table>
        <thead>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Nama</th>
            <th>Level</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $sql = run_query("SELECT * FROM t_user");
            while ($data = query_get_array($sql)) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['username']; ?></td>
                    <td><?= $data['password']; ?></td>
                    <td><?= $data['email']; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['level']; ?></td>
                    <td>
                        <a href="<?= base_url('edit.php?id=' . md5($data['id'])) ?>"><button class="btn edit">Edit</button></a>
                        <a href="<?= base_url('proses.php?a=hapus&id=' . md5($data['id'])) ?>" onclick="return confirm('Hapus Data ?')"><button class="btn hapus">Hapus</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Nama</th>
            <th>Level</th>
            <th>Aksi</th>
        </tfoot>
    </table>
    <script src="assets/js.js"></script>
</body>

</html>