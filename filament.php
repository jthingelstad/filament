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
    'path'			=> __FILE__,
    'name'			=> 'Filament',
    'url'			=> 'http://filament.wikiwonders.net/',
    'author'		 	=> 'WikiWonders',
    'descriptionmsg' 		=> 'A MediaWiki skin that focuses on your content.',
);

$wgValidSkinNames['filament'] = 'filament';

$wgAutoloadClasses['Skinfilament'] = __DIR__.'/filament.skin.php';

$wgExtensionMessagesFiles['filament'] = __DIR__.'/filament.i18n.php';

$wgResourceModules['skins.filament'] = array(
	'styles'         => array(
    		'Filament/assets/stylesheets/pure.css',
            'Filament/assets/stylesheets/font-awesome.css',
    		'Filament/assets/stylesheets/filament.css',
        	'Filament/assets/stylesheets/filament-print.css'
    	),
    'scripts'        => array(
        'Filament/assets/scripts/filament.js'
    ),
    'remoteBasePath' => &$GLOBALS['wgStylePath'],
    'localBasePath'  => &$GLOBALS['wgStyleDirectory']
);
