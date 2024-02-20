<?php //include("crm/include/config.php");?>
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
    <?php 
    // function getLeadLetails(){
    //     global $conn;
    //     $leadkey = $_GET['leadkey'];
    //     $sql = "SELECT * FROM `leads` WHERE `leadkey` LIKE '$leadkey'";
    //     $res = $conn->query($sql);
    //     while($row = $res->fetch_assoc()){
    //         return $row;
    //     }
    // }
    // $leadDetails = getLeadLetails();
    // if($leadDetails['leadsource'] == 'LP 1'){
    //     $basic = '45';
    //     $standard = '145';
    //     $premium = '245';    
    // }else{
    //     $basic = '45';
    //     $standard = '145';
    //     $premium = '245';    
    // }
    
    ?>


    <section class="py-5 steps-section">
        <div class="container">
            <div class="row align-items-center flex-column text-center">
                <h1 class="h1 fw-700 pb-2">Registering Your Trademark in the United States</h1>
                <p>Complete your application in <span class="orange">7 minutes.</span> </p>
            </div>

            <div class="row my-5 justify-content-center">
                <ul class="steps-progress">
                    <li><span class="completed"></span></li>
                    <li><span class="completed"></span></li>
                    <li><span class="completed"></span></li>
                    <li><span class="completed"></span></li>
					<li><span class=""></span></li>
                    <li><span class=""></span></li>
                </ul>

            </div>

            <div class="form_wrap">


                <form action="" method="post" class="step5_validate">

                    <div class="bgform pboxcolor">
                        <div class="row pkg-box">
                            <div class="col-md-12">
                                <h3 class="mb-0">Choose a package 
                                 <span >
                                     Step-5
                                </span>
                                </h3>
                                <p class="mt-md-2">All packages include lifetime customer support</p>
                            </div>
                            
                        </div>
                        <div class="register-pricing">
                            <table class="pricing">
                                <tbody>
                                    <tr>
                                        <td>
                                           
                                        </td>
                                        <td>
                                            <h4 class="form-heading">Basic <br>Package</h4>
                                            <div class="form-price">
                                                <span>For Just</span>
                                                <b>$<?php echo $basic;?></b>
                                            </div>
                                            
                                            
                                            <!--<b>$49</b>/<s>$98</s>-->
                                            <!--<span>$90 </span>-->
                                            <!--<p><s>$90</s></p>-->
                                            <br>
                                            <i> + USPTO Fee $350/Class*</i>
                                            <a href="javascript:;" class="btn-normal data-pkg scroll-dwn-cont"
                                                data-pkg="Basic Package" data-term="1" data-price="<?php echo $basic;?>" va="">Choose
                                                Package </a>
                                        </td>
                                        <td>
                                            <h4 class="form-heading">Standard <br>Package</h4>
                                            <div class="form-price">
                                                <span>For Just</span>
                                                <b>$<?php echo $standard;?></b>
                                            </div>
                                            <br>
                                            <i> + USPTO Fee $350/Class*</i>
                                            <a href="javascript:;" class="btn-normal data-pkg scroll-dwn-cont"
                                                data-pkg="Standard Package" data-term="1" data-price="<?php echo $standard;?>">Choose
                                                Package</a>
                                        </td>
                                        <td>
                                            <h4 class="form-heading">Premium <br>Package</h4>
                                            <div class="form-price">
                                            <span>For Just</span>
                                            <b>$<?php echo $premium;?></b>
                                            </div>
                                            <br>
                                            <i> + USPTO Fee $350/Class*</i>
                                            <a href="javascript:;" class="btn-normal data-pkg scroll-dwn-cont"
                                                data-pkg="Premiun Package" data-price="<?php echo $premium;?>" data-term="0">Choose
                                                Package</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b class="fs-16">
                                                Direct-Hit Search of the Federal USPTO</b> database which will include
                                            misspellings for live and pending applications.

                                        </td>
                                        <td><span class="tp-check-pricing"></span></td>
                                        <td><span class="tp-check-pricing orange"></span></td>
                                        <td><span class="tp-check-pricing blue"></span></td>
                                    </tr>
                                    <tr>
                                        <td><b class="fs-16">Professional Preparation</b> of your federal trademark
                                            application.</td>
                                        <td><span class="tp-check-pricing"></span></td>
                                        <td><span class="tp-check-pricing orange"></span></td>
                                        <td><span class="tp-check-pricing blue"></span></td>
                                    </tr>
                                    <tr>
                                        <td><b class="fs-16">Digitalization and Formatting</b> of your trademark
                                            specimens
                                            and designs.</td>
                                        <td><span class="tp-check-pricing"></span></td>
                                        <td><span class="tp-check-pricing orange"></span></td>
                                        <td><span class="tp-check-pricing blue"></span></td>
                                    </tr>
                                    <tr>
                                        <td><b class="fs-16">Electronic Delivery</b> of your trademark application with
                                            no
                                            need to wait for mail or dealing with paper files. This will qualify you the
                                            reduced government filing fee.</td>
                                        <td><span class="tp-check-pricing"></span></td>
                                        <td><span class="tp-check-pricing orange"></span></td>
                                        <td><span class="tp-check-pricing blue"></span></td>
                                    </tr>
                                    <tr>
                                        <td><b class="fs-16">Secure Online Account</b> with calendar of important dates.
                                            Your status, documents, and important deadlines will be available to you
                                            24/7
                                            through your online account.</td>
                                        <td><span class="tp-check-pricing"></span></td>
                                        <td><span class="tp-check-pricing orange"></span></td>
                                        <td><span class="tp-check-pricing blue"></span></td>
                                    </tr>


                                    <tr>
                                        <td><b class="fs-16">Assessment of Application</b> by a team of Attorneys to
                                            avoid any loopholes that might cause rejection at the government's office.
                                        </td>
                                        <td><i class="fa fa-minus"></i></td>
                                        <td><span class="tp-check-pricing orange"></span></td>
                                        <td><span class="tp-check-pricing blue"></span></td>
                                    </tr>

                                    <tr>
                                        <td><b class="fs-16">Cease and Desist Letter</b>
                                            A customized form that can be used if someone infringing on your mark.



                                        </td>
                                        <td><i class="fa fa-minus"></i></td>
                                        <td><span class="tp-check-pricing orange"></span></td>
                                        <td><span class="tp-check-pricing blue"></span></td>
                                    </tr>
                                    <tr>
                                        <td><b class="fs-16">
                                                Transfer and Assignment Letter</b> If you need to sell or otherwise
                                            convey
                                            your mark, you have access
                                            to your template that you can further customize to your needs.



                                        </td>
                                        <td><i class="fa fa-minus"></i></td>
                                        <td><span class="tp-check-pricing orange"></span></td>
                                        <td><span class="tp-check-pricing blue"></span></td>
                                    </tr>
                                    <tr>
                                        <td><b class="fs-16">6 Months of Trademark Monitoring</b>
                                            service to notify you of possible infringers of your trademark ($88 value).
                                        </td>
                                        <td><i class="fa fa-minus"></i></td>
                                        <td><span class="tp-check-pricing orange"></span></td>
                                        <td><span class="tp-check-pricing blue"></span></td>
                                    </tr>
                                    <tr>
                                        <td><b class="fs-16">1 Year of Trademark Monitoring</b> service to notify you of
                                            possible infringers. The normal price for our monitoring service is $175.
                                            You
                                            receive a full year for free when choosing our Deluxe package.
                                        </td>
                                        <td><i class="fa fa-minus"></i></td>
                                        <td><i class="fa fa-minus"></i></td>
                                        <td><span class="tp-check-pricing blue"></span></td>
                                    </tr>
                                    <tr>
                                        <td><b class="fs-16">24-hour Expedited Processing</b> of the preparation of your
                                            trademark application. Normal processing time is 5 business days in our
                                            Basic
                                            and Standard packages.</td>
                                        <td><i class="fa fa-minus"></i></td>
                                        <td><i class="fa fa-minus"></i></td>
                                        <td><span class="tp-check-pricing blue"></span></td>
                                    </tr>

                                    <tr>
                                        <td><b class="fs-16">100% Money Back Guarantee</b> Our customer service team is
                                            made up of dedicated trademark representatives with one
                                            goal - to meet each client's needs in a friendly, caring, and efficient
                                            manner. If
                                            you do not think we have met this goal, let us know and we will be happy to
                                            make
                                            every effort to resolve the issue(s).</td>
                                        <td><i class="fa fa-minus"></i></td>
                                        <td><i class="fa fa-minus"></i></td>
                                        <td><span class="tp-check-pricing blue"></span></td>
                                    </tr>
                                    <tr>
                                         <td>
                                            
                                        </td>
                                        <td>
                                             <h4 class="form-heading">Basic <br>Package</h4>
                                             <div class="form-price">
                                                <span>For Just</span>
                                            <b>$<?php echo $basic;?></b>
                                            </div>
                                            
                                            <br>
                                            <i> + USPTO Fee $350/Class*</i>
                                            <a href="javascript:;" class="btn-normal data-pkg scroll-dwn-cont"
                                                data-pkg="Basic Package" data-term="1" data-price="<?php echo $basic;?>">Choose Package </a>
                                        </td>
                                       
                                        <td>
                                            <h4 class="form-heading">Standard <br>Package</h4>
                                            <div class="form-price">
                                                <span>For Just</span>
                                            <b>$<?php echo $standard;?></b>
                                            </div>
                                            
                                            <br>
                                            <i> + USPTO Fee $350/Class*</i>
                                            <a href="javascript:;" class="btn-normal data-pkg scroll-dwn-cont"
                                                data-pkg="Standard Package" data-term="1" data-price="<?php echo $standard;?>">Choose
                                                Package</a>
                                        </td>
                                        <td>
                                            <h4 class="form-heading">Premium <br>Package</h4>
                                            <div class="form-price">
                                                <span>For Just</span>
                                                <b>$<?php echo $premium;?></b>
                                            </div>
                                            
                                            <br>
                                            <i> + USPTO Fee $350/Class*</i>
                                            <a href="javascript:;" class="btn-normal data-pkg scroll-dwn-cont"
                                                data-pkg="Premium Package" <!--="" data-price="<?php echo $premium;?>" data-term="0">Choose
                                                Package</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="row pkg-box desktop-only">
                            
                        </div>
                        <div class="d-md-flex justify-content-between align-items-center my-3">
                            <p>
                                <i class="fa fa-lock"></i>
                                Click on "Continue" to save your application.
                            </p>
                            <input type="hidden" name="data_pkg_title" class="data_pkg_title" value="Basic Package">
                            <input type="hidden" name="data_pkg_price" class="data_pkg_price" value="<?php echo $basic;?>">
                            <!--<input type="hidden" name="tm_type_search" value="Basic Federal Direct-Hit Search (Included - Free)">-->
                            <!--<input type="hidden" name="uspto_fee" value="0">-->
                            <input type="hidden" name="hrs_24_amount" class="hrs_24_amount" value="">
                            <input type="hidden" name="data_term" class="data_term" value="0">
                            <button type="submit" class="theme-btn">Continue</button>
                        </div> 
                    </div>
                </form>
            </div>

        </div>
    </section>

    
    <?php include("../includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>
    <script>
        $(document).on('click','.btn-normal.data-pkg',function(){
            var price = $(this).attr('data-price');
            var pkg = $(this).attr('data-pkg');
            console.log(price);
            console.log(pkg);
            $('input[name="data_pkg_title"]').val(pkg);
            $('input[name="data_pkg_price"]').val(price);
            $('form').find('[type="submit"]').trigger('click');
        })
    </script>

</body>



</html>