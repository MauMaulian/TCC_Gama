<!DOCTYPE html>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('resources/css/materialize.css'); ?>"  media="screen,projection"/>

        <script src="<?php echo base_url('resources/js/jquery-3.3.1.min.js');?>"></script>
        
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
                                    <span class="card-title center"><h2 class="indigo-text text-darken-3">Cadastrar Usuário</h2></span>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" id="nome">
                                                    <label for="nome">Nome</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12" style="margin-bottom: 15px;">
                                            <label>Setor</label>
                                            <select>
                                                <option value="" disabled selected>Choose your option</option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" id="email">
                                                    <label for="email">Email</label>
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
                </form>
            </div>
        </main>
        <!--<footer class="page-footer">
            <div class="footer-copyright container">
                ONIXDev - Corporation
            </div>
        </footer>-->
        <script type="text/javascript" src="<?php echo base_url('resources/js/materialize.min.js'); ?>"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('select').formSelect();
            });
        </script>
    </body>
</html>