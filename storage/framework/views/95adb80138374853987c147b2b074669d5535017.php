<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
       <title>Utazási iroda - Főoldal</title>
        <style>
            html{
                background-color: #98e1b7;
                color: #171a1d;
            }
        </style>
</head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                  <h1>Utazási iroda</h1>
                </div>

                <div class="links">
                    <a href="/travels">Utak</a>
                </div>
            </div>
        </div>s


    </body>
</html>

<?php /* C:\wamp64\www\utazasi-iroda\resources\views/welcome.blade.php */ ?>