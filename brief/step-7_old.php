<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

?><!DOCTYPE html>
<html lang="en">

<head>
    

    
    
    <?php include("../includes/compatibility.php"); ?>
    <title>Brand Robust</title>
    <meta name="description" content="We protect your business with our comprehensive trademark services. Get the legal protection today.">
    <?php include("../includes/style2.php"); ?>

<?php include("../crm/include/config.php");

function getpageSource($leaddatakey){
    global $conn;
    $leadkey = $_GET['leadkey'];
    $sql = "SELECT * FROM leadmeta WHERE leadkey LIKE '$leadkey' AND leadmetakey LIKE '$leaddatakey'";
    $res = $conn->query($sql);
    if($res->num_rows>0){
        while($row = $res->fetch_assoc()){
            return $row['leadmetavalue'];
        }
    }else{
        return '';
    }
}
function getLeadLetails(){
    global $conn;
    $leadkey = $_GET['leadkey'];
    $sql = "SELECT * FROM `leads` WHERE `leadkey` LIKE '$leadkey'";
    $res = $conn->query($sql);
    while($row = $res->fetch_assoc()){
        return $row;
    }
}



?>

<style>
.about{margin:70px auto 40px;padding:8px;width:260px;font:10px/18px 'Lucida Grande',Arial,sans-serif;color:#bbb;text-align:center;text-shadow:0 -1px rgba(0,0,0,0.3);background:#383838;background:rgba(34,34,34,0.8);border-radius:4px;background-image:-webkit-linear-gradient(top,rgba(0,0,0,0),rgba(0,0,0,0.3));background-image:-moz-linear-gradient(top,rgba(0,0,0,0),rgba(0,0,0,0.3));background-image:-o-linear-gradient(top,rgba(0,0,0,0),rgba(0,0,0,0.3));background-image:linear-gradient(to bottom,rgba(0,0,0,0),rgba(0,0,0,0.3));-webkit-box-shadow:inset 0 0 0 1px rgba(0,0,0,0.2),0 0 6px rgba(0,0,0,0.4);box-shadow:inset 0 0 0 1px rgba(0,0,0,0.2),0 0 6px rgba(0,0,0,0.4)}
section.footer-bottom .container{text-align:center;padding:20px 0;background:#f9fafc;font-size:12px;line-height:19px;color:#616161}
p.copyright{color:#8A8A8A;margin-top:10px}
p.tos-links{font-size:11px;color:#9e9e9e;font-weight:300}
p.tos-links a{color:#9e9e9e;text-decoration:underline}
section.footer-bottom .container img{max-width:100%;height:auto;margin-bottom:16px}
.about a{color:#eee;text-decoration:none;border-radius:2px;-webkit-transition:background .1s;-moz-transition:background .1s;-o-transition:background .1s;transition:background .1s}
.about a:hover{text-decoration:none;background:#555;background:rgba(255,255,255,0.15)}
.about-links{height:30px}
.about-links > a{float:left;width:50%;line-height:30px;font-size:12px}
.about-author{margin-top:5px}
.about-author > a{padding:1px 3px;margin:0 -1px}
body{font:15px/20px;font-family:sans-serif;color:#000}
.checkout{width:410px;margin:30px auto;padding:15px;background:#f3f6fa;border:1px solid;border-color:#c2cadb #bbc5d6 #b7c0cd;border-radius:7px;-webkit-box-shadow:0 1px 5px rgba(0,0,0,0.15);box-shadow:0 1px 5px rgba(0,0,0,0.15)}
.checkout > p{zoom:1}
.checkout > p:before,.checkout > p:after{content:'';display:table}
.checkout > p:after{clear:both}
.checkout > p + p{margin-top:7px}
.checkout-header{position:relative;margin:-15px -15px 15px}
.checkout-title{padding:0 15px;line-height:48px;font-size:18px;font-weight:400;text-shadow:0 1px rgba(255,255,255,0.7);background:#eceff5;border-bottom:1px solid #c5ccdb;border-radius:7px 7px 0 0;background-image:-webkit-linear-gradient(top,#f5f8fb,#e9edf3);background-image:-moz-linear-gradient(top,#f5f8fb,#e9edf3);background-image:-o-linear-gradient(top,#f5f8fb,#e9edf3);background-image:linear-gradient(to bottom,#f5f8fb,#e9edf3);-webkit-box-shadow:inset 0 1px #fff;box-shadow:inset 0 1px #fff;margin:0}
.checkout-title:before{content:'';position:absolute;bottom:0;left:0;right:0;height:2px;-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.08);box-shadow:0 1px 2px rgba(0,0,0,0.08)}
.checkout-price{position:absolute;top:-14px;right:-14px;width:40px;font:14px/40px Helvetica,Arial,sans-serif;color:#fff;text-align:center;text-shadow:0 -1px 1px rgba(0,0,0,0.3);text-indent:-1px;letter-spacing:-1px;background:#e54930;border:1px solid;border-color:#b33323 #ab3123 #982b1f;border-radius:21px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:-webkit-linear-gradient(top,#f75a3b,#d63b29);background-image:-moz-linear-gradient(top,#f75a3b,#d63b29);background-image:-o-linear-gradient(top,#f75a3b,#d63b29);background-image:linear-gradient(to bottom,#f75a3b,#d63b29);-webkit-box-shadow:inset 0 1px 1px rgba(255,255,255,0.3),0 1px 2px rgba(0,0,0,0.2);box-shadow:inset 0 1px 1px rgba(255,255,255,0.3),0 1px 2px rgba(0,0,0,0.2)}
.checkout-price:before{content:'';position:absolute;top:3px;bottom:3px;left:3px;right:3px;border:2px solid #f5f8fb;border-radius:18px;-webkit-box-shadow:inset 0 1px 1px rgba(255,255,255,0.2),inset 0 -1px 1px rgba(0,0,0,0.25),0 -1px 1px rgba(0,0,0,0.25);box-shadow:inset 0 1px 1px rgba(255,255,255,0.2),inset 0 -1px 1px rgba(0,0,0,0.25),0 -1px 1px rgba(0,0,0,0.25)}
input{margin:0;line-height:normal;font-family:inherit;font-size:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
.disclaimer p{color:#8c8c8c;font-size:11px;margin:0}
.disclaimer{padding:15px 0}
.checkout-input{float:left;padding:0 10px;height:40px;color:#525864;background:#fff;border:1px solid;border-color:#b3c0e2 #bcc5e2 #c0ccea;border-radius:4px;background-image:-webkit-linear-gradient(top,#f6f8fa,white);background-image:-moz-linear-gradient(top,#f6f8fa,white);background-image:-o-linear-gradient(top,#f6f8fa,white);background-image:linear-gradient(to bottom,#f6f8fa,white);-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1),0 1px rgba(255,255,255,0.5);box-shadow:inset 0 1px 2px rgba(0,0,0,0.1),0 1px rgba(255,255,255,0.5)}
.checkout-input:focus{border-color:#46aefe;outline:none;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1),0 0 5px #46aefe;box-shadow:inset 0 1px 2px rgba(0,0,0,0.1),0 0 5px #46aefe}
.lt-ie9 .checkout-input{line-height:30px}
.checkout-name{width:100%}
.checkout-cvc{margin:0 0 0 7px !important;width:31%;margin-top:9px!important}
.checkout-card{width:100%;margin-top:9px}
.checkout-exp,.checkout-exp2,.checkout-cvc{margin:0;width:31%;margin-top:9px}
.checkout-btn{width:100%;box-sizing:border-box;height:44px;padding:0;font-weight:700;color:#fff;text-align:center;text-shadow:0 -1px 1px rgba(0,0,0,0.2);border:1px solid;border-color:#1486f9 #0f7de9 #0d6acf;background:#1993fb;border-radius:4px;background-image:-webkit-linear-gradient(top,#4cb1fe,#229afc 40%,#138df6);background-image:-moz-linear-gradient(top,#4cb1fe,#229afc 40%,#138df6);background-image:-o-linear-gradient(top,#4cb1fe,#229afc 40%,#138df6);background-image:linear-gradient(to bottom,#4cb1fe,#229afc 40%,#138df6);-webkit-box-shadow:inset 0 1px rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.2);box-shadow:inset 0 1px rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.2);cursor:pointer}
.checkout-btn:active{text-shadow:0 1px 1px rgba(0,0,0,0.2);border-color:#075bba #0c69d2 #0f7de9;background-image:-webkit-linear-gradient(top,#1281dc,#1593fc);background-image:-moz-linear-gradient(top,#1281dc,#1593fc);background-image:-o-linear-gradient(top,#1281dc,#1593fc);background-image:linear-gradient(to bottom,#1281dc,#1593fc);-webkit-box-shadow:inset 0 1px 4px rgba(0,0,0,0.1),0 1px rgba(255,255,255,0.5);box-shadow:inset 0 1px 4px rgba(0,0,0,0.1),0 1px rgba(255,255,255,0.5)}
:-moz-placeholder{color:#acb6c8!important}
::-moz-placeholder{color:#acb6c8!important;opacity:1}
::-webkit-input-placeholder{color:#acb6c8}
:-ms-input-placeholder{color:#acb6c8}
::-moz-focus-inner{padding:0!important;border:0!important}
.paywith{font-size:14px;padding-bottom:10px;text-align:center}
.paywith img{vertical-align:middle;margin:0 10px}
.gray-scr h3{color:#392a83;font-weight:700;font-size:22px;padding:34px 0 23px;background:#fff;position:relative}
.gray-scr{text-align:center;background:#f3f3f3;margin-top:0;padding:0 0 10px}
.header-wrap .container{background:#f9fafc;padding:16px 37px}
header .col-sm-6+.col-sm-6{text-align:right;padding-top:8px}
.bottom-form{background:#E7ECF2;padding:0 0 36px;text-align:center;margin:0 auto}
.bottom-form ul li{display:inline-block;margin:0 20px}
h2.scr-h2{text-align:center;position:relative;color:#000;font-weight:600;font-size:27px;letter-spacing:0;margin-bottom:-10px;margin-top:20px}
section.thankyouboxa .container{background:#f3f3f3;padding:0;overflow:hidden}
/*h2.scr-h2:before{background:#69dea1;content:"";width:140px;height:8px;position:absolute;bottom:0;left:50%;margin-left:-50px;z-index:0}*/
.gray-scr h3:before{background:#f4aa41;width:50px;height:4px;position:absolute;left:50%;margin-left:-25px;bottom:0;content:"";border-radius:70px}
h2.scr-h2 span{position:relative}
.pd-left-0{padding-left:0!important}


section.thankyouboxa .container {
    /*max-width: 1200px;*/
    /*margin: auto;*/
}

.header-wrap {
    max-width: 1200px;
    margin: auto;
    text-align: center;
}

.checkout-input{
    float:left;
    padding:0 10px;
    height:40px;
    color:#525864 !important;
    background:#fff !important;
    border:1px solid !important;
    border-color:#b3c0e2 #bcc5e2 #c0ccea !important;
    border-radius:4px !important;
    background-image:-webkit-linear-gradient(top,#f6f8fa,white) !important;
    background-image:-moz-linear-gradient(top,#f6f8fa,white) !important;
    background-image:-o-linear-gradient(top,#f6f8fa,white) !important;
    background-image:linear-gradient(to bottom,#f6f8fa,white) !important;
    -webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1),0 1px rgba(255,255,255,0.5) !important;
    box-shadow:inset 0 1px 2px rgba(0,0,0,0.1),0 1px rgba(255,255,255,0.5) !important;
    
}
.checkout-input:focus{
    border-color:#46aefe !important;
    outline:none !important;
    -webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1),0 0 5px #46aefe !important;
    box-shadow:inset 0 1px 2px rgba(0,0,0,0.1),0 0 5px #46aefe !important;
}

.checkout-btn{
    width:100% !important;
    box-sizing:border-box !important;
    height:44px !important;
    padding:0 !important;
    font-weight:700 !important;
    color:#fff !important;
    text-align:center !important;
    text-shadow:0 -1px 1px rgba(0,0,0,0.2) !important;
    border:1px solid !important;
    border-color:#1486f9 #0f7de9 #0d6acf !important;
    background:#1993fb !important;
    border-radius:4px !important;
    background-image:-webkit-linear-gradient(top,#4cb1fe,#229afc 40%,#138df6) !important;
    background-image:-moz-linear-gradient(top,#4cb1fe,#229afc 40%,#138df6) !important;
    background-image:-o-linear-gradient(top,#4cb1fe,#229afc 40%,#138df6) !important;
    background-image:linear-gradient(to bottom,#4cb1fe,#229afc 40%,#138df6) !important;
    -webkit-box-shadow:inset 0 1px rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.2) !important;
    box-shadow:inset 0 1px rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.2) !important;
    cursor:pointer;
}
.checkout-btn:active{
    text-shadow:0 1px 1px rgba(0,0,0,0.2) !important;
    border-color:#075bba #0c69d2 #0f7de9 !important;
    background-image:-webkit-linear-gradient(top,#1281dc,#1593fc) !important;
    background-image:-moz-linear-gradient(top,#1281dc,#1593fc) !important;
    background-image:-o-linear-gradient(top,#1281dc,#1593fc) !important;
    background-image:linear-gradient(to bottom,#1281dc,#1593fc) !important;
    -webkit-box-shadow:inset 0 1px 4px rgba(0,0,0,0.1),0 1px rgba(255,255,255,0.5) !important;
    box-shadow:inset 0 1px 4px rgba(0,0,0,0.1),0 1px rgba !important;
    
}


@media screen and (max-width: 500px) {
  .checkout {
    width: 93%;
  }
  .pd-left-0 {
        padding-left: 15px !important;
    }
}
</style>




</head>

<body>
    



<noscript>
<div id="jqcheck"><img alt="alert" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB60lEQVQ4T2NkwAHePzrxf3ebL1jWp/0oA5egGiM2pVgFQQq31uj/N/ANZvj+8T3D7aNHGDwbTxNvwKtbO/9f3dLHYJ+axfDn5w+GI/NnMRhFtTEISJtjGIIh8Pv39/87ak0ZzCLiGMRUNMCufnLxDMOlrZsY3JtOMrCwsKPowTDg3tGZ/59f2sVgFRvPkO+bAzZgwsZJDEcXzWNQtIlikDGIwG3Az+9v/+9qsGOwTc1h4JeQhhswcfMUhrcP7zEcXzyXwb3xMAMbuwDcEBTTzi7P/s/M8IFB3zccbDPMBSADQODs2sUMzFwyDIah/ZgGfHt/7/+BvmAGm+RsBl4RMawGfHr5jOHowlkMjiUbGDj55MCGwE060Of1X0RZi0Hb2Q4e3eguAElc2X2A4e2DmwwOhVsRBnx6cfH/yXm5DFZxyQxcAoJ4Dfj24T3DsUVzGcwSJjLwSxkygk3ZVmv4X805gkHZRBNXwkQRv3/+NsP1nUsYvFvOMzI+PLXo/73DSxgsouIYOHj5UBRi8wJIwY8vnxlOLV/CIGcewsC4vkDhv01yLoOIoiqG7bgMACn88Owxw8HpvQyMGwqV/vs19TMwQnxDEthYW8DAeGCC3/9XN46TpBGmWEzDkoHx06dP/z9//kyWAby8vAwAcza2SBMOSCMAAAAASUVORK5CYII="> Javascript is disabled. Please enable it for better working experience.</div>
</noscript>
<div class="header-wrap">
  <header>
    <div class="container clearfix">
      <div class="row">
        <div class="col-xs-12 col-sm-12 text-center"> <a href="javascript:;" class="logo" title=""><img src="../lp1/assets/images/logo.svg" style=" width: 225px; "></a> </div>
        <!--<div class="col-xs-6 col-sm-6"> <span class="paysecure-cta">Need Help? </span> </div>-->
      </div>
    </div>
  </header>
</div>

<?php
$exp_term_fee = getpageSource('exp_term_fee');
$uspto_fee = getpageSource('uspto_fee');
$price = getpageSource('data_pkg_price');
$fullamount = ($exp_term_fee + $uspto_fee + $price);
$data_pkg_title = getpageSource('data_pkg_title');

?>

<section class="thankyouboxa">
  <div class="container">
    <div class="gray-scr">
      <!--<h3>LAST STEP TO ACTIVATE YOUR COUPON</h3>-->
      <h2 class="scr-h2"><span>Secure Payment Globally!</span></h2><br><br>
    </div>

            <form id="payment-form" class="checkout" action="" method="POST">
              <div class="checkout-header">
                <h1 class="checkout-title" style="text-align:left;"> Total Payable <span style="float:right"> $ <?php echo $fullamount;?></span> </h1>
              </div>
              <p class="paywith"> Pay with Credit Card <img src="/assets/images/credit_icons.png" width="200" height="31" alt=""></p>
              <p>
                <input required="" type="text" class="required checkout-input checkout-name" placeholder="Card Holder Name" value="" name="cardname">
              </p>
              <div class="row" style=" margin-bottom: 9px; ">
                <div class="col-md-6 pd-right-0">
                  <input type="text" size="20" class="required number checkout-input checkout-card" data-stripe="number" id="credit_card_number" maxlength="16" placeholder="xxxxxxxxxxxxxxxx" required>
                </div>
                <div class="col-md-6 pd-left-0">
                  <input type="text" size="2" class="small exp_month required number checkout-input checkout-exp" data-stripe="exp_month" id="exp_month" maxlength="2" placeholder="MM" required>
                  <input type="text" size="2" class="small exp_year required number checkout-input checkout-exp2" data-stripe="exp_year" id="exp_year" maxlength="2" placeholder="YY" required>
                  <input type="text" size="4" class="small cvcsmall required number checkout-input checkout-cvc" data-stripe="cvc" id="cvc" maxlength="4" placeholder="CVC" required style="margin-left:0 !important">
                  <p></p>
                </div>
              </div>
              <p>
                <input required="" type="text" class="required checkout-input checkout-address" placeholder="Address" name="ccAddress1" style="width:100%">
              </p>
              <p class="payment-errors"></p>
              <p>
                <input type="hidden" name="leadid" value="<?php echo $_GET['leadkey'];?>">
                <input type="hidden" name="email" value="<?php echo getLeadLetails()['email'];?>">
                <input type="hidden" name="name" value="<?php echo getLeadLetails()['name'];?>">
                <input type="hidden" name="phone" value="<?php echo getLeadLetails()['phone'];?>">
                <input type="hidden" name="source" value="<?php echo $data_pkg_title;?>">
                <input type="hidden" name="price" value="<?php echo $fullamount;?>">
                <!--<input type="submit" class="verify-pkg-btn checkout-btn" style="background-color: #1993fb;" value="Pay Now!">-->
                <input type="submit" class="verify-pkg-btn checkout-btn" value="Pay Now!">
              </p>
            </form>

        
    </div>
    
    
    
  </div>
</section>

<div class="container bottom-form">
  <!--<ul>-->
  <!--  <li><img src="/assets/images/bottom-logos1.jpg"></li>-->
  <!--  <li><img src="/assets/images/bottom-logos2.jpg"></li>-->
  <!--  <li><img src="/assets/images/bottom-logos3.jpg"></li>-->
  <!--</ul>-->
</div>
<section class="footer-bottom">
  <div class="container">
    <!--<p class="tos-links"> <a href="/terms-and-conditions/" target="_blank">Terms &amp; Conditions</a> | <a href="/privacy-policy/" target="_blank">Privacy Policy</a> </p>-->
    <p class="copyright">&copy; <?php echo date("Y"); ?> - All Rights Reserved</p>
  </div>
</section>
<?php include("../includes/footer2.php"); ?>
    <?php include("../includes/scripts.php"); ?>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<!-- TO DO : Place below JS code in js file and include that JS file -->


<script type="text/javascript">
    var pkey1 = "<?php echo $_GET['p'];?>";
    // Stripe.setPublishableKey('pk_live_IFqCAVPxZ5VA0v58ZctnLX0R');
    //Stripe.setPublishableKey('pk_live_HL4mNWMR6SM3qV6h8FYR3GoK');
    Stripe.setPublishableKey('pk_live_51Kjo8NLnOEs1J6Ncbkl0vqed4wB5I2BT5zcgwI0AfeSBC51tV6KwRTklOO4BLtnhElRqqtBLy0RkdT8Agye1XH4g00hcn5Oisp');


    $(function() {
        var $form = $('#payment-form');
        $form.submit(function(event) {
            // Disable the submit button to prevent repeated clicks:
            $form.find('.checkout-btn').prop('disabled', true);

            // Request a token from Stripe:
            Stripe.card.createToken($form, stripeResponseHandler);
            console.log('test');
            // Prevent the form from being submitted:
            return false;
        });
    });

    function stripeResponseHandler(status, response) {
        // Grab the form:
        var $form = $('#payment-form');

        if (response.error) { // Problem!

            // Show the errors on the form:
            $form.find('.payment-errors').text(response.error.message);
             $('.checkout-btn').removeAttr('disabled');

        } else { // Token was created!

            // Get the token ID:
            var token = response.id;

            // Insert the token ID into the form so it gets submitted to the server:
            $form.append($('<input type="hidden" name="stripeToken">').val(token));

            // Submit the form:
            var formData = $('#payment-form').serialize();
            console.log(formData);
            var formtype = 'paymentFoarm';
            $.ajax({
                url: '../crm/include/steps_new/form_submts.php',
                type: 'post',
                data: formData+'&type='+formtype,
                success:function(res){
                    if(res == 'error'){
                        //swal("Oh noes!", "Something went wrong! Please Try Again", "error");
                        alert('Something went wrong! Please Try Again', res);
                        $('.checkout-btn').removeAttr('disabled');
                    }else{
                        window.location.href = 'https://www.brandrobust.com/payment-success?k='+res;
                    }
                }
            })
        }
    };

</script>


</body>



</html>

<!-- Start of Brand Robust Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=8d3bb892-f3d4-4c0f-bba4-f67d873158bb"> </script>
<!-- End of Brand Robust Zendesk Widget script -->
