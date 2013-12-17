<?php

namespace HechoEnDrupal\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;
use Composer\Repository\InstalledRepositoryInterface;
use Composer\Json\JsonFile;


use Ladybug\Dumper;

class TemplateInstaller extends LibraryInstaller {

  public function isInstalled(InstalledRepositoryInterface $repo, PackageInterface $package) {

    $drupal_composer = new JsonFile('../drupal8.dev/composer.lock');

    $ladybug = new Dumper();
    //$ladybug->dump($repo);
    //$ladybug->dump($package->getPrettyName());
    //$ladybug->dump($drupal_composer);

    $ladybug->dump($drupal_composer->read());



    return false;
  }

}
