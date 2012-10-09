<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Ul_forms
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Forms
	'Contao\ulFormListElement' => 'system/modules/ul_forms/forms/ulFormListElement.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'form_captcha'     => 'system/modules/ul_forms/templates',
	'form_checkbox'    => 'system/modules/ul_forms/templates',
	'form_explanation' => 'system/modules/ul_forms/templates',
	'form_headline'    => 'system/modules/ul_forms/templates',
	'form_message'     => 'system/modules/ul_forms/templates',
	'form_password'    => 'system/modules/ul_forms/templates',
	'form_radio'       => 'system/modules/ul_forms/templates',
	'form_submit'      => 'system/modules/ul_forms/templates',
	'form_widget'      => 'system/modules/ul_forms/templates',
));
