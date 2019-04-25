<!doctype html>
<html lang="en">

<head>
    <title>Arssacra - Location</title>
    <!-- Specific CSS -->
    <link rel="stylesheet" href="../assets/css/locationexclusive.css">

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

<body class="anti_scrollbar overflow_hidden padding_for_footer">
    <?php include '../includes/navbar.php';?>

    <main class="dark-blue_background">

        <!-- First Slide -->
        <section class="full-screen nonselectable">
            <div class="min-max_height">
                <div id="location_img" class="background_img">
                    <div class="container">
                        <div class="row align-items-center justify-content-md-center min-max_height">
                            <div class="col-md-10 align_horizontally overflow_hidden top-margin-20">
                                <div class="z-index_5">
                                    <h1 class="caveat ribbon white-font">Location</h1>
                                </div>
                                <div class="two-buttons top-margin-30">
                                    <a class="btn btn-primary btn-lg margin-20px" href="#map"> Look at Google Maps </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of First Section -->

        <section id="map" class="white_background nonselectable ">
            <div class="container bottom-padding-10">
                <div class="row">
                    <div class="col-md-7 align_horizontally top-margin-5 ">
                        <div class="max-size overflow_hidden rounded min-half_height">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3459.29368226698!2d17.67691899074838!3d43.190448408282585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134b6d4caa878fe1%3A0xd03b3338530ef8d6!2sArsSacra!5e0!3m2!1sen!2sae!4v1551472729781" class="googlemaps max-size" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- End of Col1 -->
                    <div class="col-md align_horizontally overflow_hidden top-margin-5 padding-20px">
                        <h2 class="caveat">We hope you visit us!</h2>
                        <p class="margin-20px top-bot-padding-10 gray-font">
                            We are relatively easy to find and easy to get to (less than a minute away from the church).
                            In the picture above, the circled building is where we are - or you can use Google Maps to
                            find us! Vidimo se!
                        </p>
                    </div>
                    <!-- End of Col2 -->
                </div>
                <!-- End of Row -->
            </div>
            <!-- End of Container -->
        </section>
    </main>

    <footer class="page-footer dark-blue_background">
        <?php include '../includes/footer.php';?>
    </footer>

    <?php include '../includes/bootstrapscript.php';?>
</body>
</html>
