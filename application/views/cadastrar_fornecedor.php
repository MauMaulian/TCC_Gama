<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('resources/css/materialize.css'); ?>">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <script src="<?php echo base_url('resources/js/jquery-3.3.1.min.js'); ?>" charset="utf-8"></script>
        
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        
        <header>
            <ul id="options" class="dropdown-content">
                <li><a href="#">Sair</a></li>
            </ul>
            <nav>
               <!-- Alterei esta classe -->
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">Logo</a>
                    <ul class="right">
                        <li><a href="" class="waves-effect waves-dark btn" style="background-color: #00E0C7">Produtos </a></li>
                        <li><a class="dropdown-trigger" data-target="options" href="#!"><i class="large material-icons">account_circle</i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="container">
            <div class="row" style="padding-top: 3rem">
                <div class="col s12 m6 l6 xl6 offset-m3 offset-l3 offset-xl3">
                    <div class="card waves-effect waves-dark">
                        <div class="card-content">
                            
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <script type="text/javascript" src="<?php echo base_url('resources/js/materialize.min.js'); ?>"></script>    
    </body>
</html>