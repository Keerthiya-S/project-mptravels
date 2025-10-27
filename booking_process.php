<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';  // adjust if needed
require 'db_connect.php';

// Admin Mail Credentials
$adminEmail = "vibushinirocky123@gmail.com";
$adminPass  = "qacq cmxp tfep wesf"; // Gmail App Password

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get referrer page (the page where the form came from)
    $redirectPage = $_SERVER['HTTP_REFERER'] ?? 'index.php';

    $name        = $_POST['name'] ?? '';
    $email       = $_POST['email'] ?? '';
    $destination = $_POST['destination'] ?? '';
    $travel_date = $_POST['travel_date'] ?? '';
    $people      = $_POST['people'] ?? '';

    // Store booking in database
    $stmt = $conn->prepare("INSERT INTO bookings (name, email, destination, travel_date, people) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $name, $email, $destination, $travel_date, $people);
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

        // 1️⃣ Mail to Admin
        $mail->setFrom($adminEmail, 'MP Travels Website');
        $mail->addAddress($adminEmail);
        $mail->isHTML(true);
        $mail->Subject = "New Booking Request from $name";
        $mail->Body = "
            <h3>New Trip Booking</h3>
            <p><b>Name:</b> $name</p>
            <p><b>Email:</b> $email</p>
            <p><b>Destination:</b> $destination</p>
            <p><b>Travel Date:</b> $travel_date</p>
            <p><b>People:</b> $people</p>
        ";
        $mail->send();

        // 2️⃣ Confirmation Mail to Client
        $mail->clearAddresses();
        $mail->addAddress($email);
        $mail->Subject = "Booking Confirmation - MP Travels";
        $mail->Body = "
            <h3>Dear $name,</h3>
            <p>Thank you for booking with <b>MP Travels</b>!</p>
            <p>Here are your trip details:</p>
            <ul>
                <li><b>Destination:</b> $destination</li>
                <li><b>Travel Date:</b> $travel_date</li>
                <li><b>No. of People:</b> $people</li>
            </ul>
            <p>Our team will contact you shortly to confirm your itinerary.</p>
            <br>
            <p>Warm regards,<br><b>MP Travels Team</b></p>
        ";
        $mail->send();

        // ✅ Redirect back to the same page where form was submitted
        echo "<script>
                alert('Your booking request has been submitted successfully!');
                window.location.href = '$redirectPage';
              </script>";

    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }

    $conn->close();
}
?>
