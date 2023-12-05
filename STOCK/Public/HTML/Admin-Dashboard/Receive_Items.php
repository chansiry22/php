<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receive Items</title>
</head>
<body>
<div class="container-fluid">
    <?php 
        include("../Link-Header/Link.php");
        include("../Admin-Dashboard/Admin-Dahboard.php");
    ?>
    <div class="home">
        <form class="row" action="" method="post" enctype="multipart/form-data">
            <div class="col-sm-3">
                <label for="">Item Code</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-sm-3">
                <label for="">Title</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-sm-3">
                <label for="">Qty</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-sm-3">
                <label for="">Price</label>
                <input type="text" name="" id="" class="form-control">
            </div>
        </form>
    </div>
    </div>
</body>
</html>