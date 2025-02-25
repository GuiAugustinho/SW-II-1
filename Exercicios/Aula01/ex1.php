<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    echo "<h1>Olá, $nome! Bem-vinda à nossa página web!</h1>";
} else {

    echo '
    <form method="POST" action="">
        Nome: <input type="text" name="nome" value="Evellyn" required><br>
        <input type="submit" value="Enviar">
    </form>
    ';
}
?>
