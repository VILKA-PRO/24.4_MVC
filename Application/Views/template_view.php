
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>uMVC - моя сборка</title>
    <link rel="icon" type="image/jpg" href="https://i.ibb.co/7SQVS44/favicon.jpg">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/style_2.css" type="text/css" />



</head>

<body>

    <!-- HEADER -->

    <div class="container">
        <div class="row align-items-center ">

            <div class="header__inner col-12">
                <div class="header__logo">
                    <img width="50" src="images/US-Logo-1.png" alt="Us logo">
                    <a class="nav__link__main" href="index.php?url=main">uMVC</a>

                </div>
                <nav class="nav">

                    <a class="nav__link" href="index.php?url=main">Главная</a>
                    <a class="nav__link" href="index.php?url=services">Услуги</a>
                    <a class="nav__link" href="index.php?url=portfolio">Портфолио</a>
                    <a class="nav__link" href="index.php?url=contacts">Контакты</a>

                </nav>
            </div>
        </div>





        <div class="row game-card justify-content-md-center align-items-center myRow ">


            <?php include $content_view; ?>


        </div>

    </div>

</body>

</html>