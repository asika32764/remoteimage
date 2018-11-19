<?php
/**
 * Part of Component {{extension.name.cap}} files.
 *
 * @copyright   Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license     GNU General Public License version 2 or later.
 */

use Joomla\CMS\Component\Router\Rules\MenuRules;
use Joomla\CMS\Component\Router\Rules\NomenuRules;
use Joomla\CMS\Component\Router\Rules\StandardRules;
use Windwalker\Router\ComponentViewRouter;

defined('_JEXEC') or die;

include_once JPATH_ADMINISTRATOR . '/components/{{extension.element.lower}}/src/init.php';

if (!class_exists('Windwalker\Windwalker'))
{
	return;
}

/**
 * Routing class from {{extension.element.lower}}.
 *
 * @since  1.0
 */
class {{extension.name.cap}}Router extends ComponentViewRouter
{
	/**
	 * Class constructor.
	 *
	 * @param   JApplicationCms $app  Application-object that the router should use
	 * @param   JMenu           $menu Menu-object that the router should use
	 *
	 * @since   3.4
	 */
	public function __construct($app = null, $menu = null)
	{
		parent::__construct($app, $menu);

		$this->attachRule(new MenuRules($this));
		$this->attachRule(new StandardRules($this));
		$this->attachRule(new NomenuRules($this));
	}
}
