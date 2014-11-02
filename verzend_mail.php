<?php

use Doctrine\Common\ClassLoader;
use PF\Portfolio\Entities\Output;
use PF\Portfolio\Business\MailerService;

require_once './Doctrine/Common/ClassLoader.php';

$classloader = new ClassLoader("PF", "src");
$classloader->register();

$output = new Output();
$vars = array();

if (isset($_POST["email"])) {

  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $email = trim($email, " ");
  $message = filter_input(INPUT_POST, 'bericht');

  if ($email && !empty($email) && !empty($message)) {    
    $mailer = new MailerService();
    $mailer->verzend_mail($email, $message);
    session_start();
    $_SESSION["email"] = "sent";
    //$output->render('homepage.html.twig', $vars);
    header("Location: http://janvanbiervliet.be");
    die();
  }
  else {
    $vars['fout'] = 'Verzenden mislukt. Kijk alle gegevens op juistheid na.';
    $output->render('homepage.html.twig', $vars);
  }
}
else {
  $vars['fout'] = 'Verzenden mislukt. Kijk alle gegevens op juistheid na.';
  $output->render('homepage.html.twig', $vars);
}