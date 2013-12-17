<?php

namespace HechoEnDrupal\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;
use Composer\Repository\InstalledRepositoryInterface;

class TemplateInstaller extends LibraryInstaller {

  public function isInstalled(InstalledRepositoryInterface $repo, PackageInterface $package) {
    print_r($package->getName());
    //print_r($repo);
  }

  public function getInstallPath(PackageInterface $package){

  }

}
