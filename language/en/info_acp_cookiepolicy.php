<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

/// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'COOKIE_POLICY'						=> 'Cookie policy',
	'COOKIE_POLICY_LOG'					=> '<strong>Cookie policy settings updated</strong>',
	'COOKIE_POLICY_MANAGE'				=> 'Manage settings',

	'LOG_CURL_ERROR'					=> '<strong>cURL is not available on this server</strong>',
	'LOG_RETURN_ERROR_PRIVATE_RANGE'	=> '<strong>The IP address is part of a private range</strong>',
	'LOG_RETURN_ERROR_RESERVED_RANGE' 	=> '<strong>The IP address is part of a reserved range</strong>',
	'LOG_RETURN_ERROR_INVALID_QUERY' 	=> '<strong>Invalid IP address or domain name</strong>',
	'LOG_RETURN_ERROR_QUOTA'			=> '<strong>The lookup quota has been exceeded</strong>',
	'LOG_SERVER_ERROR'					=> '<strong>Could not connect to IP server</strong>',
));
