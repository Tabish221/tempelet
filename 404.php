<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/compatibility.php"); ?>
    <title><?php echo $brand;?> | Home</title>
    <meta name="description" content="Don’t let your brand be left behind in the competitive market. Get your
trademark registered today with <?php echo $brand;?>">
    <?php include("includes/style.php"); ?>
</head>

<body class="inner-header">
    <?php include("includes/header.php"); ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="">
                        <h2 class="error-text">404</h2>
                        <p class="error-heading">Page Not Found</p>
                    </div>
                    <div class="btn-wrap justify-content-center mt-4">
                        <a href="index.php" class="theme-btn ">Back to Home page</a>
                    </div>
                    <div class="error-image">
                        <img src="assets/images/error.webp" alt="error">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include("includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>




</body>



</html>