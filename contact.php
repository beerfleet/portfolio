<?php

use Doctrine\Common\ClassLoader;
use PF\Portfolio\Entities\Output;

require_once './Doctrine/Common/ClassLoader.php';

$classloader = new ClassLoader("PF", "src");
$classloader->register();

$output = new Output();
$vars = array();

$output->render('contact.html.twig', $vars);