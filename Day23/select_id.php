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
if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["age"]) && isset($_POST["address"]) && isset($_POST["email"]) && isset($_POST["id"])){
    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $sql_update = "DELETE FROM giaovien WHERE id = $id";
    echo $sql_update;
    $test = $conn->query($sql_update);
    if ($test) {
        echo "<br> delete thành công";
    } else {
        echo "<br> delete thất bại";
    }
    echo "<br> kết quả thực hiện câu query";
    var_dump($test);
}



?>
    <div class="container">
        <h1> Quan ly giao vien </h1>
        <form action="" method="post">
            <p>
                <label> Nhap id</label>
                <input name="id" value="" type="text">
            </p>
            <p>
                <input type="submit" name="submit" value="select data">
            </p>
        </form>
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
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>