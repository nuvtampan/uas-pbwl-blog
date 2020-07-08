<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Styles -->
    <style>
    html, body {
            background-color: gainsboro;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
    }
    table {
        margin:10px;
        border-collapse: collapse;
        width: 100%;
        }
    table th {
        text-align: center;
        width: 300px;
        padding: 10px;
        background-color: dimgray;
        color: #ffffff;
        border: 2px solid gainsboro;
        border-radius: 10px;
    }
    table td {
        text-align: left;
        padding:10px;
        object-position: center;
        left: 20px;
        background-color: white;
        border: 2px solid gainsboro;
        border-radius: 10px;
    }
    .cen{
        text-align: center;
    }
    #tbh {
        padding: 2px 10px 3px 10px;
        background-color: white;
        border: 2px solid gray;
        border-radius: 50px;
        font-size: 20px;
        font-weight: bolder;
        text-decoration: none;
        color: black;
        margin-top: 5px;
        margin-left: 10px;
    }
    #btn {
        padding: 2px 10px 3px 10px;
        background-color: white;
        border: 2px solid gray;
        border-radius: 50px;
        font-size: 14px;
        font-weight: bolder;
        text-decoration: none;
        color: black;
        margin-top: 5px;
        margin-left: 10px;
    }
    #tbh:hover,#btn:hover {
        background-color: gray;
    }
    #app{
        border-radius: 50px;
    }

    }




    </style>
    </head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                        <a class="nav-link" href="<?php echo e(url('/category')); ?>">Category</a>
                        <a class="nav-link" href="<?php echo e(url('/post')); ?>">Post</a>
                        <a class="nav-link" href="<?php echo e(url('/photo')); ?>">Photos</a>
                        <a class="nav-link" href="<?php echo e(url('/album')); ?>">Album</a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="nav-item" aria-labelledby="navbarDropdown">
                                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                    
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\webweban\resources\views/layouts/app.blade.php ENDPATH**/ ?>