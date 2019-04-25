<!doctype html>
<html lang="en">

<head>
    <title>Arssacra - Home</title>
    <!-- Specific CSS -->
    <link rel="stylesheet" href="assets/css/homeexclusive.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Shop Logo -->
    <link rel="icon" href="assets/images/icon.ico" type="image/x-icon" />
    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body class="anti_scrollbar padding_for_footer">

    <?php include 'includes/navbar.php';?>

    <main class="dark-blue_background">

        <!-- First Section -->
        <section class="full-screen nonselectable">
            <div class="min-max_height">
                <div id="shop_img" class="background_img">
                    <div class="container">
                        <div class="row align-items-center justify-content-md-center min-max_height">
                            <div class="col-md-10 align_horizontally overflow_hidden top-margin-20">
                                <div class="z-index_5">
                                    <h1 class="caveat ribbon white-font">Ars Sacra</h1>
                                </div>
                                <div class="two-buttons top-margin-30">
                                    <a class="btn btn-success btn-lg margin-20px" href="pages/shop.php"> Shop now! </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of First Section -->

        <!-- Second Section -->
            <section class="min-half_height shadow-box white_background top-bot-padding-10">
            <div class="container">
                <div class="row align-items-center justify-content-md-center">
                    <div class="col-md-9">
                        <h2 class="caveat margin-20px">A little bit about us</h2>
                        <p class="margin-20px gray-font">
                        Welcome to our shop!
                        From Chasubles to Vestments, you can find it all in our local shop in Medugorje or here on this online shop. We take pride in the quality of the products and the details in design. 
                        Enjoy browsing through our website and feel free to contact us with any enquires you have. We would love to hear from you! You are also welcome to come visit us in Medjugorje, press the button next to this text to find out where we are and how to get to us, or the button under it to see what you can visit in Medjugorje!
                        </p>
                    </div>
                    <div class="col align_horizontally padding-20px top-padding-10">
                        <a class="btn btn-primary btn-lg margin-20px" href="pages/location.php"> Where we are </a>
                        <a class="margin-20px btn btn-primary btn-lg" href="pages/bucketlist.php"> What to see</a>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-md align_horizontally overflow_hidden top-margin-5 ">
                        <div class="float-left padding-20px">
                            <img id="myPicture1" src="assets/images/shop/chasibles.png" alt="One of our products.">
                        </div>
                        <div class="float-right padding-10px top-padding-20px">
                            <h3 class="caveat">Product name</h3>
                            <p class="gray-font">
                                Short description about this product and an explenation to what it stands for.
                            </p>
                            <button class="btn btn-success margin-20px"> 299.99$</button>
                        </div>
                    </div> 
                    <!-- End of Col1 -->
                    <div class="col-md align_horizontally overflow_hidden top-margin-5 ">
                        <div class="float-left padding-20px">
                            <img id="myPicture2" src="assets/images/shop/chasibles.png" alt="One of our products.">
                        </div>
                        <div class="float-right padding-10px top-padding-20px">
                            <h3 class="caveat">Product name</h3>
                            <p class="gray-font">
                                Short description about this product and an explenation to what it stands for.
                            </p>
                            <button class="btn btn-success margin-20px"> 299.99$</button>
                        </div>
                    </div> 
                    <!-- End of Col2 -->
                    <div class="col-md align_horizontally overflow_hidden top-margin-5 ">
                        <div class="float-left padding-20px">
                            <img id="myPicture3" src="assets/images/shop/chasibles.png" alt="One of our products.">
                        </div>
                        <div class="float-right padding-10px top-padding-20px">
                            <h3 class="caveat">Product name</h3>
                            <p class="gray-font">
                                Short description about this product and an explenation to what it stands for.
                            </p>
                            <button class="btn btn-success margin-20px"> 299.99$</button>
                        </div>
                    </div> 
                    <!-- End of Col3 -->
                </div>
                <!-- End of Row -->
            </div>
            <!-- End of Container -->
        </section>
        <!-- End of Seccond Section -->

    </main>

    <footer class="page-footer dark-blue_background">
        <?php include 'includes/footer.php';?>
    </footer>

    <?php include 'includes/bootstrapscript.php';?>
    <script src="assets/javascript/randomimg.js"></script>

</body>

</html>