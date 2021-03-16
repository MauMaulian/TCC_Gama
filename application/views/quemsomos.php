<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('resources/css/materialize.css'); ?>">
        
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        
        <header>
            <nav>
               <!-- Alterei esta classe -->
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">Logo</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="waves-effect waves-dark btn" style="background-color: #00E0C7" href="<?php echo base_url('login'); ?>">Login</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="container">
            <div class="row" style="padding-top: 3rem">
                <div class="col s12 m12">
                    <div class="card darken-1">
                        <div class="card-content white-text" style="background-color: #009394">
                            <span class="card-title center"><strong>Quem Somos?</strong></span>
                            <p>
                                (TEXTO DESCRITIVO SOBRE A EMPRESA)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--<footer class="page-footer">
            <div class="footer-copyright container">
                ONIXDev - Corporation
            </div>
        </footer>-->
        <script type="text/javascript" src="<?php echo base_url('resources/js/materialize.min.js'); ?>"></script>
    </body>
</html>