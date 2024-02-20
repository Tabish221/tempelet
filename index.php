<!DOCTYPE html>
<html lang="en">


<head>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description" content="">
    <title></title>
    <?php include("includes/style.php"); ?>
</head>

<body>
    <div class="mainBanner">
        <?php include("includes/header.php"); ?>

        <div class="container">
            <div class="banner-content" style="">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-12">
                        <span class="sub-heading">2000+ clients recommend our Trademark Registration Services</span>
                        <h1 class="banner-heading">
                            Safeguard Your Brand with Trademark Registration
                        </h1>
                        <p class="banner-text">
                            Protect your brand name, logo, slogan, and more through our trademark registration services.
                        </p>
                        <div class="btn-wrap">
                            <a href="page2.php?data=object1" class="theme-btn popstatic">Register my Trademark </a>
                            <a href="javascript:;" class="theme-btn bordered" title="Live Chat" target="_self"
                                onclick="setButtonURL();">Consult an Expert</a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="banner-img">
                            <img src="assets/images/ban-img.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <section class="pckg-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-heading center">
                        <span class="sub-heading">Packages</span>
                        <h2>Cost-Effective Trademark Registration Packages</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pkg-list">
                        <div>
                            <div class="pckg">
                                <div class="upper">
                                    <h3 class="title">Trademark Searches</h3>
                                    <span class="starting-in">Starting from</span>
                                    <div class="price">
                                        <span class="amount">$149</span>
                                        <!-- <span class="uspto">
                                            + USPTO filing fees
                                        </span> -->
                                    </div>
                                    <p>Avoid rejection. Make sure your mark is not being used before filing.</p>
                                    <div class="btn-wrap">
                                        <a href="javascript:;" class="theme-btn w-100 text-center popdynamic">Learn
                                            More</a>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <span class="includes">What’s included</span>
                                    <ul>
                                        <li>Save time and money</li>
                                        <li>Domestic and International searches</li>
                                        <li>Comprehensive custom PDF report</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="pckg">
                                <div class="upper">
                                    <h3 class="title">Trademark Registration</h3>
                                    <span class="starting-in">Starting from</span>
                                    <div class="price">
                                        <span class="amount">$99</span>
                                        <span class="uspto">
                                            + USPTO filing fees
                                        </span>
                                    </div>
                                    <p>Register your trademark in just 5 minutes.</p>
                                    <div class="btn-wrap">
                                        <a href="javascript:;" class="theme-btn w-100 text-center popdynamic">Learn
                                            More</a>

                                    </div>
                                </div>
                                <div class="bottom">
                                    <span class="includes">What’s included</span>
                                    <ul>
                                        <li>Quick and easy questionnaire</li>
                                        <li>Easy and hassle-free process</li>
                                        <li>24/7 customer support</li>
                                        <li>Free Consultancy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="pckg">
                                <div class="upper">
                                    <h3 class="title">Trademark Monitoring</h3>
                                    <span class="starting-in">Starting from</span>
                                    <div class="price">
                                        <span class="amount">$175</span>
                                        <!-- <span class="uspto">
                                            + USPTO filing fees
                                        </span> -->
                                    </div>
                                    <p>Stop infringements & save money through active, continuous monitoring.</p>
                                    <div class="btn-wrap">
                                        <a href="javascript:;" class="theme-btn w-100 text-center popdynamic">Learn
                                            More</a>

                                    </div>
                                </div>
                                <div class="bottom">
                                    <span class="includes">What’s included</span>
                                    <ul>
                                        <li>24/7 monitoring and support</li>
                                        <li>Advanced monitoring technology</li>
                                        <li>No limits on detections and takedowns</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newcountrycode contact-dd">
                        <span class="fg1"></span>
                        <?php include('includes/countryList.php')?>
                        <input type="text" name="countrycode" class="countrycode" id="countrycode" readonly=""
                            value="+1">
                        <input type="text" placeholder="(000) 000-000" required class="phone-field">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="sec-heading center">
                        <h2>Trademark Registration FAQs</h2>
                        <p>Still got questions? Call us at <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                            or chat with us! </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <ul class="accordion-list ">
                        <li>
                            <span>
                                <h3>What is a trademark? </h3>
                            </span>
                            <div class="answer" style="display: none;">
                                <p>
                                    A trademark is a symbol, word, or phrase used to identify and distinguish the goods
                                    or services of one person or company from those of others.
                                </p>
                            </div>
                        </li>

                        <li>
                            <span>
                                <h3>Why should I register a trademark? </h3>
                            </span>
                            <div class="answer" style="display: none;">
                                <p>
                                    Registering a trademark can provide legal protection for your brand, prevent others
                                    from using similar marks, help build brand recognition and reputation, and make it
                                    easier to enforce your rights in court if someone else uses your mark without
                                    permission.
                                </p>

                            </div>
                        </li>

                        <li>
                            <span>
                                <h3>How do I register a trademark? </h3>
                            </span>
                            <div class="answer" style="display: none;">
                                <p>
                                    You can register a trademark with the United States Patent and Trademark Office
                                    (USPTO) by submitting an application online. Working with an experienced trademark
                                    attorney or agent is recommended to increase the chances of successful registration.
                                </p>
                            </div>
                        </li>
                        <li>
                            <span>
                                <h3>How long does the trademark registration process take?</h3>
                            </span>
                            <div class="answer" style="display: none;">
                                <p>
                                    The trademark registration process can take several months to over a year, depending
                                    on the complexity of the application and whether there are any objections or
                                    challenges from the USPTO or other trademark owners.
                                </p>
                            </div>
                        </li>
                        <li>
                            <span>
                                <h3>Can I trademark a name or logo that is similar to an existing trademark? </h3>
                            </span>
                            <div class="answer" style="display: none;">
                                <p>
                                    No, you cannot trademark a name or logo that is too similar to an existing
                                    trademark, as it may infringe on the existing trademark owner's rights. It's
                                    important to conduct a trademark search and work with an experienced trademark
                                    attorney or agent to ensure your mark is distinctive and does not infringe on the
                                    rights of others.
                                </p>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-heading center">
                        <h2>Slider 1</h2>

                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-slider">
                        <div class="port-slide">
                            <img src="assets/images/portfolio/1.webp" alt="">
                            <div class="det">
                                <span>Iconic Logo Design</span>
                                <a href="portfolio.php" class="underline">View all</a>
                            </div>
                        </div>
                        <div class="port-slide">
                            <img src="assets/images/portfolio/2.webp" alt="">
                            <div class="det">
                                <span>Typographic Logo design</span>
                                <a href="portfolio.php" class="underline">View all</a>
                            </div>
                        </div>
                        <div class="port-slide">
                            <img src="assets/images/portfolio/3.webp" alt="">
                            <div class="det">
                                <span>Illustrative Logo design</span>
                                <a href="portfolio.php" class="underline">View all</a>
                            </div>
                        </div>
                        <div class="port-slide">
                            <img src="assets/images/portfolio/4.webp" alt="">
                            <div class="det">
                                <span>Animated Logo design</span>
                                <a href="portfolio.php" class="underline">View all</a>
                            </div>
                        </div>
                        <div class="port-slide">
                            <img src="assets/images/portfolio/5.webp" alt="">
                            <div class="det">
                                <span>Emblem Logo design</span>
                                <a href="portfolio.php" class="underline">View all</a>
                            </div>
                        </div>
                        <div class="port-slide">
                            <img src="assets/images/portfolio/6.webp" alt="">
                            <div class="det">
                                <span>Wordmark Logo design</span>
                                <a href="portfolio.php" class="underline">View all</a>
                            </div>
                        </div>
                        <div class="port-slide">
                            <img src="assets/images/portfolio/7.webp" alt="">
                            <div class="det">
                                <span>Iconic Logo Design</span>
                                <a href="portfolio.php" class="underline">View all</a>
                            </div>
                        </div>
                        <div class="port-slide">
                            <img src="assets/images/portfolio/8.webp" alt="">
                            <div class="det">
                                <span>Iconic Logo Design</span>
                                <a href="portfolio.php" class="underline">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-heading small center white">
                        <h2>
                            Slider 2
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row slider-bg">
                        <div class="col-lg-12">
                            <div class="d-flex gap-4">
                                <div class="">
                                    <div class="rating">
                                        <span>52%</span>
                                        <p>
                                            Increase in SEO Traffic from Past Benchmark
                                        </p>
                                    </div>
                                    <div class="rating">
                                        <span>79%</span>
                                        <p>
                                            Increase in Organic Visitors in 6 Months
                                        </p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="rating">
                                        <span>46%</span>
                                        <p>
                                            Increase in Phone Calls from Search Engine
                                        </p>
                                    </div>
                                    <div class="rating">
                                        <span>60%</span>
                                        <p>
                                            Increase in SERP Ranking in 2 Months
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex gap-4">
                                <div class="">
                                    <div class="rating">
                                        <span>62%</span>
                                        <p>
                                            Increase in Organic Search Traffic
                                        </p>
                                    </div>
                                    <div class="rating">
                                        <span>55%</span>
                                        <p>
                                            Increase in Click-Through Rate
                                        </p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="rating">
                                        <span>76%</span>
                                        <p>
                                            Increase in Online Sales
                                        </p>
                                    </div>
                                    <div class="rating">
                                        <span>70%</span>
                                        <p>
                                            Increase in SERP Ranking in 6 Months
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex gap-4">
                                <div class="">
                                    <div class="rating">
                                        <span>50%</span>
                                        <p>
                                            Increase in Website Traffic from Local Search Results.
                                        </p>
                                    </div>
                                    <div class="rating">
                                        <span>75%</span>
                                        <p>
                                            Increase in Mobile Traffic
                                        </p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="rating">
                                        <span>54%</span>
                                        <p>
                                            Increase in Backlinks in 2 Months
                                        </p>
                                    </div>
                                    <div class="rating">
                                        <span>69%</span>
                                        <p>
                                            Increase in Email Subscriptions in 4 Months
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex gap-4">
                                <div class="">
                                    <div class="rating">
                                        <span>78%</span>
                                        <p>
                                            Increase in Conversion Rate
                                        </p>
                                    </div>
                                    <div class="rating">
                                        <span>65%</span>
                                        <p>
                                            Boost in Direct Traffic
                                        </p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="rating">
                                        <span>52%</span>
                                        <p>
                                            Increase in Pages Indexed
                                        </p>
                                    </div>
                                    <div class="rating">
                                        <span>62%</span>
                                        <p>
                                            Boost in Site’s Impressions
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="overlap-slider">
                        <div class="testi-slider">
                            <div class="testi-card">
                                <p>
                                    My business has drastically improved because of Rankbymonday's e-commerce SEO
                                    services. Within weeks, I’ve noticed a significant increase in local search
                                    visibility, driving more foot traffic to my store. Their approach and expertise have
                                    been invaluable in helping me expand.
                                </p>
                                <div class="client">
                                    <img src="assets/images/clients/m1.webp" alt="">
                                    <div class="det">
                                        <span class="name">John Drake</span>
                                        <span class="des">Acme Corporation , CEO</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <p>
                                    My website's online presence has been transformed thanks to Rankbymonday's off-page
                                    SEO services. Their strategic approach to building high-quality backlinks and
                                    increasing my brand's visibility across relevant platforms has significantly
                                    improved search rankings and organic traffic.
                                </p>
                                <div class="client">
                                    <img src="assets/images/clients/m2.webp" alt="">
                                    <div class="det">
                                        <span class="name">Michael Clark</span>
                                        <span class="des">Quantum Industries , Marketing Director</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <p>
                                    I'm thrilled with my results with Rankbymonday's local SEO services. Their team's
                                    expertise in optimizing my website for local search results has paid off. My website
                                    now ranks higher in local searches and has seen a noticeable increase in local
                                    customer inquiries. Highly recommended!
                                </p>
                                <div class="client">
                                    <img src="assets/images/clients/f1.webp" alt="">
                                    <div class="det">
                                        <span class="name"> Sarah Loren</span>
                                        <span class="des">Atlas Enterprises , CFO</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <p>
                                    Rankbymonday's e-commerce SEO services have truly changed my online store. Their
                                    extensive knowledge in optimizing my store for search engines has increased organic
                                    traffic, higher search rankings, and improved visibility in a competitive market. I
                                    strongly recommend this e-commerce SEO agency!
                                </p>
                                <div class="client">
                                    <img src="assets/images/clients/m3.webp" alt="">
                                    <div class="det">
                                        <span class="name"> David Smith</span>
                                        <span class="des">Visionary Solutions , HR Manager</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="arrows">
                            <a href="javascript:;" class="arrow-btns arrow-left prev">
                                <img src="assets/images/arrow-left.webp" alt="">
                            </a>
                            <a href="javascript:;" class="arrow-btns arrow-right next">
                                <img src="assets/images/arrow-right.webp" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="sec-heading center">
                        <h2>What Our Clients Have to Say</h2>
                        <p>
                            Join our client roster and discover the benefits of our exceptional logo design services.
                            Our team is dedicated to bringing your brand vision to life with high-quality, customized
                            designs.

                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testi-slider-2">
                        <div class="testi-slide">
                            <p>
                                Working with <?php echo $brand; ?> was an absolute dream. Their team brought my vision
                                to life with a stunning logo design that everyone adores. I couldn't be happier with the
                                end result. Great job, team!
                            </p>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/f1.webp" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Lara Ericson</span>
                                        <span class="des">Director</span>
                                    </div>
                                </div>
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="testi-slide">
                            <p>
                                <?php echo $brand; ?> allowed me to get unlimited revisions for the perfect logo. Their
                                design team was responsive and attentive to my needs throughout the process. I highly
                                recommend their services!
                            </p>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/m1.webp" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Michael Lee</span>
                                        <span class="des">CEO</span>
                                    </div>
                                </div>
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="testi-slide">
                            <p>
                                I was blown away by their ability to turn my rough sketch into a professional,
                                logo design. Their team exceeded my expectations in every way. Highly recommend
                                their services to those looking for logo design!
                            </p>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/f2.webp" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Emily Bernard</span>
                                        <span class="des">Founder</span>
                                    </div>
                                </div>
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="testi-slide">
                            <p>
                                <?php echo $brand; ?> made the logo design process a breeze. Their
                                team was communicative, knowledgeable, and responsive. The final product was exactly
                                what I was looking for. Thank you for the logo design!
                            </p>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/m2.webp" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Jason Kim</span>
                                        <span class="des">Creative Director </span>
                                    </div>
                                </div>
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="testi-slide">
                            <p>
                                I highly recommend <?php echo $brand; ?> for its exceptional logo design services. Their
                                team of experienced logo designers captured the essence of my brand in a way that truly
                                impressed me.
                            </p>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/f3.webp" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Melissa Smith</span>
                                        <span class="des">CEO</span>
                                    </div>
                                </div>
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="testi-slide">
                            <p>
                                <?php echo $brand; ?> flat monthly rate made the logo design service affordable and
                                accessible for my small business. The quality of their work surpassed my expectations. I
                                couldn’t be happier.
                            </p>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/m3.webp" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">David Johnson</span>
                                        <span class="des">Owner </span>
                                    </div>
                                </div>
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="testi-slide">
                            <p>
                                <?php echo $brand; ?> quick turn-around time allowed me to get my new logo up and
                                running in no time. Their team was efficient and produced high-quality work. I would
                                highly recommend them to anyone looking for a logo.
                            </p>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/f4.webp" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Lauren Wilson</span>
                                        <span class="des">COO </span>
                                    </div>
                                </div>
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="testi-slide">
                            <p>
                                <?php echo $brand; ?>’s experienced industry designers were able to create a logo that
                                perfectly represented my brand. Their attention to detail and creativity made the
                                process a pleasure. Thank you so much!
                            </p>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/m4.webp" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Ryan Lee</span>
                                        <span class="des">President</span>
                                    </div>
                                </div>
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>

                        <div class="testi-slide">
                            <p>
                                The process of working with <?php echo $brand; ?> was seamless. Their team was
                                communicative and responsive and produced an exceptional logo design that exceeded my
                                expectations. Love their work!
                            </p>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/f5.webp" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Ashley Brown</span>
                                        <span class="des">Managing Director </span>
                                    </div>
                                </div>
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>

                        <div class="testi-slide">
                            <p>
                                <?php echo $brand; ?> no hidden fees policy made their logo design service a
                                straightforward and honest process. Their team of professionals delivered a high-quality
                                logo design that I am proud to represent my brand.
                            </p>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/m5.webp" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Alex Kim</span>
                                        <span class="des">CEO</span>
                                    </div>
                                </div>
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>

                        <div class="testi-slide">
                            <p>
                                <?php echo $brand; ?> exceptional logo design service allowed me to establish a strong
                                brand identity for my business. Their team of logo designers was professional and
                                creative throughout the entire process.
                            </p>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/f6.webp" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Sophia Smith</span>
                                        <span class="des">Cofounder</span>
                                    </div>
                                </div>
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>

                        <div class="testi-slide">
                            <p>
                                <?php echo $brand; ?> monthly subscription plan provided me with unlimited designs and
                                revisions, which was invaluable to me as I refined my brand. Their logo experts produced
                                a stunning final product. Thank you!
                            </p>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/m6.webp" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Andy Moore</span>
                                        <span class="des">Founder</span>
                                    </div>
                                </div>
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>


                        <div class="testi-slide">
                            <p>
                                I was impressed with <?php echo $brand; ?> attention to detail in creating my logo
                                design. Their team was able to capture the essence of my brand and bring it to life in a
                                way that truly impressed me. Highly recommended.
                            </p>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/f7.webp" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Emma Wilson</span>
                                        <span class="des">Managing Director</span>
                                    </div>
                                </div>
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>

                        <div class="testi-slide">
                            <p>
                                <?php echo $brand; ?> logo design team produced a high-quality logo design that helped
                                me stand out in a competitive market. Their unlimited revisions policy allowed me to
                                fine-tune the logo design to perfection.
                            </p>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/m7.webp" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Daniel Kim</span>
                                        <span class="des">Cofounder</span>
                                    </div>
                                </div>
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>

                        <div class="testi-slide">
                            <p>
                                <?php echo $brand; ?> talented logo designers were able to take my vague ideas and turn
                                them into a stunning logo design that perfectly represents my brand. Their team was a
                                pleasure to work with.
                            </p>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/f8.webp" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Olivia Bendell</span>
                                        <span class="des">CEO</span>
                                    </div>
                                </div>
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                        <div class="testi-slide">
                            <p>
                                I highly recommend <?php echo $brand; ?> for their exceptional logo design service.
                                Their team was absolutely amazing. They produced a final product that exceeded my
                                expectations. Highly recommended!
                            </p>
                            <div class="bottom">
                                <div class="client">
                                    <img src="assets/images/client/m8.webp" alt="" loading="lazy">
                                    <div class="det">
                                        <span class="name">Kevin Lee</span>
                                        <span class="des">Founder</span>
                                    </div>
                                </div>
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="webdesignSec" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-heading center" data-aos="fade-up" data-aos-duration="1000">
                        <h2>Explore Our Impressive Web Design Portfolio</h2>
                        <p>Here’s a collection of our work. We offer unlimited design possibilities.</p>
                    </div>
                </div>
            </div>
        </div>

        <ul class="design-card-list">
            <li>
                <a data-fancybox="gallery" href="assets/images/portfolio/p1.webp" data-caption="Caption #1">
                    <img src="assets/images/portfolio/p1.webp">
                </a>
            </li>
            <li>
                <a data-fancybox="gallery" href="assets/images/portfolio/p2.webp" data-caption="Caption #1">
                    <img src="assets/images/portfolio/p2.webp">
                </a>
            </li>
            <li>
                <a data-fancybox="gallery" href="assets/images/portfolio/p3.webp" data-caption="Caption #1">
                    <img src="assets/images/portfolio/p3.webp">
                </a>
            </li>
            <li>
                <a data-fancybox="gallery" href="assets/images/portfolio/p4.webp" data-caption="Caption #1">
                    <img src="assets/images/portfolio/p4.webp">
                </a>
            </li>
            <li>
                <a data-fancybox="gallery" href="assets/images/portfolio/p1.webp" data-caption="Caption #1">
                    <img src="assets/images/portfolio/p1.webp">
                </a>
            </li>
            <li>
                <a data-fancybox="gallery" href="assets/images/portfolio/p2.webp" data-caption="Caption #1">
                    <img src="assets/images/portfolio/p2.webp">
                </a>
            </li>
        </ul>

        <ul class="design-card-list-2">
            <li>
                <a data-fancybox="gallery" href="assets/images/portfolio/p5.webp" data-caption="Caption #1">
                    <img src="assets/images/portfolio/p5.webp">
                </a>
            </li>
            <li>
                <a data-fancybox="gallery" href="assets/images/portfolio/p6.webp" data-caption="Caption #1">
                    <img src="assets/images/portfolio/p6.webp">
                </a>
            </li>
            <li>
                <a data-fancybox="gallery" href="assets/images/portfolio/p7.webp" data-caption="Caption #1">
                    <img src="assets/images/portfolio/p7.webp">
                </a>
            </li>
            <li>
                <a data-fancybox="gallery" href="assets/images/portfolio/p8.webp" data-caption="Caption #1">
                    <img src="assets/images/portfolio/p8.webp">
                </a>
            </li>
            <li>
                <a data-fancybox="gallery" href="assets/images/portfolio/p5.webp" data-caption="Caption #1">
                    <img src="assets/images/portfolio/p5.webp">
                </a>
            </li>
            <li>
                <a data-fancybox="gallery" href="assets/images/portfolio/p6.webp" data-caption="Caption #1">
                    <img src="assets/images/portfolio/p6.webp">
                </a>
            </li>

        </ul>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="btn-wrap d-flex justify-content-center gap-3">
                        <a href="javascript:;" class="theme-btn popstatic">Request a Quote</a>
                        <a href="javascript:;" class="theme-btn bordered" target="_self"
                            onclick="setButtonURL();">Contact an Expert</a>
                    </div>
                    <div class="rated d-flex align-items-center justify-content-center">
                        <p>95% satisfied customers</p>
                        <span><img src="assets/images/green-stars.svg" alt="green-stars" loading="lazy"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center pad-top">
                    <div class="sec-heading center" data-aos="fade-up" data-aos-duration="1000">
                        <h2>Beyond Boundaries - Portfolio of Our Original Designs</h2>
                        <p>Have a look at some of our most innovative designs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="overview-nav d2">
                        <li data-targetit="box-web" class="first active">
                            <a href="javascript:;">E-Commerce Web Design</a>
                        </li>
                        <li data-targetit="box-mob">
                            <a href="javascript:;">Mobile Application</a>
                        </li>
                        <li data-targetit="box-anim" class="last">
                            <a href="javascript:;">Animation</a>
                        </li>
                        <li data-targetit="box-brand" class="last">
                            <a href="javascript:;">Graphic Design</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="box-web showfirst  port-content" style="display:block">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/1.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/1.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/2.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/2.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/3.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/3.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/4.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/4.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/5.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/5.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/6.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/6.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/7.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/7.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/8.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/8.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/9.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/9.webp">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-mob port-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/1.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/1.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/2.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/2.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/3.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/3.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/4.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/4.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/5.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/5.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/6.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/6.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/7.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/7.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/8.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/8.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/9.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/9.webp">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-anim port-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/1.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/1.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/2.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/2.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/3.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/3.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/4.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/4.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/5.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/5.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/6.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/6.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/7.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/7.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/8.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/8.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/9.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/9.webp">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-brand port-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/1.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/1.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/2.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/2.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/3.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/3.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/4.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/4.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/5.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/5.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/6.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/6.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/7.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/7.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/8.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/8.webp">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="port-card">
                            <a data-fancybox="gallery" href="assets/images/portfolio/website/9.webp"
                                data-caption="Caption #1">
                                <img src="assets/images/portfolio/website/9.webp">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="btn-wrap d-flex justify-content-center gap-3">
                        <a href="javascript:;" class="theme-btn popstatic">Request a Quote</a>
                        <a href="javascript:;" class="theme-btn bordered" target="_self"
                            onclick="setButtonURL();">Contact an Expert</a>
                    </div>
                    <div class="rated d-flex align-items-center justify-content-center">
                        <p>95% of Satisfied Customers</p>
                        <span><img src="assets/images/green-stars.svg" alt="green-stars" loading="lazy"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include("includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>




</body>



</html>