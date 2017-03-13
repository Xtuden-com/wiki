<?php
/**
 * ownCloud - wiki
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Jan Müller <jan.mueller@novapo.net>
 * @copyright Jan Müller 2015
 */
namespace OCA\wiki\AppInfo;

//$app = new Application();



\OC::$server->getNavigationManager()->add(array(

	// the string under which your app will be referenced in owncloud
	'id' => 'wiki',

	// sorting weight for the navigation. The higher the number, the higher
	// will it be listed in the navigation
	'order' => 10,

	// the route that will be shown on startup
	'href' =>\OC::$server->getURLGenerator()->linkToRoute('wiki.page.index'),

	// the icon that will be shown in the navigation
	// this file needs to exist in img/
	'icon' => \OC::$server->getURLGenerator()->imagePath('wiki','app.svg'),

	// the title of your application. This will be used in the
	// navigation or on the settings page of your app
	'name' => \OC::$server->getL10N('wiki')->t('wiki')
));
