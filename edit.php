<?php include 'system/function.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <title>Tambah Data</title>
</head>

<?php

$sql = "SELECT * FROM t_user WHERE md5(id) = '" . GET('id') . "'";
$data = query_get_row($sql);

// print_r($data);

?>

<body>
    <form action="<?= base_url('proses.php?a=edit') ?>" method="post">

        <input type="hidden" name="id" value="<?= md5($data['id']) ?>">

        <table>
            <tr>
                <td>Username</td>
                <td> <input type="text" name="username" placeholder="Input Username" value="<?= $data['username'] ?>" required> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td> <input type="email" name="email" placeholder="Input Email" value="<?= $data['email'] ?>" required> </td>
            </tr>
            <tr>
                <td>Name</td>
                <td> <input type="text" name="name" placeholder="Input Name" value="<?= $data['nama'] ?>" required> </td>
            </tr>
            <tr>
                <td><button type="submit">SIMPAN</button> </td>
            </tr>
        </table>
    </form>
</body>

</html>