<?php

namespace HechoEnDrupal\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;
use Composer\Repository\InstalledRepositoryInterface;

use Ladybug\Dumper;

class TemplateInstaller extends LibraryInstaller {

  public function isInstalled(InstalledRepositoryInterface $repo, PackageInterface $package) {

    $ladybug = new Dumper();
    $ladybug->dump($package->getName());
    return false;
  }

  public function getInstallPath(PackageInterface $package){

  }

}
