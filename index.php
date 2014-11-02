<?php

use Doctrine\Common\ClassLoader;
use PF\Portfolio\Entities\Output;

require_once './Doctrine/Common/ClassLoader.php';

$classloader = new ClassLoader("PF", "src");
$classloader->register();

$output = new Output();
$vars = array();

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if (isset($_SESSION["email"])) {
  $vars['bericht'] = 'Mail verzonden. U krijgt zo spoedig mogelijk antwoord.';
  unset($_SESSION["email"]);
}
$output->render('homepage.html.twig', $vars);
