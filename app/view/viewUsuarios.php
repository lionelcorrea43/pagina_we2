<?php
class viewUsuarios
{


    function registroForm()
    {
        include "templates/header.php";
?>
        <h2>Registro</h2>
        <form method="POST" action="datosRegistro">
            <input type="text" name="email" placeholder="Ingrese su email..." />
            <input type="password" name="password" placeholder="Ingrese su password..." />

            <button type="submit">Crear cuenta</button>
        </form>
    <?php
        include "templates/footer.php";
    }


    function loginForm($mensaje = "")
    {
        include "templates/header.php";
    ?>
        <h2>Login</h2>

        <?php if (!empty($mensaje)) { ?>
            <p><?= $mensaje ?></p>
        <?php } ?>

        <form method="POST" action="datosLogin">
            <input type="text" name="email" placeholder="Ingrese su email..." />
            <input type="password" name="password" placeholder="Ingrese su password..." />
            <button type="submit">Login</button>
        </form>
<?php
        include "templates/footer.php";
    }
}
?>