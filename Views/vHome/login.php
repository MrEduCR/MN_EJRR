<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/MN_EJRR/Views/layoutExterno.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/MN_EJRR/Controllers/HomeController.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php
MostrarCSS();
?>

<body>

    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <div class="overlay"></div>
    <main class="main-wrapper main-wapper-login">

        <?php
        MostrarHeader();
        ?>

        <section class="section">
            <div class="container-fluid">
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                        <div class="col-md-12">

                            <div class="row g-0 auth-row">
                                <div class="col-lg-6">
                                    <div class="auth-cover-wrapper bg-primary-100">
                                        <div class="auth-cover">
                                            <div class="title text-center">
                                                <h1 class="text-primary mb-10">Bienvenid@</h1>
                                                <p class="text-medium">
                                                    Inicia sesión para continuar
                                                </p>
                                            </div>
                                            <div class="cover-image">
                                                <img src="../assets/images/signin-image.svg" alt="" />
                                            </div>
                                            <div class="shape-image">
                                                <img src="../assets/images/shape.svg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <?php
                                        if (isset($_POST["Mensaje"])) {
                                            echo $_POST["Mensaje"];
                                        }
                                    ?>

                                    <div class="signin-wrapper">
                                        <div class="form-wrapper">
                                            <h3 class="mb-15">Iniciar Sesión</h3>
                                         
                                            <form action="" method="POST">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-style-1">
                                                            <label>Identificación</label>
                                                            <input type="text" placeholder="Identificación"
                                                            id="Identificacion" name="Identificacion" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="input-style-1">
                                                            <label>Contraseña</label>
                                                            <input type="password" placeholder="Contraseña"
                                                            id="Contrasenna" name="Contrasenna" />
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-xxl-12 col-lg-12 col-md-12">
                                                        <div class="text-start text-md-end text-lg-start text-xxl-end mb-30">
                                                            <a href="recuperarAcceso.php" class="hover-underline">
                                                                Olvidó su contraseña?
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="button-group d-flex justify-content-center flex-wrap">
                                                            <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center"
                                                            id="btnIniciarSesion" name="btnIniciarSesion">
                                                                Procesar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="singin-option pt-40">                                         
                                                <p class="text-sm text-medium text-dark text-center">
                                                    No tiene una cuenta aún?
                                                    <a href="registro.php">Registrarse</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        MostrarFooter()
        ?>

    </main>

    <?php
    MostrarJS();
    ?>
</body>

</html>