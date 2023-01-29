<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $text = $_POST['text'];

  $to = "orestwebdesign@gmail.com";
  $subject = "New Contact Form Submission";
  $headers = "From: $email\r\n";

  $message = "Name: $name\nEmail: $email\nMessage: $text";

  if (mail($to, $subject, $message, $headers)) {
    echo '<div style="background-color: #dff0d8; border: 1px solid #3c763d; color: #3c763d; padding: 10px;">Uspješno ste poslali poruku!</div>';
  } else {
    echo '<div style="background-color: #f2dede; border: 1px solid #a94442; color: #a94442; padding: 10px;">Došlo je do pogreške, pokušajte ponovo!</div>';
  }

  exit;
}
?>

In the above code:

    The mail function is used to send the email.
    If the email was sent successfully, a success message is displayed to the user.
    If the email was not sent successfully, an error message is displayed to the user.

