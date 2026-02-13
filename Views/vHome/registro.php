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
                                                    Crea una cuenta para iniciar
                                                </p>
                                            </div>
                                            <div class="cover-image">
                                                <img src="../assets/images/signup-image.svg" alt="" />
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

                                    <div class="signup-wrapper">
                                        <div class="form-wrapper">
                                            <h3 class="mb-15">Crear Cuenta</h3>

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
                                                            <label>Nombre</label>
                                                            <input type="text" placeholder="Nombre"
                                                                id="Nombre" name="Nombre" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="input-style-1">
                                                            <label>Contraseña</label>
                                                            <input type="password" placeholder="Contraseña"
                                                                id="Contrasenna" name="Contrasenna" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="button-group d-flex justify-content-center flex-wrap">
                                                            <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center"
                                                                id="btnRegistrar" name="btnRegistrar">
                                                                Procesar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="singup-option pt-40">
                                                <p class="text-sm text-medium text-dark text-center">
                                                    Ya tiene una cuenta? <a href="login.php">Inicia Sesión</a>
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