<?php include ROOT . "/templates/layouts/head.php"; ?>

<body class="bg-primary">

    <div id="layoutAuthentication">

        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <!-- Basic login form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="fw-light my-4">Inicio de Sesion</h3>
                                </div>
                                <div class="card-body">
                                    <!-- Login form-->
    <form class="form" method="post" action="./login.php">

        <?php 
        //verifica que la variable este en la session
            if(isset($_SESSION['error'])){?>
        <div class="alert alert-primary alert-icon" role="alert">
        <div class="alert-icon-aside">
        <i data-feather="alert-triangle"></i>
    </div>
    <div class="alert-icon-content"> 
    <h6 class="alert-heading">Error</h6> 
            <?php 
                //si esta, imprime el mensaje de error
                //echo $_SESSION["nombre"];
                echo $_SESSION['error']; 
                unset($_SESSION['error']);
            ?>
        </div>
        </div>
        <?php }?>
        <div class="mb-3">
            
            <label class="small mb-1" for="usuario">Usuario</label>
            <input class="form-control" id="usuario" placeholder="ingrese usuario" type="text" name="usuario" required>
        </div>
        <div class="mb-3">
            <label class="small mb-1" for="password">Contraseña</label>
            <input class="form-control" id="password" placeholder="ingrese contraseña" type="password" name="password" required>

        </div>
        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="auth-password-basic.html">Olvidaste la contraseña?</a>
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>
        
        
    </form>
    </div>
                                <div class="card-footer text-center">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer-admin mt-auto footer-dark">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright © Your Website 2021</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            ·
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?php include ROOT . "/templates/layouts/scripts.php"; ?>
    

</body>

</html>

    
