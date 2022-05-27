<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
    <style>
        table,
        tr td {
            border: solid black 1px;
            padding: 2px;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>



        <tr>
            <td>id</td>
            <td>username</td>
            <td>password</td>
            <td>update</td>
            <td>delete</td>
        </tr>



        <?php

        include 'new_conn.php';

        $sql = "SELECT * FROM test ";

        $result = mysqli_query($conn, $sql);

        while ($res = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $res['id']; ?></td>
                <td><?php echo $res['username']; ?></td>
                <td><?php echo $res['password']; ?></td>
                <td> <button><a href="new_delete.php?id=<?php echo $res['id']; ?>"> Delete </a> </button> </td>
                <td> <button><a href="new_update.php?id=<?php echo $res['id']; ?>"> update </a> </button> </td>
            </tr>
        <?php
        }

        ?>
    </table>
</body>

</html>