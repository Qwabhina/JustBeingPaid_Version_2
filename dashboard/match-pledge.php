<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Match Pledges</title>
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

        body {
            background: #fafafa;
        }

        .input-field input {
            border-bottom: none !important;
            color: white;
        }

        div.progress {
            width: inherit;
            position: relative;
            margin: -32px -50px;
            color: #00695c;
            background: #fafafa;
            z-index: 900;
            display: none;
        }

        div.progress .indeterminate {
            color: #fafafa;
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
            font-size: 2.4em;
            margin-top: 1em;
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
        }

    </style>
</head>

<body>
    <header>
        
    <div class="container">
        <div class="row">
            <div class="col l6 m8 s10 hide-on-large-only">
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
        </div>
        </div>

    </header>
    <main>
        <center>
            <!-- Header Logo -->
            <img class="responsive-img hide-on-small-only" style="width: 250px;" src="/page-includes/img/header-logo.png" />
            <!-- Main Container -->
            <div class="container">
                <!-- Form Container -->
                <div class="z-depth-3 teal darken-3 row form-container">
                    <!-- Progress Bar -->
                    <div class="progress">
                        <div class="indeterminate"></div>
                    </div>
                    <!-- Login Form -->
                    <form class="col s12" method="post" name="LoginForm" id="LoginForm">
                        <div class="error red darken-2">The email you entered doesn't exist. Please try again.The email you entered doesn't exist. Please try again.The email you entered doesn't exist. Please try again.</div>
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
                            <label name="forgot" style='float: right;'>
								<a class='amber-text' href='#!'><big>Forgot Password?</big></a>
							</label>
                        </div>
                        <br />
                        <center>
                            <div class='row'>
                                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect white teal-text text-darken-3'>Login</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
            <a href="/sign-up/" class="hide-on-med-and-down">Create Account</a>
        </center>
    </main>
   
    <!-- Page Footer -->
    <footer class="page-footer teal darken-3 hide-on-small-only">
        <div class="container">
            <div class="row"></div>
        </div>
        <div class="footer-copyright">
            <div class="container center">
                &copy; 2018 | Made with <i class="material-icons"></i> by
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