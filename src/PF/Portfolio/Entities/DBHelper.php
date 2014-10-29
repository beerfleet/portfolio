<?php

namespace PF\Bakkerij\Entities;

use PDO;

class DBHelper {

  static public function connect() {
    $creds = parse_ini_file("c:\\DB\\bakkerij.ini");
    $dbh = new PDO($creds["connstr"], $creds["user"], $creds["password"]);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
  }
}