<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    <title>Item Master</title>
</head>
<style>
    .ck-editor__editable[role="textbox"] {
    /* editing area */
        min-height: 200px;
    }
    .ck-content .image {
    /* block images */
        max-width: 80%;
        margin: 20px auto;
    }
    #editor{
        float: left;
        display: flex;
    }
</style>
<body class="container-fluid">
    <?php 
        include("../Link-Header/Link.php");
        include("../Admin-Dashboard/Admin-Dahboard.php");
    ?>
    <div class="home">
        <form class="row" action="" method="post" enctype="multipart/form-data">
            <div class="col-sm-3">
                <label for="" class="item_code">Item Code</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-sm-3">
                <label for="" class="title">Title</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-sm-3">
                <label for="" class="qty">Qty</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-sm-3">
                <label for="" class="price">Price</label>
                <input type="text" name="" id="" class="form-control">
            </div>

            <div class="col-sm-3">
                <label for="" class="description">Description</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-sm-3">
                <label for="" class="image">Image</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-sm-3">
                <label for="" class="discount">Discount</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-sm-3">
                <label for="" class="product_type">Type of Product</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="" style="width: 50%; float: left;">
                <textarea  id="editor"></textarea>
            </div>
            <div class="" style="width: 50%;">
                <textarea  id="editor1"></textarea>
            </div>
        </form>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        ClassicEditor
            .create( document.querySelector( '#editor1' ) )
                .catch( error => {
                    console.error( error );
                } );
    </script>
</body>
</html>
