<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>RetroArch</title>
        <meta name="description" content="RetroArch is a frontend for emulators, game engines and media players. It enables you to run classic games on a wide range of computers and consoles through its slick graphical interface. Settings are also unified so configuration is done once and for all.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <script src="jquery-3.2.0.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">

        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <a href="index.php"><img id="logo" src="images/logo.png"></a>

            <nav class="navbar-static-top navbar-collapse navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li <?php if ($_GET[page] != 'platforms' && $_GET[page] != 'donate') { echo 'class="active"'; } ?>><a href="index.php">About</a></li>
                        <li><a href="https://www.libretro.com/index.php/category/blog/">News</a></li>
                        <li <?php if ($_GET[page] == 'platforms') { echo 'class="active"'; } ?>><a href="https://www.retroarch.com/index.php?page=platforms">Download</a></li>
                        <li><a href="https://forums.libretro.com/">Forums</a></li>
                        <li><a href="https://twitter.com/libretro">Twitter</a></li>
                        <li><a href="https://www.youtube.com/user/Libretro/">Youtube</a></li>
                        <li><a href="https://docs.libretro.com/">Docs</a></li>
                        <li><a href="https://web.libretro.com/">Web Player</a></li>
                        <li><a href="https://forums.libretro.com/c/bounty-discussion">Bounties</a></li>
                        <li><a href="https://discord.gg/mrGzVrT">Discord</a></li>
                        <li <?php if ($_GET[page] == 'donate') { echo 'class="active"'; } ?>><a href="index.php?page=donate">Donate</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>


        <?php isset($_GET[page]) ? include($_GET[page] . '.php') : include('about.php'); ?>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h4>Related Links</h4>
                        <ul>
                            <li><a href="https://www.libretro.com/">Libretro Blog</a></li>
                            <li><a href="http://www.lakka.tv/">Lakka OS</a></li>
                            <li><a href="https://buildbot.libretro.com/web">Web Player</a></li>
                            <li><a href="https://hackaday.io/project/20874-gamegirl-part-ii-back-in-the-game">Gamegirl</a></li>
                            <li><a href="https://www.libretro.com/index.php/powered-by-libretro/">Powered by Libretro</a></li>
                            <li><a href="https://www.libretro.com/index.php/mission/">Mission</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h4>Developer Links</h4>
                        <ul>
                            <li><a href="https://buildbot.libretro.com/docs/">Documentation</a></li>
                            <li><a href="https://wiki.libretro.com/index.php?title=Main_Page">Wiki</a></li>
                            <li><a href="https://www.libretro.com/index.php/develop/">Develop</a></li>
                            <li><a href="https://www.libretro.com/index.php/api/">Libretro API</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 social">
                        <h4>Follow us</h4>
                        <a href="https://github.com/libretro/RetroArch"><i class="fa fa-github-alt"></i></a>
                        <a href="https://twitter.com/libretro"><i class="fa fa-twitter"></i></a>
                        <!--<a href="https://www.facebook.com/libretro"><i class="fa fa-facebook"></i></a>-->
                        <!--<a href="https://plus.google.com/+LakkaTv"><i class="fa fa-google-plus"></i></a>-->
                        <a href="https://www.youtube.com/user/Libretro"><i class="fa fa-youtube"></i></a>
                        <a href="http://webchat.freenode.net/?channels=%23retroarch&amp;uio=d4"><i class="fa fa-comments"></i></a>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>
