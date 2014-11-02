<?php

use Doctrine\Common\ClassLoader;
use PF\Portfolio\Entities\Output;

require_once './Doctrine/Common/ClassLoader.php';

$classloader = new ClassLoader("PF", "src");
$classloader->register();

$output = new Output();
$vars = array();  

session_start();
if (isset($_POST["email"]))  {
  $vars['bericht'] = 'Mail verzonden. U krijgt zo spoedig mogelijk antwoord.';
  unset($_POST["email"]);  
}
session_destroy();
$output->render('homepage.html.twig', $vars);