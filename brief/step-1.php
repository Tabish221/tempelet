<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/compatibility.php"); ?>
    <title><?php echo $brand; ?>  | Protect Your Brand with Trademark Registration </title>
    <meta name="description" content="Getting a trademark can provide legal protection for your brand, business name, or logo. Check out our trademark registration services now. ">

    <link rel="icon" href="favicon.svg" type="image/x-icon">
    <?php include("includes/style.php"); ?>
    
    <base href="../">
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10948369265"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-10948369265'); </script> 
    <!-- Event snippet for BR Lead conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-10948369265/wlEbCKjNh4gYEPG2y-Qo'}); </script> 
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
                    <li><span class=""></span></li>
                    <li><span class=""></span></li>
                    <li><span class=""></span></li>
                    <li><span class=""></span></li>
					<li><span class=""></span></li>
                    <li><span class=""></span></li>
                </ul>

            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="form_wrap">
                    
                    
                     <?php 
                    //if($_GET['leadkey']){
                    //    $leadkey = $_GET['leadkey'];
                  //  }else{
                  //      $leadkey = rand(0000,9999).time().rand(00000,99999);    
                   // }
                  //  ?> 
                    	<form action="" method="post" class="step1_valdate" enctype="multipart/form-data" novalidate="">
                        <div class="bgform">
                            <!--<div class="form-check form-check-type input_group">-->
                            <!--    <input type="radio" name="radio1" value="tdname" class="tdname_check" checked="" id="individual">-->
                            <!--    <label for="individual">Individual</label>-->
                                
                            <!--    <input type="radio" name="radio1" value="tdlogo" class="tdlogo_check" id="organization">-->
                            <!--    <label for="organization">Organization</label>-->
                            <!--</div>-->
                        <div>
                                
                            <h3>Select what you are trying to protect?
                                <span>
                                     Step-1
                                </span>
                            </h3>
                            <div class="form-check form-check-type input_group">
                                <input type="radio" name="radio1" value="tdname" class="tdname_check" checked="" id="namecheck">
                                <label for="namecheck">Name</label>
                                
                                <input type="radio" name="radio1" value="tdslogan" class="tdslogan_check" id="slogancheck">
                                <label for="slogancheck">Slogan</label>
                                
                                <input type="radio" name="radio1" value="tdlogo" class="tdlogo_check" id="logocheck">
                                <label for="logocheck">Logo</label>
                            </div>
                            
                            
                            <div class="row">
                            	<div class="col-lg-12">
                                	<div class="form-group tdname_fld" style="">
                                        <label>Enter the name you wish to protect</label>
                                        <input type="text" class="form-control" name="tm_name" required="">
                                    </div>
                                    
                                    <div class="form-group tdslogan_fld" style="display: none;">
                                        <label>Enter the slogan you wish to protect</label>
                                        <input type="text" class="form-control" name="tm_slogan" required="">
                                    </div>
                                    
                                    <div class="form-group tdlogo_fld" style="display: none;">
                                        <label>Please note, you will be asked to upload your logo </label>
                                        <input type="file" name="tm_project_logo_file">
                                        <br>
                                        <label>Please provide a complete and accurate description of your logo, including any words
                                            that may appear in the logo. An example of a description is: ‘a red cat wrapped around a
                                            blue outline of a globe’. Leave out the colors if you want to protect your logo in all
                                            colors</label>
                                        <input type="text" class="form-control" name="tm_logo" required="">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="form-group variety_field_label has_para input_group form_group" style="display: none;">
                                        <p>Do you want to be able to protect your logo in a variety of colors?</p>
                                        <input type="radio" name="radio3" value="v_color_yes" class="v_color_yes" checked="" id="vcoloryes">
                                        <label for="vcoloryes">Yes</label>
                                        
                                        <input type="radio" name="radio3" value="v_color_no" class="v_color_no" id="vcolorno">
                                        <label for="vcolorno">No</label>
                                    </div>
            
                                    <div class="form-group variety_field" style="display:none;">
                                        <label>Please provide a list of the colors that appear in your logo.</label>
                                        <input type="text" class="form-control" name="tm_color_apear_logo" required="">
                                    </div>
            
                                    <div class="form-group logo_name" style="display: none;">
                                        <label>Enter any word(s), letter(s), and/or number(s) that appear in your logo.</label>
                                        <input type="text" class="form-control" name="tm_word_apear_logo" required="">
                                    </div>
            
            
            
                                    <div class="form-group mark_fld has_para input_group form_group">
                                        <p>Does your mark include a living person’s name—even if a stage name or pseudonym or
                                            could it be perceived to include a person’s name?
                                            <span class="form-tooltip">
                                                <span>?</span> Get Help
                                                </span></p><div class="form-tooltip-body">
                                                    <p>This comes up a lot for artists and musicians. If the band name is something
                                                        like the Dave Matthews Band or the Everly Brothers, then your answer would
                                                        be <span>YES</span>
                                                        . If your band name is 21 Pilots or the Beatles, then your answer would be
                                                        <span>NO</span></p>
                                                </div>
                                            
                                        <p></p>
                                    	
                                        <input type="radio" name="tm_mark_include_persone_name" value="yes" class="markyes" id="markyes">
                                        <label for="markyes">Yes</label>
                                        
                                        <input type="radio" name="tm_mark_include_persone_name" value="no" class="markno" checked="" id="markno">
                                        <label for="markno">No</label>
                                    </div>
                                    
                                    <div class="form-group markchecked_fld2 has_para input_group form_group" style="display:none;">
                                        <p>Does your mark include the name (including a pseudonym, nickname or stage name) of a
                                            living person other than yourself?</p>
                                    	
                                        <input type="radio" name="tm_mark_include_persone_name_yourself" value="yes" class="markyes3" checked="" id="markyes3">
                                        <label for="markyes3">Yes</label>
                                        
                                        <input type="radio" name="tm_mark_include_persone_name_yourself" value="no" class="markno3" checked="" id="markno3">
                                        <label for="markno3">No</label>
                                    </div>
                                </div>
                            </div>
                            
                            
    
                            <div class="form-group markchecked_fld2_name_mark" style="display:none;">
                                <label>What is the name of the living person in your mark?</label>
                                <input type="text" class="form-control" name="tm_name_apear_mark" required="">
                                <p class="phide">Please note that you will need the living person’s written consent to the
                                    use and registration of the name before we can file it.</p>
                            </div>
                            <div class="form-group name_mark input_group form_group " style="display:none;">
                                <div><strong>Does your mark include a name (including a pseudonym, nickname or stage name) that is
                                    yours?</strong></div>
                            	
                                <input type="radio" name="tm_mark_include_name" value="yes" class="markyes2" id="markyes2">
                                <label for="markyes2">Yes</label>
                                
                                <input type="radio" name="tm_mark_include_name" value="no" class="markno2" checked="" id="markno2">
                                <label for="markno2">No</label>
                            </div>
                            <div class="form-group markchecked_fld" style="display:none;">
                                <label>Please type your name as it appears in the mark:</label>
                                <input type="text" class="form-control" name="tm_name_apear_mark" required="">
                            </div>
    
                        </div>
                        
                        
                        <div class="bgform">
                            <div class="form-group markchecked_fld3 input_group form_group">
                                <div><strong>Does your mark include any words other than English or non-Latin characters?</strong></div>
                            	
                                <input type="radio" name="tm_mark_inc_eng_word" value="yes" class="markyes4" id="markyes4">
                                <label for="markyes4">Yes</label>
                                
                                <input type="radio" name="tm_mark_inc_eng_word" value="no" class="markno4" checked="" id="markno4">
                                <label for="markno4">No</label>
                            </div>
                            
                            <div class="form-group eng-translation form_group" style="display:none;">
                                <p>Please provide the English translation or transliteration of any non-Latin characters
                                    or non-English words:</p>
                                <input type="text" class="form-control" name="tm_eng_translation" required="">
                            </div>
                            
                            <div class="form-group use_tdmark form_group input_group">
                                <div><strong>Are you currently using this trademark in your business?</strong>
                                    <span class="form-tooltip">
                                        <span>?</span> Get Help
                                        <div class="form-tooltip-body">
                                            <p>By selecting “yes” you are representing that you are using the mark in
                                                commerce which means
                                                that you have actually sold goods or services with the mark. During this
                                                process, you will have
                                                to show proof that you are actually using the mark which will be explained
                                                later.
                                                <br><br>
                                                If you are not using the mark yet, but plan to, please mark “No.” By filing
                                                the Intent To Use,
                                                you will mark your place in line, but you will need to file a statement of
                                                use and pay additional fees with the USPTO once you actually start selling
                                                goods or services with the mark.
                                            </p>
                                        </div>
                                    </span>
                                </div>
                            
                            	
                                <input type="radio" name="tm_currently_using_trademark" value="yes" class="markyes5" id="markyes5">
                                <label for="markyes5">Yes</label>
                                
                                <input type="radio" name="tm_currently_using_trademark" value="no" class="markno5" checked="" id="markno5">
                                <label for="markno5">No</label>
                            </div>
                            
                            <div class="form-group first_use_any" style="display:none;">
                                <label>1. First use anywhere:</label>
                            </div>
                            <div id="first_use_anywhere" class="row" style="display:none;">
                                <div class="col-sm-4">
                                    <select class="input month form-control" name="tm_firstuse_anywhere_1">
                                        <option value="1" selected="">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="input day form-control" name="tm_firstuse_anywhere_2">
                                        <option value="1" selected="">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="input year form-control" name="tm_firstuse_anywhere_3">
                                        <option value="2023" selected="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group first_use_com" style="display:none">
                                <label>1. First use commerce:</label>
                            </div>
                            <div id="first_use_anywhere2" class="row" style="display:none;">
                                <div class="col-sm-4">
                                    <select class="input month form-control" name="tm_firstuse_commerce_1">
                                        <option value="1" selected="">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="input day form-control" name="tm_firstuse_commerce_2">
                                        <option value="1" selected="">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="input year form-control" name="tm_firstuse_commerce_3">
                                        <option value="2023" selected="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                    </select>
                                </div>
                            </div>
    						
                            <div class="form_group">
                                <p class="m-t-20"><small>If you do not have proof now, you can submit proof later after your trademark is submitted to the Trademark office. If you do it later, you will need to
                                        pay a $100 government fee (for US trademarks).</small></p>
                            </div>
                            </div>
                            <div class="submits-wrapper">
                                <div class="form_footer">
                                    <div class="d-md-flex align-items-center justify-content-between ">
                                        <p><i class="fal fa-lock"></i> Click on "Continue" to save your application.</p>
                                        <input type="hidden" name="sourcePage" value="">
                                        <input type="hidden" name="save_form_manually" value="0">
                                        <div class="form-btn-inner">
                                            <button type="submit" class="theme-btn">Continue</button> </div>
                                      </div>
                                        <input type="hidden" name="send" value="1">
                                        
                                    </div>
                                   
                                </div>
                        </div>
                        
                    </form>
                     
                </div>
                <p class="m-t-20">
                    <small class="fonts-inter">
                        Later in this process, <?php echo $brand;?> collects and pays the government-discounted TEAS Standard electronic filing fee of $350. In some circumstances, your application may qualify for the less-available
                        TEAS PLUS system which means we will pay $250 to the USPTO which streamlines the process. If your application qualifies for TEAS PLUS, we will use it and retain the difference between the TEAS Standard
                        filing fee and the TEAS Plus filing fee as a result of the additional processing by the <?php echo $brand;?>.
                    </small>
                </p>
                </div>
            </div>
        </div>
    </section>


    <?php include("../includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>

</body>



</html>