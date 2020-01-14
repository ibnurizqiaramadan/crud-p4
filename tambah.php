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

<body>
    <div class="form">
        <form action="<?= base_url('proses.php?a=tambah') ?>" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td> <input type="text" name="username" placeholder="Input Username" required> </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td> <input type="text" name="password" placeholder="Input Password" required> </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> <input type="email" name="email" placeholder="Input Email" required> </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td> <input type="text" name="name" placeholder="Input Name" required> </td>
                </tr>
                <tr>
                    <!-- <td><button>Hai</button></td> -->
                    <td><button class="btn" type="submit">SIMPAN</button> </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>