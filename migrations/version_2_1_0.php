<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\cookiepolicy\migrations;
use \phpbb\db\migration\migration;

class version_2_1_0 extends migration
{
	static public function depends_on()
	{
		return array('\david63\cookiepolicy\migrations\version_1_1_3');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('cookie_block_links', 0)),
			array('config.add', array('cookie_require_access', 0)),
		);
	}
}
