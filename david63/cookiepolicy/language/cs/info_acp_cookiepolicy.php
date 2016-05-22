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
	'ALL'								=> 'Vše',
	'CLICK_TO_SELECT'					=> 'Klepnutím do pole vyberte barvu',
	'COOKIE_BOX_BG_COLOUR'				=> 'Barva pozadí cookie panelu',
	'COOKIE_BOX_BG_COLOUR_EXPLAIN'		=> 'Vlastní barva pozadí panelu zásad používání cookies.',
	'COOKIE_BOX_HREF_COLOUR'			=> 'Barva odkazu pro cookie panel',
	'COOKIE_BOX_HREF_COLOUR_EXPLAIN'	=> 'Vlastní barva odkazu pro přijetí podmínek v panelu zásad používání cookies.',
	'COOKIE_BOX_TXT_COLOUR'				=> 'Barva textu cookie panelu',
	'COOKIE_BOX_TXT_COLOUR_EXPLAIN'		=> 'Vlastní barva textu v panelu zásad používání cookies.',
	'COOKIE_BOX_POSITION'				=> 'Pozice cookie panelu',
	'COOKIE_BOX_POSITION_EXPLAIN'		=> 'Umístění panelu pro přijetí zásad používání cookies.',
	'COOKIE_CUSTOM_BOX'					=> 'Používat vlastní barvy cookie panelu',
	'COOKIE_CUSTOM_BOX_EXPLAIN'			=> 'Používat vlastní nastavení barev panelu pro přijetí zásad používání cookies.<br />Nastavením volby na <strong>Ne</strong> budou použity výchozí barvy.',
	'COOKIE_CUSTOM_PAGE'				=> 'Používat vlastní barvy cookie stránky',
	'COOKIE_CUSTOM_PAGE_EXPLAIN'		=> 'Používat vlastní nastavení barev stránky „Zásady používání souborů cookies“.<br />Nastavením volby na <strong>Ne</strong> budou použity výchozí barvy.',
	'COOKIE_DETECT'						=> 'Rozpoznávat, zda je upozornění potřeba',
	'COOKIE_DETECT_EXPLAIN'				=> 'Snaha detekovat, zda se uživatel nachází ve státě EU a vyžadovat souhlas se zásadami používání cookies pouze od těchto uživatelů.<br /><strong>Poznámka:</strong> Výsledek nemusí být přesný a povolení této volby není doporučeno pro fóra, kde se očekává, že většina uživatelů bude pocházet ze zemí EU.',
	'COOKIE_EXPIRE'						=> 'Vypršení cookie',
	'COOKIE_EXPIRE_EXPLAIN'				=> 'Nastavením této volby na „Ano“ bude souhlas uživatele vyžadován opětovně každý rok.',
	'COOKIE_LEFT'						=> 'Vlevo',
	'COOKIE_LOG_ERRORS'					=> 'Protokolovat chyby',
	'COOKIE_LOG_ERRORS_EXPLAIN'			=> 'Protokolovat všechny chyby zjištěné během detekce IP adresy uživatele.',
	'COOKIE_PAGE_BG_COLOUR'				=> 'Barva pozadí stránky zásad používání cookies',
	'COOKIE_PAGE_BG_COLOUR_EXPLAIN'		=> 'Vlastní barva pozadí stránky „Zásady používání souborů cookies“.',
	'COOKIE_PAGE_TXT_COLOUR'			=> 'Barva textu stránky zásad používání cookies',
	'COOKIE_PAGE_TXT_COLOUR_EXPLAIN'	=> 'Vlastní barva textu stránky „Zásady používání souborů cookies“.',
	'COOKIE_POLICY'						=> 'Zásady používání souborů cookies',
	'COOKIE_POLICY_ENABLE'				=> 'Povolit zásady používání souborů cookies',
	'COOKIE_POLICY_ENABLE_EXPLAIN'		=> 'Povolení/zakázání požadavku na souhlas s používáním cookies od všech uživatelů tohoto fóra dle nařízení EU z roku 2012.',
	'COOKIE_POLICY_EXPLAIN'				=> 'Nastavení možností Zásad pro používání souborů  cookies.',
	'COOKIE_POLICY_LOG'					=> '<strong>Aktualizováno nastavení Zásad používání cookies</strong>',
	'COOKIE_POLICY_MANAGE'				=> 'Správa nastavení',
	'COOKIE_POLICY_ON_INDEX'			=> 'Zobrazovat pouze na úvodní stránce',
	'COOKIE_POLICY_ON_INDEX_EXPLAIN'	=> 'Zobrazovat panel zásad používání cookies na všech stránkách nebo pouze na úvodní stránce.',
	'COOKIE_POLICY_OPTIONS'				=> 'Možnosti Zásad používání cookies',
	'COOKIE_RIGHT'						=> 'Vpravo',
	'COOKIE_SHOW_POLICY'				=> 'Zobrazovat „Zásady používání souborů cookies“',
	'COOKIE_SHOW_POLICY_EXPLAIN'		=> 'Nastavením volby na <strong>Ano</strong> bude v oblasti navigačního panelu zobrazen odkaz na „Zásady používání souborů cookies“. Můžete tak mít podmínky dostupné i v případě, že panel pro souhlas zobrazován není.',
	'CUSTOM_BOX_COLOURS'				=> 'Vlastní barvy cookie panelu',
	'CUSTOM_BOX_COLOURS_EXPLAIN'		=> '<strong>Zde je možné přizpůsobit barvy panelu pro odsouhlasení zásad používání cookies.</strong>',
	'CUSTOM_PAGE_COLOURS'				=> 'Vlastní barvy cookie stráky',
	'CUSTOM_PAGE_COLOURS_EXPLAIN'		=> '<strong>Zde je možné přizpůsobit barvy stránky „Zásady používání souborů cookies“.</strong>',
	'LOG_COOKIE_ERROR'					=> '<strong>Zjištění IP adresy se nezdařilo</strong>',
	'LOG_CURL_ERROR'					=> '<strong>cURL není na tomto serveru dostupná</strong>',
	'LOG_SERVER_ERROR'					=> '<strong>K IP serveru se nelze připojit</strong>',
	'UNBAN_IP'							=> 'Odbanovat IP adresu',
	'UNBAN_IP_EXPLAIN'					=> 'Systém automaticky zabanuje všechny IP adresy, které vytváří více než 250 požadavků za minutu. Pokud byla vaše IP adresa zabanována, <a href="http://ip-api.com/docs/unban">klepněte zde</a> pro přístup k odbanovávacímu formuláři.',
	'YOUR_IP'							=> 'Zdá se, že IP adresa vašeho serveru je',
));
