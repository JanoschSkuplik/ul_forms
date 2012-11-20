<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2012 Janosch Skuplik
 *
 * @package ulForms
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Table tl_form_field
 */

foreach ($GLOBALS['TL_DCA']['tl_form_field']['palettes'] as $key=>$palette)
{
	$GLOBALS['TL_DCA']['tl_form_field']['palettes'][$key] = str_replace(',type',',type,ul_listitem',$GLOBALS['TL_DCA']['tl_form_field']['palettes'][$key]);
}

$GLOBALS['TL_DCA']['tl_form_field']['palettes']['listelement'] = '{type_legend},type;{listelement_legend},ulListElementType;{expert_legend:hide},class';


$GLOBALS['TL_DCA']['tl_form_field']['fields']['type']['eval']['tl_class'] = 'w50';
$GLOBALS['TL_DCA']['tl_form_field']['fields']['ul_listitem'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['ul_listitem'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['ulListElementType'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['ulListElementType'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('ul_li_divider', 'ul_li_opener', 'ul_li_closer'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_form_field'],
	'eval'                    => array('helpwizard'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);



?>