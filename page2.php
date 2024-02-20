<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description" content="">
    <title></title>
    <?php include("includes/style.php"); ?>
</head>

<body>
    <?php include("includes/header.php"); ?>
    <div class="mainBanner" style="background-image:url(assets/images/banner/banner.jpg); ">
        <div class="container">
        <?php

$object1 = array(
    'package1' => array("name" => "lorem", 89, 78)
);

$object2 = array(
    'name' => 'Jane Smith',
    'age' => 25,
    'city' => 'Los Angeles',
    'isStudent' => true,
    'grades' => array(88, 92, 96)
);
            $receivedData = urldecode($_GET['data']);
            echo 
            ?>
        </div>
    </div>

    <?php include("includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>




</body>



</html>