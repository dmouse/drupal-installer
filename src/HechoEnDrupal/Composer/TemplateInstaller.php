<?php

namespace HechoEnDrupal\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;
use Composer\Repository\InstalledRepositoryInterface;
use Composer\Json\JsonFile;
use Composer\Repository\ArrayRepository;


use Ladybug\Dumper;

class TemplateInstaller extends LibraryInstaller {

  private $drupal_composer = [];

  public function __construct(){
    $composer_lock = new JsonFile('../drupal8.dev/composer.lock');
    foreach ($composer_lock['packages'] as $package) {
      array_push($this->drupal_composer, $package['name']);
    }
  }

  public function isInstalled(InstalledRepositoryInterface $repo, PackageInterface $package) {

    $ladybug = new Dumper();
    //$ladybug->dump($repo);
    //$ladybug->dump($package->getPrettyName());
    //$ladybug->dump($drupal_composer);

    $ladybug->dump($this->drupal_composer);



    return false;
  }

}
