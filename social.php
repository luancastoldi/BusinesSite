<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css?time=<?= time() ?>">
    <link rel="stylesheet" href="css/unsemantic-grid-responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>

    <?php
    include('topBar.php');
    ?>

    <div class="title">
        My Social Medias
    </div>
    <h4 style="color: white; text-align: center; font-size: 40px;">castoldiluan@gmail.com</h4>

    <div class="grid-container-100 social-icon">

        <div class="grid-33 containerImg">
            <img class="imageImg" alt="facebook" src="css/imagens/faceb.png">
            <div class="overlayImg">
                <a class="textImg" href="https://www.facebook.com/luancarlos.castoldi">Facebook</a>
            </div>
        </div>


        <div class="grid-33 containerImg">
            <img class="imageImg" alt="facebook" src="css/imagens/git.png">
            <div class="overlayImg">
                <a class="textImg" href="https://github.com/luancastoldi">GitHub</a>
            </div>
        </div>


        <div class="grid-33 containerImg">
            <img class="imageImg" alt="facebook" src="css/imagens/insta.png">
            <div class="overlayImg">
                <a class="textImg" href="https://www.instagram.com/luan_.c/">Instagram</a>
            </div>
        </div>
    </div>
</body>

</html>