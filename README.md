# WikiWonders Filament Skin

A MediaWiki skin that focuses on putting your content.

It uses the Yahoo's Pure (http://purecss.io) CSS framework.

## Installation

Clone this repository to your `skins` directory and create a symlink to the main skin file.

    ln -s Filament/filament.php Filament.php

Then add the following line to your `LocalSettings.php` file.

    require_once($IP.'/skins/Filament/filament.php');

Now find the `$wgDefaultSkin` variable and set it to `Filament`.

## License

Copyright 2013 WikiWonders

Released under the GPL
