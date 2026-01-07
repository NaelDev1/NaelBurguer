<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NaelHanburgueria</title>
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo.png')?>" type="image/png">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css')?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css')?>">
    
</head>
<body>
    <nav class="container-fluid">
    <div class="row align-items-center">
        <div class="col p-3">
            <img src="<?= base_url('assets/images/logo.png')?>" alt="img">
        </div>
        <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
            <div><a class="nav-link ms-5" href="<?= site_url('/')?>">Home</a></div>
            <div><a class="nav-link ms-5" href="<?= site_url('/products')?>">Products</a></div>
            <div><a class="nav-link ms-5" href="<?= site_url('/where_we_are')?>">Where we are</a></div>
         
        </div>
    </div>
    </nav>    
    <h1>Home</h1>    

    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js')?>" ></script>
</body>
</html>