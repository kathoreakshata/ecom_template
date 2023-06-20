<?php
if (isset($_POST['submit'])) {
    $to = "digital.cmq@gmail.com";
    $subject = $_POST['subject'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $e_message = $_POST['message'];

    $message = "
<html>
<head>
<title>Enquiry</title>
</head>
<body>
<p>Someone has drop a enquiry mail for Brix Biopharma!</p>
<table>
<tr>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Message</th>
</tr>
<tr>
<td>$fname</td>
<td>$phone</td>
<td>$email</td>
<td>$e_message</td>
</tr>
</table>
</body>
</html>
";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
// $headers .= 'From: <webmaster@example.com>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

    $result = mail($to, $subject, $message, $headers);

    if ($result == true) {
        echo "<script>alert('Message sent successfully...')</script>";
        header("Location: contact.php");
    } else {
        echo "<script>alert('Sorry, unable to send mail...')</script>";
        header("Location: contact.php");
    }
}
?>