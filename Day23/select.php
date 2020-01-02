<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php
include_once 'connection.php';
$sqlSelect = "SELECT * FROM giaovien";
$stmt = $conn->prepare($sqlSelect);
$stmt->execute();
// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$all = $stmt->fetchAll();
?>
    <div class="container">
        <h1> Quan ly giao vien </h1>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($all as $k=>$v) { ?>

                    <tr>
                        <th scope="row"><?php echo $v["id"] ?></th>
                        <td><?php echo $v["firtName"] ?></td>
                        <td><?php echo $v["lastName"] ?></td>
                        <td><?php echo $v["age"] ?></td>
                        <td><?php echo $v["address"] ?></td>
                        <td><?php echo $v["email"] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $v["id"] ?>" class="btn btn-warning">Sửa</a>
                            <a href="del.php?id=<?php echo $v["id"] ?>" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>