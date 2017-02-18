<?php
global $certbot_path;
$certbot_path = "/usr/bin/certbot-auto";

function renewCertBot(){
  global $certbot_path;
  $args = array(
    "renew",
    "-n"
  );
  echo "--------" . "\n";
  echo "RENEWING CERTS!" . "\n";
  echo ctrl_system::systemCommand($certbot_path, $args) . "\n";
  echo "--------" . "\n";

  return true;
}

renewCertBot();
