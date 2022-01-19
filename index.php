<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/main.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $DumyData = array(
            array(
                "imgName"=>"2021062217562415023.png",
                "imgAlt"=>"kaedehara kazuha",
                "imgUrl"=>"./assets/img/2021062217562415023.png",
            ),
            array(
                "imgName"=>"itto_gacha_card.png",
                "imgAlt"=>"arataki itto",
                "imgUrl"=>"./assets/img/itto_gacha_card.png",
            ),
            array(
                "imgName"=>"i_7101_profile.png",
                "imgAlt"=>"arataki itto",
                "imgUrl"=>"./assets/img/i_7101_profile.png",
            ),
            array(
                "imgName"=>"yaemiko_gacha_splash.png",
                "imgAlt"=>"yae miko",
                "imgUrl"=>"./assets/img/yaemiko_gacha_splash.png",
            ),
        );
    ?>
    <?php include("./src/components/header.php") ?>
    <?php include("./src/components/upload.popup.php") ?>

    <?php include("./src/page/profile.php") ?>

    <!-- script -->
    <script src="https://kit.fontawesome.com/f5f4cb5593.js" crossorigin="anonymous"></script>
</body>
</html>