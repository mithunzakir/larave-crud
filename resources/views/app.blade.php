<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script src='js/bootstrap.js'></script>
    </head>
    <body>

        <div class="container">
            <div class="row text-success">
                <?php echo Session::get('success_msg'); ?>
            </div>
            @yield('content')
        </div>


    </body>
</html>