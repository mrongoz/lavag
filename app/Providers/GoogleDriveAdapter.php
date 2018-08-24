<?php

namespace App\Providers;

use Hypweb\Flysystem\GoogleDrive\GoogleDriveAdapter as PackageGoogleDriveAdapter;

class GoogleDriveAdapter extends PackageGoogleDriveAdapter
{
    public function getService()
    {
        return $this->service;
    }
}
