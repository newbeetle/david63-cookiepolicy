<?php

/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\cookiepolicy;

use phpbb\extension\base;

class ext extends base
{
	const COOKIE_POLICY_VERSION	= '2.1.0 RC2';

    /**
	* Enable extension if phpBB version requirement is met
	*
	* @var string Require 3.2.0-a1 due to updated 3.2 syntax
	*
	* @return bool
	* @access public
	*/
	public function is_enableable()
	{
		$config = $this->container->get('config');

		if (!phpbb_version_compare($config['version'], '3.2.0', '>='))
		{
			$this->container->get('language')->add_lang('ext_cookiepolicy', 'david63/cookiepolicy');
			trigger_error($this->container->get('language')->lang('VERSION_32') . adm_back_link(append_sid('index.' . $this->container->getParameter('core.php_ext'), 'i=acp_extensions&amp;mode=main')), E_USER_WARNING);
		}
		else
		{
			return true;
		}
	}
}
