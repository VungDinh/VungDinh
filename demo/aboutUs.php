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

<body class="background-about">
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
                                    <img src="layouts/purple.jpg" alt="..." class="rounded-circle img-about image-8x">
                                </div>
                                <h4 class="sub-info">Skin Cleaning</h4>
                                <p class="display-30 mb-0">Good skin care and healthy lifestyle choices can help delay natural aging and prevent various skin problems</p>
                            </div>
                            <div class="text-center text-sm-right">
                                <div class="mb-4"> 
                                <img src="layouts/blue.jpg" alt="..." class="rounded-circle img-about image-8x"></div>
                                <h4 class="sub-info">Protect From the Sun</h4>
                                <p class="display-30 mb-0"> A lifetime of sun exposure can cause wrinkles, age spots and other skin problems — as well as increase the risk of skin cancer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="why-choose-center-image"> 
                            <img src="layouts/white3.jpg" alt="..." class="rounded-circle img-about image-350"></div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="pl-md-3">
                            <div class="text-center text-sm-left mb-2-9">
                                <div class="mb-4"> 
                                <img src="layouts/brand1.jpg" alt="..." class="rounded-circle img-about image-8x"></div>
                                <h4 class="sub-info">Don't smoke</h4>
                                <p class="display-30 mb-0">Smoking makes your skin look older and contributes to wrinkles. Smoking narrows the tiny blood vessels in the outermost layers of skin.</p>
                            </div>
                            <div class="text-center text-sm-left">
                                <div class="mb-4"> 
                                <img src="layouts/green.jpg" alt="..." class="rounded-circle img-about image-8x"></div>
                                <h4 class="sub-info">Treat your skin gently</h4>
                                <p class="display-30 mb-0">Daily cleansing and shaving can take a toll on your skin. To keep it gentle.</p>
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