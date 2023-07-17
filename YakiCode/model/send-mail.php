<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los datos del formulario
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $comment = $_POST["comment"];

  // Configurar los detalles del correo electrónico
  $to = "21307019@utcgg.edu.mx"; // Cambia esta dirección por la que deseas recibir el correo
  $from = $email;
  $headers = "From: $from";
  $message = "Nombre: $name\nTeléfono: $phone\nCorreo: $email\nAsunto: $subject\nComentarios: $comment";

  // Enviar el correo electrónico
  if (mail($to, $subject, $message, $headers)) {
    // El correo se envió exitosamente
    echo "¡Gracias por tu mensaje! Pronto nos pondremos en contacto contigo.";
  } else {
    // Hubo un error al enviar el correo
    echo "Lo sentimos, ocurrió un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
  }
} else {
  // Si no se ha enviado el formulario, redireccionar o mostrar un mensaje de error
  echo "Ocurrió un error. Por favor, intenta enviar el formulario nuevamente.";
}
?>
