<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\cookiepolicy\acp;

class cookiepolicy_info
{
	function module()
	{
		return array(
			'filename'	=> '\david63\cookiepolicy\acp\cookiepolicy_module',
			'title'		=> 'COOKIE_POLICY',
			'modes'		=> array(
				'main'	=> array('title' => 'COOKIE_POLICY_MANAGE', 'auth' => 'ext_david63/cookiepolicy && acl_a_board', 'cat' => array('COOKIE_POLICY')),
			),
		);
	}
}
