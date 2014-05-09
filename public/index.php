<?php
   include('../app/controllers/DefaultController.php');

//Creates an Instance of Class Default controller
$data = new app\controllers\DefaultController();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $data->title; ?></title>
        <script src="js/min/modernizr.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>

    </head>
    <body>
    <div id="page">
    <div class="row">
        <header>
            <h1>PHP OOP</h1>
            <nav>
                <ul>
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=about">About</a></li>
                    <li><a href="index.php?page=services">Services</a></li>
                    <li><a href="index.php?page=contact">Contact</a></li>
                </ul>
            </nav>

        </header>

    </div>
    <!--Content Goes Here-->


        <section id="content" class="row">
            <?php include ('../app/views/'.$data->content.'.phtml'); ?>

        </section>




    <div class="row">
        <footer>

        </footer>
    </div>
    </div>
    </body>
</html>