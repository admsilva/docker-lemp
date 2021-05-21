<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">

        <style>
            body > .container {
                padding: 60px 15px 0;
            }
        </style>

    </head>

    <body>

        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="http://localhost:8080" target="_blank">Docker Lemp</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="http://localhost:8080">Home <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>

        <main role="main" class="container">
            <h1 class="mt-5">Information</h1>
            <div class="">
                <ul>

                    <li>Webserver: 
                        <?php
                            echo $_SERVER['SERVER_SOFTWARE'];
                        ?>
                    </li>
                    <li>PHP Version: 
                        <?php
                            $version = phpversion();
                            print $version;
                        ?>
                    </li>
                    <!--<li>
                        <?php
                            $link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);

                            if (mysqli_connect_errno()) {
                                printf("MySQL connecttion failed: %s", mysqli_connect_error());
                            } else {
                                printf("MySQL Server %s", mysqli_get_server_info($link));
                            }
                            mysqli_close($link);
                        ?>
                    </li>-->
                </ul>
            </div>
        </main>

        <footer class="footer">
            <div class="container">
                <span class="text-muted"></span>
            </div>
        </footer>

    </body>

    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script>
        // IIFE - Immediately Invoked Function Expression
        (function ($, window, document) {
            $(function () {
                console.log('The DOM is ready!');
            });
        }(window.jQuery, window, document));
    </script>

</html>