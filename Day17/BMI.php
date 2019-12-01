<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

if (isset($_POST["weight"]) && isset($_POST["height"])){
    if ($_POST["weight"] != "" && $_POST["height"] != ""){
        $cannang = $_POST["weight"];
        $chieucao = $_POST["height"];
    }
}

$BMI = $cannang / ($chieucao * $chieucao);

if ($BMI < 18.5 ){
    $phanloai = "Gầy";
    $nguyco = "Thấp";
} else if ( $BMI >= 18.5 && $BMI <= 24.9 ){
    $phanloai = "Bình thường";
    $nguyco =  "Trung bình";
} else if( $BMI >= 25 && $BMI <= 29.9){
    $phanloai = "Hơi béo";
    $nguyco = "Cao";
} else if( $BMI >= 30 && $BMI <= 34.9){
    $phanloai = "Béo phì cấp độ 1";
    $nguyco = "Cao";
} else if( $BMI >= 35 && $BMI <= 39.9){
    $phanloai = "Béo phì cấp độ 2";
    $nguyco = "Rất cao";
} else if( $BMI > 40){
    $phanloai = "Béo phì cấp độ 3";
    $nguyco = "Nguy hiểm";
}
?>

<div class="container">
    <div class="row">


        <form name="bmi" action="" method="post">
            <div class="form-group">
                <label>Cân nặng ( Kg )</label>
                <input type="text" name="weight" class="form-control" placeholder="Cân nặng" id="cannang" />

            </div>
            <div class="form-group">
                <label>Chiều cao ( đơn vị mét )</label>
                <input type="text" name="height" class="form-control" placeholder="Chiều cao" id="chieucao">
            </div>

            <button class="btn btn-primary">tính MBI</button>
        </form>
    </div>

    <div class="row">
        <h2>Kết quả sau tính toán</h2>
    </div>

    <div class="row">
        <p>BMI : <h6> <?php echo $BMI ?> </h6> </p>
        <br>
        <p>Phân loại : <h6> <?php echo $phanloai ?> </h6> </p>
        <br>
        <p>Nguy cơ bênh tật : <h6><?php echo $nguyco ?> </h6></p>
    </div>
</div>



</body>
</html>