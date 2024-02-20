<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/compatibility.php"); ?>
    <title><?php echo $brand; ?>  | Protect Your Brand with Trademark Registration </title>
    <meta name="description" content="Getting a trademark can provide legal protection for your brand, business name, or logo. Check out our trademark registration services now. ">
    <link rel="icon" href="favicon.svg" type="image/x-icon">
    <?php include("includes/style.php"); ?>
    
    
</head>

<body class="nav-dark">
    <?php include("../includes/header.php"); ?>

    <section class="py-5 steps-section">
        <div class="container">
            <div class="row align-items-center flex-column">
                <div class="col-md-12 text-center">
                    <h1 class="h1 fw-700 pb-2">Registering Your Trademark in the United States</h1>
                    <p>Complete your application in <span class="orange">7 minutes.</span> </p>
                </div>
                
            </div>

            <div class="row my-5 justify-content-center">
                <ul class="steps-progress">
                    <li><span class="completed"></span></li>
                    <li><span class="completed"></span></li>
                    <li><span class=""></span></li>
                    <li><span class=""></span></li>
					<li><span class=""></span></li>
                    <li><span class=""></span></li>
                </ul>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form_wrap bgform">
                        <div class="w-100">
                            <h3>
                                Trademark Classification
                                <span >
                                     Step-3
                                </span>
                            </h3>
                            
                            <span class="lh-24">Start describing the goods are services related to your mark. <?php echo $brand; ?> compares the description you provide and automatically provides descriptions from the USPTO ID Manual for your consideration.</span>
                            <p>
                                <span class="heading fw-600 mt-3">PLEASE PROVIDE A DESCRIPTION OF YOUR GOODS OR SERVICES ?</span>
                            </p>
                            <form class="" action="" method="post" novalidate="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            
                                            <textarea type="text" class="form-control my-3" id="exampleInputEmail1" rows="20" name="tm_classification"></textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                                                        
                                <div class="form_footer">
                                    <div class="d-md-flex justify-content-between align-items-center my-3">
                                        <p class="">
                                            <i class="fa fa-lock"></i>
                                            Click on "Continue" to save your application.
                                        </p>
                                        <div class="form-btn-inner">
                                            <button type="submit" class="theme-btn">Continue</button>
                                        </div>
                                        
                                    </div>
                                </div> 
                                
                            </form>
                        </div>
                        </div>
                </div>
                    
            </div>
        </div>
    </section>

    <?php //include("includes/registered.php"); ?>
    <?php include("../includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>

</body>



</html>