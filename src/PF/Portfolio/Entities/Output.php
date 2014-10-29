<?php

namespace PF\Portfolio\Entities;

use Twig_Extension_Debug;
use Twig_Environment;

class Output {

  function __construct() {
    if (!session_id())
      session_start();
    require_once './src/PF/Portfolio/Lib/Twig/Autoloader.php';
    \Twig_Autoloader::register();
  }

  public function render($page, array $vars) {
    $loader = new \Twig_Loader_Filesystem("./src/PF/Portfolio/html");
    $twig = new Twig_Environment($loader, array('debug' => true));
    $twig->addExtension(new Twig_Extension_Debug());
    $view = $twig->render($page, $vars);
    print($view);
  }

}
