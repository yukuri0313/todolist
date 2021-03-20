<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<div class="container" style="margin-top: 30px;">
    <div class="row"> 
        <div class="col-md-3">
            <p class="fs-1" style="font-family: 'Courier New', Courier, monospace; text-align: center;">Anniversity</p>
        </div>
        <div class="col-md-3 header-nav">
            <p style="text-align: center;"><a href="#survice"><i class="material-icons">accessibility</i>Survice</a></p>
        </div>
        <div class="col-md-3 header-nav">
            <p style="text-align: center;"><a href="#aboutus"><i class="material-icons">zoom_in</i>About Us</a></p>
        </div>
        <div class="col-md-3 header-nav">
            <p style="text-align: center;"><a href="#contactus"><i class="material-icons">contact_page</i>Contact Us</a></p>
        </div>
    </div>
</div>
<div class="row" style="margin-top: 40px;">
    <div class="col-md-4" style="display: flex; justify-content: center; align-items: center;">
        <p class="fw-lighter" style="font-family: 'Courier New', Courier, monospace; text-align: center;">The Virtual Campus is out there.</p>
    </div>
    <div class="col-md-8">
        <img src="img/img01.jpg" alt="">
    </div>
</div>
<div class="container" style="width: 60%; margin-top:100px;" >
    <h2 id="survice" class="fs-4" style="font-family: 'Courier New', Courier, monospace; text-align: center;">Survice</h2>
</div>
<div class="container" style="width: 60%">
    <h2  id="aboutus" class="fs-4" style="font-family: 'Courier New', Courier, monospace; text-align: center;">About Us</h2>
</div>
<div class="container" style="width: 60%">
    <h2 id="contactus" class="fs-4" style="font-family: 'Courier New', Courier, monospace; text-align: center;">Contact Us</h2>
</div>
</body>
</html>
