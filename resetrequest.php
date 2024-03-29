<?php

if (isset($_POST["reset-request-submit"])) {

$selector = bin2hex(random_bytes(8));
$token = random_bytes(32);

$url = "www.kellerbee.com/create-new-password.php?selector=" . $selector . "&validator=" . bin2hey($token);

$expires = date("U") + 1800;

require 'database.php';

$userEmail = $_POST["email"];

$sql = "DELETE FROM pwdReset WHERE pwdResetEmail = ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
   echo "There was an error";
   exit();
 }  else {
    mysqli_stmt_bind_param($stmt, "s", $userEmail);
    mysqli_stmt_execute($stmt);
 }

 $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?,?,?,?);";
 $stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
   echo "There was an error";
   exit();
 }  else {
    $hashedToken = password_hash($token, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector. $hashedToken, $expires);
    mysqli_stmt_execute($stmt);
 }

   mysqli_stmt_close($stmt);
   mysqli_close();


 $to = $userEmail;
 $subject = 'Reset Your Password!';

 $message = '<p>We received a password reset request. Link to your password is in your email</p>';
 $message .= '<p>Here is your password Reset link: </br>';
 $message .= '<a href = "' . $url . '">' . $url . '</a></p>';

 $headers = "From: Kellerbee <kellerbee@gmail.com>\r\n";
 $headers .= "Reply-To: kellerbee@gmail.com\r\n";
 $headers .= "Content-type: text/html\r\n";

 mail($to, $subject, $message, $headers);

 header("Location: resetpassword.php?reset=success");

 } else {
    header("Location: index.php");
 }




