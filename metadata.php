<?php
/**
 * @abstract
 * @author 	Gregor Wendland <gregor@gewend.de>
 * @copyright Copyright (c) 2018-2019, Gregor Wendland
 * @package gw
 * @version 2019-01-09
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.1'; // see https://docs.oxid-esales.com/developer/en/6.0/modules/skeleton/metadataphp/version20.html

/**
 * Module information
 */
$aModule = array(
    'id'           => 'gw_oxid_prices_extended',
    'title'        => 'Erweiterte Preisanzeige',
//     'thumbnail'    => 'out/admin/img/logo.jpg',
    'version'      => '1.0.0',
    'author'       => 'Gregor Wendland',
    'email'		   => 'kontakt@gewend.de',
    'url'		   => 'https://www.gewend.de',
    'description'  => array(
    	'de'		=> 'Macht es Möglich Preise ohne Nachkommastellen anzuzeigen, wenn die Nachkommastellen gleich ,00 entsprechen.',
    ),
    'extend'       => array(
		OxidEsales\Eshop\Core\Language::class => gw\gw_oxid_prices_extended\Core\Language::class,
		OxidEsales\Eshop\Application\Model\Article::class => gw\gw_oxid_prices_extended\Application\Model\Article::class,
    ),
    'settings'		=> array(

    ),
    'files'			=> array(
    ),
	'blocks' => array(
	),
	'events'       => array(
		'onActivate'   => '\gw\gw_oxid_prices_extended\Core\Events::onActivate',
		'onDeactivate' => '\gw\gw_oxid_prices_extended\Core\Events::onDeactivate'
	),
	'controllers'  => [
	],
	'templates' => [
	],
	'smartyPluginDirectories' => [
		'Smarty/Plugin',
	],

);
?>