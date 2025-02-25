<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $media = ($nota1 + $nota2 + $nota3) / 3;

        echo "<h2>A média das notas é: " . number_format($media, 2) . "</h2>";
    } else {
        echo "<h2>Por favor, insira todas as notas.</h2>";
    }
} else {
    
    echo '
    <form method="POST" action="">
        Nota 1: <input type="number" name="nota1" required><br>
        Nota 2: <input type="number" name="nota2" required><br>
        Nota 3: <input type="number" name="nota3" required><br>
        <input type="submit" value="Calcular Média">
    </form>
    ';
}
?>

