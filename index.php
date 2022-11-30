<!DOCTYPE html>
<html lang="EN">

<head>
    <script src="https://kit.fontawesome.com/7a840548b5.js" crossorigin="anonymous"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="img/icon.png">
    <meta charset="utf-8">

    <title>Portfolio Simbel & Deadly</title>

    <!--Let browser know website is optimized for mobile
    But W3c apparently doesn't want any of that-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
</head>

<body>
    <?php require_once "php/requires/config.php" ?>

    <img id="riped" class="hide-on-med-and-up" src="img/gamingcampusriped.png" alt="Gaming Campus">

    <?php require_once "php/requires/nav.php" ?>

    <div class="start">

        <div class="parallax-container">
            <div class="parallax"><img src="img/gcs.jpg" alt="Gaming Campus Small"></div>
            <div class="parallax hide-on-small-only"><img src="img/gaming_campus.webp" alt="Gaming Campus"></div>
            <div class="row">
                <div class="images">
                    <div class="col s6 center">
                        <a href="#about"><img class="circle responsive-img" src="img/simbel-pdp.webp" alt="Simbel"></a>
                    </div>
                    <div class="col s6 center">
                        <a href="#about"><img class="circle responsive-img" src="img/deadly-pdp.png" alt="Deadly"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="black">
            <div class="row">
                <div class="purple-text grey darken-4 center bgh1 col s12 offset-m1 m10 offset-l2 l8">
                    <div class="margintop">
                        <h1>Portfolio</h1>
                        <h2 class="white-text">Simbel & deadly</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="cpcontainer" class="row">
        <div id="cp1" class="col s4"><img id="p1" src="img/p1.png" alt="Project HTML + CSS"></div>
        <div id="cp2" class="col s4"><img id='p2' src="img/p2.png" alt="Frozen Heart"></div>
        <div id="cp3" class="col s4"><img id='p3' src="img/p3.png" alt="Shmeup"></div>
    </div>
    <div class="main carousel carousel-slider center">
        <div class="carousel-fixed-item center">
            <a class="btn waves-effect white grey-text darken-text-2" href="index.html"><i
                    class="material-icons right">last_page</i>take a look</a>
        </div>
        <div class="carousel-item">
            <img src="img/p1.png" alt="Why Should You Visit Undertale?">
        </div>
        <div class="carousel-item">
            <img src="img/p2.png" alt="Deltarune: Frozen Heart">
        </div>
        <div class="carousel-item">
            <img src="img/p3.png" alt="Bootcamp game">
        </div>
    </div>





    <div id="about">
        <div class="">
            <h2 class="header">About ourselves</h2>
            <div class="row">
                <div class="card horizontal col l6 m12">
                    <div class="card-image">
                        <img src="img/simbel-pdp.webp" alt="Simbel">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>A human being with way too much imagination. There are more stories and plot twists in my
                                brain than in any series Netflix may pull out of their ass.<br>Also a jack of all
                                trades, master of none for now.</p>
                        </div>
                        <div class="card-action">
                            <a href="https://gamejolt.com/@Simbel">Gamejolt</a><a
                                class="modal-trigger hide-on-small-only" id="form-simbel"
                                href="#contact-form">Contact</a>
                        </div>
                    </div>
                </div>

                <div class="card horizontal col l6 m12">
                    <div class="card-image">
                        <img src="img/deadly-pdp.png" alt="Deadly">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>Hi there ! I'm just a random student who hates carousels !<br>Actually i don't have
                                anything else to say but it's not a problem since the content of the site is not that
                                important, is it ?
                        </div>
                        <div class="card-action">
                            <a class="modal-trigger hide-on-small-only" id="form-deadly"
                                href="#contact-form">Contact</a><a class="white-text orange-hover"
                                href="https://onlyfans.com">Onlyfans</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hide-on-med-and-up center contact-mobile">
                <h3>Want to contact one of them?</h3>
                <div class="row">
                    <div class="col s12">
                        <a id="form-simbel" class="modal-trigger waves-effect waves-light btn-small black orange-text"
                            href="#contact-form">Contact Simbel</a>
                    </div>
                    <div class="col s12">
                        <a id="form-deadly" class="modal-trigger waves-effect waves-light btn-small black orange-text"
                            href="#contact-form">Contact Deadly</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact-form" class="modal">
        <div class="modal-content">
            <h4>Contact [1]</h4>
            <p>Please fill the following form.</p>
            <div class="row">
                <form class="col s12" method="post" action="php/actions/send.php">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate" required="" aria-required="true">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label id="content" type="content" class="validate" required="" aria-required="true">
                            <label for="content">content</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" required="" aria-required="true">
                            <label for="email">Email</label>
                            <span class="helper-text" data-error="This email isn't valid!"></span>
                        </div>
                    </div>
                    <div class="row">
                        <p>Which project do you want to talk about?</p>
                        <p>
                            <label>
                                <input  class="simbelOnly" name="group1" type="radio">
                                <span>Frozen Heart</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="deadlyOnly" name="group1" type="radio">
                                <span>Shmeup</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio">
                                <span>Projet HTML+CSS</span>
                            </label>
                        </p>
                    </div>
                    <button class="btn waves-effect waves-teal btn-flat right" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    
    

    <?php require_once "php/requires/footer.php" ?>

    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/script.js"></script>
</body>

</html>