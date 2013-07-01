# WikiWonders Filament Skin

A MediaWiki skin that focuses on putting your content.

It uses the Yahoo's Pure (http://purecss.io) CSS framework.

## Installation

Clone this repository to your `skins` directory and create a symlink to the main skin file.

    ln -s filament/filament.php filament.php

Then add the following line to your `LocalSettings.php` file.

    require_once($IP.'/skins/filament/filament.php');

Now find the `$wgDefaultSkin` variable and set it to `filament`.

## License

Copyright 2013 WikiWonders

Released under the GPL
