<?php
require_once "app/view/View.php";
class viewUsuarios extends View
{

    function showFormLogin($err = null)
    {
        include "templates/formLogin.phtml";
    }

    function registroForm()
    {
<<<<<<< HEAD
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
=======
      include "templates/formRegistro.phtml" ;
>>>>>>> 4538061810c121beb4a088f1c8d70b14fcdcdc4e
    }
}
