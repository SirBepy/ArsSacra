<!doctype html>
<html lang="en">

<head>
    <title>Arssacra - Shop</title>
    <!-- Specific CSS -->
    <link rel="stylesheet" href="../assets/css/shopexclusive.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <!-- Shop Logo -->
    <link rel="icon" href="../assets/images/icon.ico" type="image/x-icon" />
    <!-- My CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>

<body class="anti_scrollbar overflow_hidden">

    <?php include '../includes/navbar.php';?>

    <div class="slideshow-container position-relative margin-auto anti_scrollbar z-index_5">
        <div class="position-fixed nonselectable" id="go-back" onclick="showSlide(1)">
            <i class="fas fa-caret-left"></i> </div>

        <!--This is the first thing that will show, it is the page where we chose which category of products the user wants to access-->
        <div class="slide fade-in ">
            <section class="min-half_height top-margin-5 " >
                <h2 class="caveat margin-20px">Welcome to the shop</h2>
                <p class="gray-font margin-20px">
                    Inspired by the specific times we are living in, we design our own liturgical wear. Continue by choosing one of the boxes below.
                </p>
                <div class="container">
                    <div class="row align-items-center justify-content-md-center min-half_height">
                        <div class="col-md-5 align_horizontally" onclick="showSlide(2)">
                            <div class="box img-thumbnail pointer">
                                <img class="max-size rounded" src="../assets/images/shop/chasibles.png" alt="Image of three of our chasubles. Each one different.">
                            </div>
                            <h3 class="caveat">Chasubles</h3>
                        </div>
                        <div class="col-md-5 align_horizontally" onclick="showSlide(3)">
                            <div class="box img-thumbnail pointer">
                                <img class="max-size rounded" src="../assets/images/shop/stoles.png" alt="Image of three of our stole. Each one different.">
                            </div>
                            <h3 class="caveat">Stoles</h3>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- End of opening slide -->

        <div class="slide fade-in">
        <section class="min-half_height top-margin-5">
            <h2 class="caveat margin-20px">Chasubles</h2>
            <div class="container">
                    <div class="row">
                        <div class="col-md align_horizontally overflow_hidden top-margin-5 ">
                            <div class="float-left padding-20px">
                                <img class="max-size" src="../assets/images/shop/products/product10.png" alt="One of our many stoles on sale. Once we have more stoles, I will describe each and every one of them.">
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
                                <img class="max-size" src="../assets/images/shop/products/product12.png" alt="One of our many stoles on sale. Once we have more stoles, I will describe each and every one of them.">
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
                                <img class="max-size" src="../assets/images/shop/products/product11.png" alt="One of our many stoles on sale. Once we have more stoles, I will describe each and every one of them.">
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
                    <div class="row">
                        <div class="col-md align_horizontally overflow_hidden top-margin-5 ">
                            <div class="float-left padding-20px">
                                <img class="max-size" src="../assets/images/shop/products/product12.png" alt="One of our many stoles on sale. Once we have more stoles, I will describe each and every one of them.">
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
                                <img class="max-size" src="../assets/images/shop/products/product11.png" alt="One of our many stoles on sale. Once we have more stoles, I will describe each and every one of them.">
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
                                <img class="max-size" src="../assets/images/shop/products/product10.png" alt="One of our many stoles on sale. Once we have more stoles, I will describe each and every one of them.">
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
                    <!-- End of Row2 -->
                </div>
                <!-- End of container -->
            </section>
        </div>
        <!-- End of Chasubles section -->

        <!-- Stoles slide -->
        <div class="slide fade-in">
            <section class="min-half_height top-margin-5">
                <h2 class="caveat margin-20px">Stoles</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md align_horizontally overflow_hidden top-margin-5 ">
                            <div class="float-left padding-20px">
                                <img class="max-size" src="../assets/images/shop/products/product1.png" alt="One of our many stoles on sale. Once we have more stoles, I will describe each and every one of them.">
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
                                <img class="max-size" src="../assets/images/shop/products/product2.png" alt="One of our many stoles on sale. Once we have more stoles, I will describe each and every one of them.">
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
                                <img class="max-size" src="../assets/images/shop/products/product3.png" alt="One of our many stoles on sale. Once we have more stoles, I will describe each and every one of them.">
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
                    <div class="row">
                        <div class="col-md align_horizontally overflow_hidden top-margin-5 ">
                            <div class="float-left padding-20px">
                                <img class="max-size" src="../assets/images/shop/products/product2.png" alt="One of our many stoles on sale. Once we have more stoles, I will describe each and every one of them.">
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
                                <img class="max-size" src="../assets/images/shop/products/product3.png" alt="One of our many stoles on sale. Once we have more stoles, I will describe each and every one of them.">
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
                                <img class="max-size" src="../assets/images/shop/products/product1.png" alt="One of our many stoles on sale. Once we have more stoles, I will describe each and every one of them.">
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
                    <!-- End of Row2 -->
                </div>
                <!-- End of container -->
            </section>
        </div>
        <!-- End of Stoles slide -->

    </div>
    <!--Closing the slideshow-container-->

    <?php include '../includes/bootstrapscript.php';?>
    <script src="../assets/javascript/changeSlide.js"></script>

</body>
</html>
