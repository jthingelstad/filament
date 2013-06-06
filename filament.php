<?php

/**
 * WikiWonders Filament Skin
 *
 * @file
 * @ingroup Skins
 * @author WikiWonders <skins@wikiwonders.net>
 * @license 2-clause BSD
 */

if( ! defined( 'MEDIAWIKI' ))
{
	die("Wiki Wonders What You're Doing");
}

$wgExtensionCredits['skin'][] = array(
    'path'			 => __FILE__,
    'name'			 => 'filament',
    'url'			 => 'http://wikiwonders.net/wiki/Filament',
    'author'		 => 'WikiWonders',
    'descriptionmsg' => 'A MediaWiki skin that focuses on your content.',
);

$wgValidSkinNames['filament'] = 'filament';

$wgAutoloadClasses['Skinfilament'] = __DIR__.'/filament.skin.php';

$wgExtensionMessagesFiles['filament'] = __DIR__.'/filament.i18n.php';

$wgResourceModules['skins.filament'] = array(
	'styles'         => array(
    	'filament/assets/stylesheets/pure.css',
    	'filament/assets/stylesheets/filament.css',
        'filament/assets/stylesheets/filament-print.css'
    ),
    'scripts'        => array(
        'filament/assets/scripts/filament.js'
    ),
    'remoteBasePath' => &$GLOBALS['wgStylePath'],
    'localBasePath'  => &$GLOBALS['wgStyleDirectory']
);