<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* * @license GNU General Public License, version 2 (GPL-2.0)
* French Translation - Philippe B.
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
	'COOKIE_POLICY'			=> 'Politique des cookies',
	'COOKIE_POLICY_LOG'		=> '<strong>Les paramètres de la politique des cookies ont été mis à jour</strong>',
	'COOKIE_POLICY_MANAGE'	=> 'Gestion des paramètres',

	'LOG_CURL_ERROR'		=> '<strong>cURL n’est pas disponible sur ce serveur</stong>',
	'LOG_IP_LOOKUP_ERROR'	=> '<strong>La recherche d’IP n’a pas abouti</strong>',
	'LOG_QUOTA_EXCEEDED'	=> '<strong>Le quota horaire a été dépassé</strong>',
	'LOG_SERVER_ERROR'		=> '<strong>Impossible de déteminer l’ adresse IP</strong>',
));
