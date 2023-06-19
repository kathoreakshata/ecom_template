<?php
// if (isset($_POST['submit'])) {
//     $to = "digital.cmq@gmail.com";
//     $subject = $_POST['subject'];
//     $fname = $_POST['fname'];
//     $lname = $_POST['lname'];
//     $phone = $_POST['phone'];
//     $city = $_POST['city'];
//     $email = $_POST['email'];
//     $e_message = $_POST['message'];

//     $message = "
// <html>
// <head>
// <title>Enquiry</title>
// </head>
// <body>
// <p>Someone has drop a enquiry mail for Brix Biopharma!</p>
// <table>
// <tr>
// <th>Name</th>
// <th>Phone</th>
// <th>Email</th>
// <th>Message</th>
// </tr>
// <tr>
// <td>$fname</td>
// <td>$phone</td>
// <td>$email</td>
// <td>$e_message</td>
// </tr>
// </table>
// </body>
// </html>
// ";

//     // Always set content-type when sending HTML email
//     $headers = "MIME-Version: 1.0" . "\r\n";
//     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

//     // More headers
// // $headers .= 'From: <webmaster@example.com>' . "\r\n";
// // $headers .= 'Cc: myboss@example.com' . "\r\n";

//     $result = mail($to, $subject, $message, $headers);

//     if ($result == true) {
//         echo "<script>alert('Message sent successfully...')</script>";
//         header("Location: contact.php");
//     } else {
//         echo "<script>alert('Sorry, unable to send mail...')</script>";
//         header("Location: contact.php");
//     }
// }
?>


<?php

function sendmail($to)
{
$from_name = $_POST['fname'];
$from_email = $_POST['email'];
$phone = $_POST['phone'];
$subject = "New Enquiry from ";
$message = $_POST['message'];

//$to = "akshay.bytes@gmail.com";

$message = "
<!doctype html>
<html>
  <head>
    <meta name='viewport' content='width=device-width'>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <title>Simple Transactional Email</title>
    <style>
    /* -------------------------------------
        INLINED WITH htmlemail.io/inline
    ------------------------------------- */
    /* -------------------------------------
        RESPONSIVE AND MOBILE FRIENDLY STYLES
    ------------------------------------- */
    @media only screen and (max-width: 620px) {
      table[class=body] h1 {
        font-size: 28px !important;
        margin-bottom: 10px !important;
      }
      table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
        font-size: 16px !important;
      }
      table[class=body] .wrapper,
            table[class=body] .article {
        padding: 10px !important;
      }
      table[class=body] .content {
        padding: 0 !important;
      }
      table[class=body] .container {
        padding: 0 !important;
        width: 100% !important;
      }
      table[class=body] .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
      }
      table[class=body] .btn table {
        width: 100% !important;
      }
      table[class=body] .btn a {
        width: 100% !important;
      }
      table[class=body] .img-responsive {
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
      }
    }

    /* -------------------------------------
        PRESERVE THESE STYLES IN THE HEAD
    ------------------------------------- */
    @media all {
      .ExternalClass {
        width: 100%;
      }
      .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
        line-height: 100%;
      }
      .apple-link a {
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }
      #MessageViewBody a {
        color: inherit;
        text-decoration: none;
        font-size: inherit;
        font-family: inherit;
        font-weight: inherit;
        line-height: inherit;
      }
      .btn-primary table td:hover {
        background-color: #34495e !important;
      }
      .btn-primary a:hover {
        background-color: #34495e !important;
        border-color: #34495e !important;
      }
    }
    </style>
  </head>
  <body class='' style='background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;'>
    <span class='preheader' style='color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;'>This is preheader text. Some clients will show this text as a preview.</span>
    <table border='0' cellpadding='0' cellspacing='0' class='body' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;'>
      <tr>
        <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'>&nbsp;</td>
        <td class='container' style='font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;'>
          <div class='content' style='box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;'>

            <!-- START CENTERED WHITE CONTAINER -->
            <table class='main' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;'>

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class='wrapper' style='font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;'>
                  <table border='0' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;'>
                    <tr>
                      <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'>
                        <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>Hi there,</p>
                        <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>Someone has filled an enquiry form on Serenetech Healthcare's Website.</p>
                        <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>Name: ". $from_name ."</p>
                        <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>Email: ". $from_email ."</p>
                        <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>Phone: ". $phone ."</p>
                        <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>Messages: ". $message ."</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>

            <!-- START FOOTER -->
            <div class='footer' style='clear: both; Margin-top: 10px; text-align: center; width: 100%;'>
              <table border='0' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;'>
                <tr>
                  <td class='content-block' style='font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;'>
                    <span class='apple-link' style='color: #999999; font-size: 12px; text-align: center;'>Serenetech Healthcare (OPC) Pvt. Ltd.</span>
                  </td>
                </tr>
                <tr>
                  <td class='content-block powered-by' style='font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;'>
                    Developed by <a href='http://creativemarque.com' style='color: #999999; font-size: 12px; text-align: center; text-decoration: none;'>VCOGS DIGITAL MEDIA</a>.
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>


";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
//$headers .= 'From: <akshay.bytes@gmail.com>' . "\r\n";
//$headers .= 'Cc: akshay.bytes@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

}

// sendmail("vcogsdigitalmedia@gmail.com");
// sendmail("akshay.bytes@gmail.com");
sendmail("kathore.akshata123@gmail.com");
// sendmail("serenetechnologies23@gmail.com");


?>