<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">
</head>

<body class="background-home">
    <?php
    require_once("layouts/navbar.php");
    ?>
    <div class="container">
        <div id="snippetContent">
            <div class="container">
                <div class="text-center mb-2-8 mb-lg-6">
                    <h2 class="display-18 display-md-16 display-lg-14 font-weight-700">Why choose <strong class="text-primary font-weight-700">Us</strong></h2> <span>The trusted source for why choose us</span>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-6 col-lg-4 mb-2-9 mb-sm-0">
                        <div class="pr-md-3">
                            <div class="text-center text-sm-right mb-2-9">
                                <div class="mb-4">
                                    <img src="layouts/brand1.jpg" alt="..." class="rounded-circle img-about image-8x">
                                </div>
                                <h4 class="sub-info">Residential Cleaning</h4>
                                <p class="display-30 mb-0">Roin gravida nibh vel velit auctor aliquetenean sollicitudin, lorem qui bibendum auctor.</p>
                            </div>
                            <div class="text-center text-sm-right">
                                <div class="mb-4"> 
                                <img src="layouts/brand1.jpg" alt="..." class="rounded-circle img-about image-8x"></div>
                                <h4 class="sub-info">Commercial Cleaning</h4>
                                <p class="display-30 mb-0">Gravida roin nibh vel velit auctor aliquetenean sollicitudin, lorem qui bibendum auctor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="why-choose-center-image"> 
                            <img src="layouts/brand1.jpg" alt="..." class="rounded-circle img-about image-350"></div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="pl-md-3">
                            <div class="text-center text-sm-left mb-2-9">
                                <div class="mb-4"> 
                                <img src="layouts/brand1.jpg" alt="..." class="rounded-circle img-about image-8x"></div>
                                <h4 class="sub-info">Washing services</h4>
                                <p class="display-30 mb-0">Nibh roin gravida vel velit auctor aliquetenean sollicitudin, lorem qui bibendum auctor.</p>
                            </div>
                            <div class="text-center text-sm-left">
                                <div class="mb-4"> 
                                <img src="layouts/brand1.jpg" alt="..." class="rounded-circle img-about image-8x"></div>
                                <h4 class="sub-info">Carpet cleaning</h4>
                                <p class="display-30 mb-0">Vel proin gravida nibh velit auctor aliquetenean sollicitudin, lorem qui bibendum auctor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

</body>

</html>