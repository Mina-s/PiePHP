<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pie PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= BASE_URI?>/webroot/css/reset.css" />
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div>
            <img src="<?= BASE_URI?>/webroot/assets/icone_nav.png" alt="icone_play" height="15">
            <a class="navbar-brand" href="<?= BASE_URI?>/">MyCinema</a>
        </div>
       
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li>
                    <a class="nav-link" href="<?= BASE_URI?>/">Home</a>
                </li>

                <li>
                 <a class="nav-link" href="<?= BASE_URI?>/user/profile">Profile</a>
                </li>

                <li>
                    <a class="nav-link" href="<?= BASE_URI?>/user/login">Login</a>
                </li>
                <li>
                    <a class="nav-link" href="<?= BASE_URI?>/user/register">Register</a>
                </li>
                <li>
                    <a class="nav-link" href="<?= BASE_URI?>/logout">logout</a>
                </li>
            
            </ul>
        </div>
    </nav>
</header>
<br>
<br>
<br>
<br>

    <?= $view ?>
</body>
</html>