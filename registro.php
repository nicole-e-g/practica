<form method="post" action="#">
        <input type="number" name="numero" placeholder="Numero" required/><br>
        <input type="submit" name="submit" value="Guardar">
</form>
<?php
if (isset($_POST["submit"])) {
    $numero = $_POST["numero"];

    
}