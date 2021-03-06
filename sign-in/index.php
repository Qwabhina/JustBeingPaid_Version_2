<!-- ?php 
   /* include_once("/libraries/functions.php");
    if(is_logged_in()){
        header("location: /dashboard");
    }
    else{*/
? -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Just Being Paid | Sign In</title>
    <link rel="stylesheet" type="text/css" href="/page-includes/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/page-includes/css/fonts-and-labels.css">
    <style>
        body,
        div.slide-out-menu {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        .header-logo {
            margin-top: 20px;
        }

        div.progress {
            width: inherit;
            position: relative;
            margin: -32px -50px;
            color: #00695c;
            background: #c5c5c5;
            z-index: 900;
            display: none;
        }

        div.progress .indeterminate {
            color: #c5c5c5;
            background: #00695c;
        }

        .form-container {
            overflow: hidden;
            border-radius: 4px;
            display: inline-block;
            padding: 32px 48px 0px 48px;
        }

        div.error {
            position: relative;
            margin: -32px -60px 10px -60px;
            padding: 8px !important;
            max-width: 500px;
            height: auto;
            color: white;
            word-wrap: break-word;
            display: none;
        }

        .m {
            font-size: 2.8em;
            margin-top: 1em;
            margin-bottom: -1em !important;
            z-index: 9999;
        }


        @media (min-width:320px) {
            /* smartphones, iPhone, portrait 480x320 phones */
        }

        @media (min-width:481px) {
            /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */
        }

        @media (min-width:641px) {
            /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */
        }

        @media (min-width:961px) {
            /* tablet, landscape iPad, lo-res laptops ands desktops */
        }

        @media (min-width:1025px) {
            /* big landscape tablets, laptops, and desktops */
        }

        @media (min-width:1281px) {
            /* hi-res laptops and desktops */
            #login-form {
                min-width: 60%;
            }
        }

    </style>
</head>

<body class="grey lighten-1">
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col l1 offset-l2 m1 offset-m1 s2 offset-s1">
                    <!-- Slide  Out Menu For Mobile -->
                    <ul id="slide-out" class="sidenav">
                        <li>
                            <div class="user-view">
                                <div class="background">
                                    <img src="/page-includes/img/header-logo.png">
                                </div>
                                <a href="#user"><img class="circle" src="/page-includes/img/android-chrome-512x512.png"></a>
                                <a href="#name"><span class="white-text name">John Doe</span></a>
                                <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                            </div>
                        </li>
                        <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                        <li><a href="#!">Second Link</a></li>
                        <li>
                            <div class="divider"></div>
                        </li>
                        <li><a class="subheader">Subheader</a></li>
                        <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>

                    </ul>
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons m teal-text text-darken-3">menu</i></a>

                </div>
                <div class="col l6 m8 s6">

                    <!-- Header Logo -->
                    <center>
                        <img class=" responsive-img header-logo" src="/page-includes/img/header-logo.png" width="180px" />
                    </center>
                </div>
            </div>
        </div>
    </header>
    <main>
        <center>
            <div class="section"></div>
            <!-- Main Container -->
            <div class="container">
                <!-- Form Container -->
                <div class="z-depth-4 white row form-container">
                    <!-- Progress Bar -->
                    <div class="progress">
                        <div class="indeterminate"></div>
                    </div>
                    <!-- Login Form -->
                    <form class="col s12" method="post" name="login-form" id="login-form">
                        <div class="error red darken-2"></div>
                        <!-- Email Field -->
                        <div class='row'>
                            <div class='input-field col s12'>
                                <i class="material-icons prefix">account_circle</i>
                                <input class='validate' type='email' name='email' id='email' required/>
                                <label for='email'>Enter your email</label>
                            </div>
                        </div>
                        <!-- Password Field -->
                        <div class='row'>
                            <div class='input-field col s12'>
                                <i class="material-icons prefix">lock</i>
                                <input class='validate' type='password' name='password' id='password' required/>
                                <label for='password'>Enter your password</label>
                            </div>
                        </div>
                        <br />
                        <center>
                            <div class='row'>
                                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect teal white-text darken-2'>Login</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </center>
    </main>

    <!-- Page Footer -->
    <footer class="page-footer teal darken-3 hide-on-small-only">
        <div class="container">
            <div class="row"></div>
        </div>
        <div class="footer-copyright">
            <div class="container center">
                &copy; 2018 | Made with <i class="tiny material-icons">favorite</i> by
                <a class="grey-text text-lighten-4" href="#!">Webbing Creatives</a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script type="text/javascript" src="/page-includes/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/page-includes/js/materialize.min.js"></script>
    <script type="text/javascript">
        M.AutoInit();

    </script>
</body>

</html>

<!-- ?php // } ? -->
