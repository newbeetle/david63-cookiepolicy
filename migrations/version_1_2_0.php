<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\cookiepolicy\migrations;

class version_1_2_0 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\david63\cookiepolicy\migrations\version_1_1_3');
		return array('\phpbb\db\migration\data\v32x\v320a1');
	}
}
