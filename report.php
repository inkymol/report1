<?php
  $to = "your_email@example.com"; // Replace with your actual email
  $subject = "New Daily Work Report";

  $date = htmlspecialchars($_POST['date']);
  $nature = htmlspecialchars($_POST['nature']);
  $person = htmlspecialchars($_POST['person']);
  $update = htmlspecialchars($_POST['update']);
  $pending = htmlspecialchars($_POST['pending']);
  $status = htmlspecialchars($_POST['status']);

  $body = "Date of Allocation: $date\n"
        . "Nature of Work: $nature\n"
        . "Person in Charge: $person\n"
        . "Work Update / Stage: $update\n"
        . "What is Pending: $pending\n"
        . "Status: $status";

  $headers = "From: no-reply@yourdomain.com";

  if (mail($to, $subject, $body, $headers)) {
    echo "Report sent successfully!";
  } else {
    echo "Failed to send report. Please try again.";
  }
?>
