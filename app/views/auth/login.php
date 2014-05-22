<!DOCTYPE html>

<!--[if lt IE 7 ]><html class="ie ie6" lang="nl"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="nl"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="nl"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="nl"><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="description" content="KSMVC">
    <title>KSMVC</title>

    <meta name="author" content="Jeroen van der Steen">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="public/css/main.css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="//code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</head>
<body>

<?php include("app/views/partials/menu.php"); ?>

<div class="container">
    <div class="col8 col alpha">

        <h1 class="slogan">Slogan</h1>

    </div>

    <div class="col8 col omega">

        <form action="" method="" autocomplete="off">

            <div class="col4 col alpha">
                <label for="first_name">Voornaam</label>
                <input type="text" name="first_name" id="first_name" class="fw"/>
            </div>

            <div class="col4 col omega">
                <label for="last_name">Achternaam</label>
                <input type="text" name="last_name" id="last_name" class="fw"/>
            </div>

            <div class="row">

                <label>Geboortedatum</label>

                <div class="col3in8 col alpha">
                    <select name="day" class="fw">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>

                <div class="col3in8 col between">
                    <select name="month" class="fw">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>

                <div class="col3in8 col omega">
                    <select name="year" class="fw">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="fw"/>
            </div>

            <div class="col4 col alpha">
                <label for="password">Wachtwoord</label>
                <input type="password" name="password" id="password" class="fw"/>
            </div>
            <div class="col4 col omega">
                <label for="password_confirm">Bevestig Wachtwoord</label>
                <input type="password" name="password_confirm" id="password_confirm" class="fw"/>
            </div>
            <div class="row">
                <input type="submit" value="Meld aan" class="btn"/>
            </div>
        </form>
    </div>
</div>

<?php include("app/views/partials/footer.php"); ?>


</body>
</html>