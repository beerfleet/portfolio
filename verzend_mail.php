<?php

use Doctrine\Common\ClassLoader;
use PF\Portfolio\Entities\Output;
use PF\Portfolio\Business\MailerService;

require_once './Doctrine/Common/ClassLoader.php';

$classloader = new ClassLoader("PF", "src");
$classloader->register();

$output = new Output();
$vars = array();

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$email = trim($email, " ");
$message = filter_input(INPUT_POST, 'boodschap');

if ($email && !empty($email) && !empty($message)) {  
  $vars['bericht'] = 'Mail verzonden. U krijgt zo spoedig mogelijk antwoord.';
  $mailer = new MailerService();
  $mailer->verzend_mail($email, $message);
  $output->render('contact.html.twig', $vars);
} else {
  $vars['fout'] = 'Verzenden mislukt. Kijk alle gegevens op juistheid na.';   
  $output->render('contact.html.twig', $vars);
}