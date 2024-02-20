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
                    <li><span class="completed"></span></li>
                    <li><span class=""></span></li>
					<li><span class=""></span></li>
                    <li><span class=""></span></li>
                </ul>

            </div>
            <div class="form_wrap">
                    <form action="" method="post" novalidate=""> 
                    <div class="bgform">
                        <!--<h3>Know before you file! Get a Comprehensive Search Report.</h3>-->
                        <!--<p>Before paying the USPTO fees, you should do a quick search to see if your mark is already in-->
                        <!--    use or registered by someone else. A search will help avoid obvious duplications of-->
                        <!--    pre-existing marks. Our Basic Federal Direct-Hit Search is included. If there is a-->
                        <!--    direct-hit search result for an existing or pending application we will let you know before-->
                        <!--    any fees are paid to the USPTO so you can re-evaluate your mark choice or whether you want-->
                        <!--    to move forward with the trademark process. If your company is just beginning, it’s better-->
                        <!--    to make name changes now rather than invest years building a brand only to learn that you-->
                        <!--    have to change the name and lose all of your goodwill.</p>-->

                        <!--<p>For even more assurance, you may want to consider a more detailed search. While the basic-->
                        <!--    free search covers the USPTO, it does not cover the 50 states, common law, domain names,-->
                        <!--    international searches or include a detailed report. With more intel, you can make better-->
                        <!--    choices. If you pick one of these options, you will still complete the application now.-->
                        <!--    However, no application will be filed with the USPTO until you have had a chance to review-->
                        <!--    any of the paid searches, approve the application in light of the searches or easily come-->
                        <!--    back here and make some changes before your application is filed.</p>-->

                        <h3>What type of trademark search would you like us to conduct? Select one.
                            <span >
                                Step-4
                            </span>
                        </h3>
                        <p>The search you choose will be conducted on the words or text within your trademark.</p>

                        <div class="form-check step4check">
                        	
                            <ul class="trademarksearch-option">
                            <li >
                            <input type="radio" name="tm_type_search" checked="" value="Basic Federal Direct-Hit Search (Included - Free)" class="basic_check uspto_data" data-uspto="0" id="basic_check">
                            <label for="basic_check">Basic Federal Direct-Hit Search (Included - Free) <span>Includes a basic search of USPTO database only</span></label>
                            </li>
                            
                            
                            <li>
                            <input type="radio" name="tm_type_search" value="Federal &amp; State Search  Most Popular" class="federal_check uspto_data" data-uspto="149" id="federal_check">
                            <label for="federal_check">Federal &amp; State Search (+$149) <em style="color: rgb(51, 147, 214);margin-left: 3px;font-size:14px;font-weight:700;">Most Popular</em> <span>Provides any similar names, logos, or slogans that are registered or pending with the USPTO or in any of the 50 states</span></label>
                            </li>
                                    
                            
                            <li>
                            <input type="radio" name="tm_type_search" value="Federal, State &amp; Common Law Search Recommended" class="commonlaw_check uspto_data" data-uspto="299" id="commonlaw_check">
                            <label for="commonlaw_check">Federal, State &amp; Common Law Search (+$299) <em style="color: rgb(51, 153, 0);margin-left: 3px;font-size:14px;font-weight:700;">Recommended</em>
                                <span>Same as above, but also includes a proprietary search of corporate directories, common law and domain names</span></label>
                                </li>
                            
                            <li >
                            <input type="radio" name="tm_type_search" value="Global Comprehensive U.S. and International Search" class="global_check uspto_data" data-uspto="429" id="global_check">
                            <label for="global_check">Global Comprehensive U.S. and International Search (+$429) <span>Same as above, but also includes searches for pending and registered marks in these multi-national jurisdictions: (i) The European community; and (ii) the World Intellectual Property Organization (WIPO)</span></label>
                            </li>
                            </ul>
                        </div>


                        <div class="submits-wrapper">
                            <div class="form_footer">
                                <div class="d-md-flex align-items-center justify-content-between ">
                                    <p><i class="fal fa-lock"></i> Click on "Continue" to save your application.</p>
                                    <!--<a href="" class="theme-btn">Continue <i class="far fa-chevron-right"></i> </a>-->
                                    <!--<p class="continue">Click on "<a href="javascript:">Continue</a>" to save your application.</p>-->
                                    <input type="hidden" name="save_form_manually" value="0">
                                    <!--<div class="form-btns"> <a href="javascript:;" onClick="window.history.back();" class="btn-prev btn btn-transparent">Previous</a>-->
                                    <div class="form-btn-inner">
                                        <button type="submit" class="theme-btn">Continue</button>
                                        <!--<a href="javascript:;" class="save_form_manually btn btn-transparent">Save For Later</a> </div>-->
                                  </div>
                                    <input type="hidden" name="send" value="1">
                                    <input type="hidden" name="uspto_fee" class="uspto_fee" value="0">
                                </div>
                                
                            </div>
                    </div>
                    
                </div></form>
                
            </div>
            <p class="m-t-20"><small class="fonts-inter">
                Later in this process, <?php echo $brand; ?>collects and pays the government-discounted TEAS Standard electronic filing fee of $350. In some circumstances, your application may qualify for the less-available
                TEAS PLUS system which means we will pay $250 to the USPTO which streamlines the process. If your application qualifies for TEAS PLUS, we will use it and retain the difference between the TEAS Standard
                filing fee and the TEAS Plus filing fee as a result of the additional processing by the <?php echo $brand; ?>.
            </small></p>
        </div>
    </section>

    
    <?php include("../includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>
    <script>

        $(document).ready(function(){
            $('input[type=radio][name=tm_type_search]').change(function() {
                $(".uspto_fee").val($(this).attr("data-uspto"));
            });
        });
    </script>


</body>



</html>