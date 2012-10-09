<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) Janosch Skuplik
 * 
 * @package ulForms
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Contao;


/**
 * Class FormTextField
 *
 * Form field "text".
 * @copyright  Janosch Skuplik
 * @author     Copyright (C) 2012 Janosch Skuplik
 * @package    ulForms
 */
class ulFormListElement extends \Widget
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'form_html';


	/**
	 * Add specific attributes
	 * @param string
	 * @param mixed
	 */
	public function __set($strKey, $varValue)
	{
		switch ($strKey)
		{
			case 'ulListElementType':
				if ($varValue == 'ul_li_opener')
				{
					parent::__set('isStarter',true);
				}
				elseif ($varValue == 'ul_li_closer')
				{
					parent::__set('isCloser',true);
				}
				else {
					parent::__set('isDivider',true);
				}
				break;
			default:
				parent::__set($strKey, $varValue);
				break;
		}
	}


	/**
	 * Do not validate
	 */
	public function validate()
	{
		return;
	}


	/**
	 * Generate the widget and return it as string
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new \BackendTemplate('be_wildcard');

			if ($this->isStarter)
			{
				$objTemplate->wildcard = '### LISTENELEMENT START ###';
			}
			elseif ($this->isCloser)
			{
				$objTemplate->wildcard = '### LISTENELEMENT ENDE ###';
			}
			else
			{
				$objTemplate->wildcard = '### LISTENELEMENT TRENNER ###';
			}

			return $objTemplate->parse();
		}
		
		if ($this->isStarter)
		{
			return "<ul>";
		}
		elseif ($this->isCloser)
		{
			return "</ul>";
		}
		else 
		{
			return "</ul><ul>";
		}

	}
}
