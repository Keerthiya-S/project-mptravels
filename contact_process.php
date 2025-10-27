<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include Composer autoloader (instead of manually requiring PHPMailer files)
require '../vendor/autoload.php';  // adjust path if needed
require 'db_connect.php';

// Admin Mail Credentials
$adminEmail = "vibushinirocky123@gmail.com";
$adminPass  = "qacq cmxp tfep wesf"; // Gmail App Password

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Store in DB
    $stmt = $conn->prepare("INSERT INTO contact_messages (full_name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    $stmt->execute();
    $stmt->close();

    // --- SEND MAILS ---
    $mail = new PHPMailer(true);
    try {
        // SMTP setup
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $adminEmail;
        $mail->Password   = $adminPass;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // 1️⃣ Send mail to Admin
        $mail->setFrom($adminEmail, 'MP Travels Website');
        $mail->addAddress($adminEmail);
        $mail->Subject = "New Contact Message from $name";
        $mail->Body    = "
            <h3>New Contact Form Submission</h3>
            <p><b>Name:</b> $name</p>
            <p><b>Email:</b> $email</p>
            <p><b>Subject:</b> $subject</p>
            <p><b>Message:</b> $message</p>
        ";
        $mail->isHTML(true);
        $mail->send();

        // 2️⃣ Send confirmation mail to client
        $mail->clearAddresses();
        $mail->addAddress($email);
        $mail->Subject = "Thank You for Contacting MP Travels!";
        $mail->Body = "
            <h3>Dear $name,</h3>
            <p>Thank you for reaching out to <b>MP Travels</b>. We have received your message and our team will get back to you shortly.</p>
            <br>
            <p>Warm regards,<br><b>MP Travels Team</b></p>
        ";
        $mail->send();

        echo "<script>alert('Your message has been sent successfully!'); window.location.href='contact.php';</script>";

    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }

    $conn->close();
}
?>
