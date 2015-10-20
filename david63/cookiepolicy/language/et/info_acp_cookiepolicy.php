<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63; Estonian translation by phpBBeesti.com 04/2015
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
	'ALL'								=> 'Kõik lehed',
	'CLICK_TO_SELECT'					=> 'Vajuta kastile, et valida värv',
	'COOKIE_BOX_BG_COLOUR'				=> 'Küpsiste teabe kasti tagatausta värv',
	'COOKIE_BOX_BG_COLOUR_EXPLAIN'		=> 'Vali tagatausta värv küpsiste teabe aktsepteerimis kastile.',
	'COOKIE_BOX_HREF_COLOUR'			=> 'Küpsiste teabe kasti lingi "Ma nõustun" värv',
	'COOKIE_BOX_HREF_COLOUR_EXPLAIN'	=> 'Vali värvus küpsiste teabe aktsepteerimis kasti lingile "Ma nõustun".',
	'COOKIE_BOX_TXT_COLOUR'				=> 'Teksti värv küpsiste teabe kastis',
	'COOKIE_BOX_TXT_COLOUR_EXPLAIN'		=> 'Vali teksti värv küpsiste teabe aktsepteerimis kastis.',
	'COOKIE_BOX_POSITION'				=> 'Küpsiste teabe aktsepteerimis kasti asukoht',
	'COOKIE_BOX_POSITION_EXPLAIN'		=> 'Vali asukoht, kus näidatakse küpsiste teabe aktsepteerimis kasti, valida saab vasaku ja parema poole vahel.',
	'COOKIE_CUSTOM_BOX'					=> 'Kasuta valituid värve küpsiste teabe aktsepteerimis kastis',
	'COOKIE_CUSTOM_BOX_EXPLAIN'			=> 'Kasutatakse all järgnevalt valituid värve küpsiste teabe aktsepteerimis kastile.<br />Seadistades selle <strong>Ei</strong> kasutatakse vaikimisi värve.',
	'COOKIE_CUSTOM_PAGE'				=> 'Kasuta valituid värve küpsiste teabe leheküljel',
	'COOKIE_CUSTOM_PAGE_EXPLAIN'		=> 'Kasutatakse all järgnevalt valituid värve küpsiste teabe leheküljel.<br />Seadistades selle <strong>Ei</strong> kasutatakse vaikimisi värve.',
	'COOKIE_DETECT'						=> 'Tuvasta kas küpsised on nõutud',
	'COOKIE_DETECT_EXPLAIN'				=> 'Antud seadistus üritab tuvastada kas liige on pärit EL\'ist, ning nõuab küpsistega nõustumist ainult neilt liikmetelt.<br /><strong>Märkus 1:</strong> See ei pruugi olla alati täpne, ning ei ole soovitatav foorumitele kuhu oodatakse liikmeid just EL\'ist.<br /><strong>Märkus 2:</strong> See valik on tõhus ainult siis kui küpsiste teave on keelatud.',
	'COOKIE_EXPIRE'						=> 'Küpsis aegub',
	'COOKIE_EXPIRE_EXPLAIN'				=> 'Seadistades selle "Jah", siis nõutakse liikmetelt korra aastas uuesti nõustumist “küpsiste teabega”.',
	'COOKIE_LEFT'						=> 'Vasakul pool',
	'COOKIE_LOG_ERRORS'					=> 'Salvesta vigu',
	'COOKIE_LOG_ERRORS_EXPLAIN'			=> 'Salvestab kõik vead, mis on seotud liikmete ja kasutajate IP aadresside tuvastamisega',
	'COOKIE_PAGE_BG_COLOUR'				=> 'Küpsiste teabe lehekülje tagatausta värv',
	'COOKIE_PAGE_BG_COLOUR_EXPLAIN'		=> 'Vali tagatausta värv küpsiste teabe leheküljele.',
	'COOKIE_PAGE_TXT_COLOUR'			=> 'Teksti värv küpsiste teabe leheküljel',
	'COOKIE_PAGE_TXT_COLOUR_EXPLAIN'	=> 'Vali teksti värv küpsiste teabe lehekülje jaoks',
	'COOKIE_POLICY'						=> 'Küpsiste teave',
	'COOKIE_POLICY_ENABLE'				=> 'Luba või keela laiendus "Küpsiste teave"',
	'COOKIE_POLICY_ENABLE_EXPLAIN'		=> 'Luba või keela küpsistega nõustumine kõigile kasutajatele, mis on seotud EU Küpsiste direktiiviga (2012).',
	'COOKIE_POLICY_EXPLAIN'				=> 'Sellel leheküljel saad seadistada laienduse "Küpsiste teave" omale sobivamaks.',
	'COOKIE_POLICY_LOG'					=> '<strong>Küpsiste teabe seaded on uuendatud</strong>',
	'COOKIE_POLICY_MANAGE'				=> 'Seadistus',
	'COOKIE_POLICY_ON_INDEX'			=> 'Näita ainult esilehel',
	'COOKIE_POLICY_ON_INDEX_EXPLAIN'	=> 'Vali, kas küpsiste teabe aktsepteerimis kasti näidatakse kõigil lehekülgedel või ainult esilehel.',
	'COOKIE_POLICY_OPTIONS'				=> 'Laienduse küpsiste teabe seaded',
	'COOKIE_RIGHT'						=> 'Paremal',
	'COOKIE_SHOW_POLICY'				=> 'Näita küpsiste teavet',
	'COOKIE_SHOW_POLICY_EXPLAIN'		=> 'Seadistades selle "Jah", siis näidatakse küpsiste teabe linki all jaluses oleval navigatsiooni ribal isegi siis kui küpsiste teabe laiendus on väärtusega Ei. See tähendab, sa saad kasutada küpsiste teabe lehte ilma aktsepteerimis kastita.',
	'CUSTOM_BOX_COLOURS'				=> 'Küpsiste teabe aktsepteerimis kasti värvivalik',
	'CUSTOM_BOX_COLOURS_EXPLAIN'		=> '<strong>Selles sektsioonis saad muuta küpsiste teabe aktsepteerimis kasti värve ja kohanda oma stiiliga vastavaks.</strong>',
	'CUSTOM_PAGE_COLOURS'				=> 'Küpsiste teabe lehekülje värvivalik',
	'CUSTOM_PAGE_COLOURS_EXPLAIN'		=> '<strong>Selles sektsioonis saad muuta küpsiste teabe lehekülje värv all järgnevate valikutega.</strong>',
	'LOG_COOKIE_ERROR'					=> '<strong>IP aadressi otsing ebaõnnestus</stong>',
	'LOG_CURL_ERROR'					=> '<strong>cURL ei ole saadaval antud serveris</stong>',
	'LOG_SERVER_ERROR'					=> '<strong>Ei saanud ühendada IP serveriga</strong>',
));
