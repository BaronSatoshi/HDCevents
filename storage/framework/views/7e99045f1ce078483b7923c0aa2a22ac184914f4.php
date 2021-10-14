<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
        <!-- CSS da Aplicação -->
       <link rel="stylesheet" href="/css/style.css">
       <script src="/js/script.js"></script>
       <title><?php echo $__env->yieldContent('title'); ?></title>
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/hdcevents_logo.svg" style="width: 50px;" >
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a href="/" class="nav-link">Eventos</a>  
                    </li>
                    <li class="nav-item">
                      <a href="/events/create" class="nav-link">Criar Eventos</a>  
                    </li>
                    <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item">
                      <a href="/dashboard" class="nav-link">Meus Eventos</a>  
                    </li>
                    <li class="nav-item">
                    <form action="/logout" method="POST">
                      <?php echo csrf_field(); ?>
                      <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                    </form>  
                    </li>
                    <?php endif; ?>
                   <?php if(auth()->guard()->guest()): ?>
                   <li class="nav-item">
                      <a href="/login" class="nav-link">Entrar</a>  
                    </li>
                    <li class="nav-item">
                      <a href="/register" class="nav-link">Cadastrar</a>  
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
          <div class="row">
            <?php if(session('msg')): ?>
              <p class="msg"><?php echo e(session('msg')); ?></p>
            <?php endif; ?>
            <?php echo $__env->yieldContent('content'); ?>
          </div>
        </div>
    </main>
    <footer>
        <p>HDCevents &copy; 2021</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
<?php /**PATH C:\Laravel\hdcevents\resources\views/layouts/main.blade.php ENDPATH**/ ?>