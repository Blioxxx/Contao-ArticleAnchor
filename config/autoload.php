<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Blixxx',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Blixxx\Anchor\db'      => 'system/modules/article_anchor/classes/db.php',
	'Blixxx\Anchor\general' => 'system/modules/article_anchor/classes/general.php',

	// Module
	'Blixxx\article_anchor' => 'system/modules/article_anchor/module/article_anchor.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_article_anchor' => 'system/modules/article_anchor/templates',
));
