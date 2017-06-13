<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site csusb, environment dev
$aliases['dev'] = array(
  'root' => '/var/www/html/csusb.dev/docroot',
  'ac-site' => 'csusb',
  'ac-env' => 'dev',
  'ac-realm' => 'prod',
  'uri' => 'csusbdev.prod.acquia-sites.com',
  'remote-host' => 'csusbdev.ssh.prod.acquia-sites.com',
  'remote-user' => 'csusb.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['dev.livedev'] = array(
  'parent' => '@csusb.dev',
  'root' => '/mnt/gfs/csusb.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site csusb, environment prod
$aliases['prod'] = array(
  'root' => '/var/www/html/csusb.prod/docroot',
  'ac-site' => 'csusb',
  'ac-env' => 'prod',
  'ac-realm' => 'prod',
  'uri' => 'csusb.prod.acquia-sites.com',
  'remote-host' => 'csusb.ssh.prod.acquia-sites.com',
  'remote-user' => 'csusb.prod',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['prod.livedev'] = array(
  'parent' => '@csusb.prod',
  'root' => '/mnt/gfs/csusb.prod/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site csusb, environment ra
$aliases['ra'] = array(
  'root' => '/var/www/html/csusb.ra/docroot',
  'ac-site' => 'csusb',
  'ac-env' => 'ra',
  'ac-realm' => 'prod',
  'uri' => 'csusbra.prod.acquia-sites.com',
  'remote-host' => 'csusbra.ssh.prod.acquia-sites.com',
  'remote-user' => 'csusb.ra',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['ra.livedev'] = array(
  'parent' => '@csusb.ra',
  'root' => '/mnt/gfs/csusb.ra/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site csusb, environment test
$aliases['test'] = array(
  'root' => '/var/www/html/csusb.test/docroot',
  'ac-site' => 'csusb',
  'ac-env' => 'test',
  'ac-realm' => 'prod',
  'uri' => 'csusbstg.prod.acquia-sites.com',
  'remote-host' => 'csusbstg.ssh.prod.acquia-sites.com',
  'remote-user' => 'csusb.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test.livedev'] = array(
  'parent' => '@csusb.test',
  'root' => '/mnt/gfs/csusb.test/livedev/docroot',
);
