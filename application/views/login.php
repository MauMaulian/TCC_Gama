<!DOCTYPE html>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('resources/css/materialize.css'); ?>"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper indigo darken-3">
                    <a href="#" class="brand-logo">Logo</a>
                    <ul class="right hide">
                        <li><a class="waves-effect waves-dark btn" href="">Login</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="container">
            <div class="row" style="padding-top: 5rem">
                <form class="col s12 m12">
                    <div class="row">
                        <div class="col s12 m6 offset-m3 l6 offset-l3 xl6 offset-xl3">
                            <div class="card">
                                <div class="card-content white-text">
                                    <div style="margin-top: 15px;">    
                                        <span class="card-title center"><i class="large material-icons material-icons-pr">account_circle</i></span>
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="row">
                                                    <div class="col s1" style="padding-top: 25px;">
                                                        <i class="small material-icons">email</i>
                                                    </div>
                                                    <div class="input-field col s11">
                                                        <input type="text" id="email">
                                                        <label for="email">Email</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                           <div class="col s1" style="padding-top: 25px;">
                                                        <i class="small material-icons">vpn_key</i>
                                                    </div>
                                            <div class="col s11">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input type="text" id="passwd">
                                                        <label for="passwd">Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row center">
                                                <a class="waves-effect indigo darken-3 btn-large">Button</a>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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