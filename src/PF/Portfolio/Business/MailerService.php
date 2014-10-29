<?php

namespace PF\Portfolio\Business;

/**
 * Mailer helper service class
 *
 * @author Kukulkan
 */
class MailerService {
  public function verzend_mail($from, $message) {    
    $to = "admin@janvanbiervliet.be";
    $subject = "Contact verzoek";
    $headers = "From: $from" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);
  }
}
