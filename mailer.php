<?php
// My modifications to mailer script from:
// http://blog.teamtreehouse.com/create-ajax-contact-form
// Added input sanitizing to prevent injection

// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $city = strip_tags(trim($_POST["city"]));
    $cont_subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Check that data was sent to the mailer.
    if (empty($name) or empty($cont_subject) or empty($message) or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Oops! Algo deu errado com sua mensagem. Revise os campos e tente novamente";
        exit;
    }

    // Set the recipient email address.
    // FIXME: Update this to your desired email address.
    $recipient = "contato@eusustentavel.com.br";

    // Set the email subject.
    $subject = "Novo contato de $name";

    // Build the email content.
    $email_content = "Nome: $name\n";
    $email_content .= "E-mail: $email\n";
    $email_content .= "Cidade: $city\n";
    $email_content .= "Assunto: $cont_subject\n";
    $email_content .= "Mensagem:$message\n";

    // Build the email headers.
    $email_headers = "De: $name <$email>";

    // Send the email.
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        echo "Obrigado! Sua mensagem foi enviada.";
    } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        echo "Oops! Algo deu errado. Por favor, tente novamente em alguns minutos";
    }
} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
