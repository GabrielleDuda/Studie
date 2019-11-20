<!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content=".text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">

        <!-- Template Duda -->
        <link href="default.css" rel="stylesheet" type=".text/css" media="all" />
        <link href="fonts.css" rel="stylesheet" type=".text/css" media="all" />


        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/stylish-portfolio.min.css" rel="stylesheet">

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/stylish-portfolio.min.js"></script>
        
    </head>

    <body id="page-top" >
        <br></br>
        <br></br>
        <div class="container text-center my-auto">
            <h1 class="mb-1">STUDIE</h1>
                </div>
            <div class="row no-gutters">
            </div>


            </div>
        </div>
        <div id="header-featured">
            <div id="banner" class="container">
                <p>
                    <b><h1>LOGIN</h1></b>
                </p>
            </div>
        </div>
        
        <div id="wel">
        <?php
            session_start();
            if (isset($_SESSION['loginErro'])){
                echo ("<h4>".$_SESSION['loginErro']."</h4>");
            }
        ?>
            <div class="container">
                <form action="valida.php" method="POST">
                    USERNAME:
                    <br>                    
                    <input type="text" id="username" name="username" placeholder="@seuloggin">
                    <br><br> SENHA:
                    <br>
                    <input type="password" id="senha" name="senha" placeholder="****">
                    <br><br>
                    <input type="submit" value="ENTRAR" class="button"  enable>
                </form>


            </div>
        </div>



        <!-- Footer -->
        <footer class="footer text-center">
            <div class="container">
                <p class="text-muted small mb-0">Copyright &copy; Your Website 2019</p>
                <p class="text-muted large mb-0"> POR EDUARDA SIMÕES E GABRIELLE DUDA</p>
            </div>
        </footer>


        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript -->
        <script src=".vendor/jquery/jquery.min.js"></script>
        <script src=".vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src=".js/stylish-portfolio.min.js"></script>

   </body>

</html>