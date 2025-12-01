<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['servicios'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $servicios = $_POST['servicios'];

    // Crear la lista como líneas con viñeta
    $lista = "";
    foreach ($servicios as $item) {
        $lista .= "• $item\n";
    }

    // Armar el mensaje
    $mensaje = "Hola, te saluda *$nombre* mi correo es : $email y deseo información sobre los siguientes servicios:\n$lista.";

    // Codificar para URL
    $mensajeCodificado = urlencode($mensaje);

    // Número de WhatsApp (formato internacional sin + ni espacios)
    $numero = "593984096237";

    // Redirigir
    header("Location: https://wa.me/$numero?text=$mensajeCodificado");
    exit();
} else {
    echo "Por favor selecciona al menos un servicio.";
}
