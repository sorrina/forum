<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Forum</title>
        <!-- Materialize -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav>
           <div class="nav-wrapper container">
             <a href="?page=home" class="brand-logo">Forum</a>
             <ul id="nav-mobile" class="right">
                 <?php if(is_eingeloggt()): ?>
                    <li><a href="?logout">Logout</a></li>
                 <?php else: ?>
                     <li><a href="?page=login">Login</a></li>
                <?php endif; ?>
             </ul>
           </div>
         </nav>

        <div class="container">
            <div id="main-content">
                <?= @$content; ?>
            </div>
        </div>

        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Forum</h5>
                <p class="grey-text text-lighten-4">Kurze Forenbeschreibung oder Kontaktdaten.</p>
                <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="?page=home">Home</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © <?= date("Y") ?> Copyright Text
            </div>
          </div>
        </footer>
    </body>
</html>
