<?php 

session_start();  // Asegurarte de que has iniciado una sesión
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
  }


class Mail{
    public function sendmail()
  {
    header('Content-Type: application/json');

    if (!isset($_POST["csrf_token"])) {
      echo json_encode("csrf_token_not_received");
      return;
    }

    if ($_POST["csrf_token"] != $_SESSION['csrf_token']) {
      echo json_encode("error_csrf");
      return;
    }

    // Validación de campos llenos
    if (!empty($_POST["name"]) && !empty($_POST["apellido"]) && !empty($_POST["email"]) && !empty($_POST["telefono"]) && isset($_POST["vacante"])) {

      $name = $_POST["name"];
      $apellido = $_POST["apellido"];
      $email = $_POST["email"];
      $telefono = $_POST["telefono"];
      $vacante = $_POST["vacante"];

      // Validación de email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode("error_validate");
        return;
      }

      // Validación para el archivo
      if (empty($_FILES['cv']) || $_FILES['cv']['error'] == UPLOAD_ERR_NO_FILE) {
        echo json_encode("failed_file_send");
        return;
      }

      // Validación del tipo de archivo
      $cv = $_FILES["cv"];
      $finfo = new finfo(FILEINFO_MIME_TYPE);
      $mime = $finfo->file($cv["tmp_name"]);

      // Validar que el archivo sea un PDF
      if ($mime != 'application/pdf') {
        echo json_encode("error_not_pdf");
        return;
      }

      // Código para enviar el correo
      //El correo del administrador, que recibe la postulación
      $toAdmin = 'mosterwebinfo@gmail.com';
      $toUser = $email;
      $subject = 'Nueva solicitud de vacante';
      $message = "Hola Pablo,\n\n$name $apellido ha aplicado para la vacante $vacante.\nEmail: $email\nTeléfono: $telefono\n\nPor favor revisa el CV adjunto.";
       //El correo central que procesa los envíos
      $headers = "From: info@mosterweb.com\r\n";

      // Adjuntar el archivo CV
      $cvContent = file_get_contents($cv["tmp_name"]);
      $cvContent = chunk_split(base64_encode($cvContent));

      $separator = md5(time());
      $eol = "\r\n";  // end of line
      $separator = md5(time());
      //El correo central que procesa los envíos
      $headers = 'From: info@mosterweb.com' . $eol;
      $headers .= 'MIME-Version: 1.0' . $eol;
      $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
      $headers .= "Content-Transfer-Encoding: 7bit" . $eol;

      // cuerpo del mensaje de texto
      $message = "--" . $separator . $eol;
      $message .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
      $message .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
      $message .= "Hola Pablo,\n\n$name $apellido ha aplicado para la vacante $vacante.\nEmail: $email\nTeléfono: $telefono\n\nPor favor revisa el CV adjunto." . $eol;

      // adjuntando el archivo
      $fileData = file_get_contents($cv['tmp_name']);
      $fileData = chunk_split(base64_encode($fileData));

      $message .= "--" . $separator . $eol;
      $message .= "Content-Type: application/octet-stream; name=\"" . $cv['name'] . "\"" . $eol;
      $message .= "Content-Transfer-Encoding: base64" . $eol;
      $message .= "Content-Disposition: attachment" . $eol . $eol;
      $message .= $fileData . $eol;
      $message .= "--" . $separator . "--";

      if (mail($toAdmin, $subject, $message, $headers) && mail($toUser, "Confirmación de aplicación para: $vacante", "Hola $name, te escribimos de CECC. Gracias por aplicar a la vacante: $vacante. Hemos recibido tu solicitud. Pronto te daremos una respuesta.", "From: info@mosterweb.com\r\n")) {
        echo json_encode("success");
      } else {
        echo json_encode("error_mail");
      }
    } else {
      echo json_encode("error_empty_fields");
    }
  }
}

$mail = new Mail();
$mail->sendmail();