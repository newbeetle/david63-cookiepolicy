<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
// DEVELOPERS PLEASE NOTE
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
	'COOKIE_ACCEPT_TEXT'	=> 'Toto fórum používá soubory cookies pro zajištění chodu některých funkcí. Používáním tohoto webu s tím souhlasíte.<br /><br />Více informací najdete na úvodní stránce v části „Zásady používání souborů cookies“.<br /><br />',
	'COOKIE_ACCEPT'			=> 'Souhlasím',
	'COOKIE_TEXT'			=> '<h3>Jak používáme soubory cookies?</h3>
	<p>Soubory cookies na webu %1$s používáme za účelem zlepšení uživatelského komfortu. Používáním webu %1$s souhlasíte, že můžeme tento typ souborů ukládat do vašeho zařízení.</p>
<h3>Co jsou soubory cookies?</h3><p>Cookies jsou malé textové soubory, které mohou být ukládány webovými stránkami do vašeho počítače nebo do mobilních zařízení. K ukládání může docházet kdykoliv během návštěvy jakékoliv stránky webu.<br /><br />
Soubory cookies mohou sloužit k zajištění chodu mnoha funkcí. Například vám mohou pomoci s překladem stránky, rozpoznat vaše zařízení při vaší další návštěvě nebo si zapamatovat vaše umístění. %1$s používá v těchto zásadách termín „soubory cookie“ pro označení všech souborů, které shromažďují informace podobným způsobem.<br /><br />
Některé soubory cookies obsahují osobní informace – například pokud klepnete na tlačítko „Zapamatovat si mě“ během přihlašování, cookie uchová vaše uživatelské jméno. Většina souborů cookies neshromažďuje informace, které vás mohou identifikovat. Většinou ukládájí pouze obecné informace jako například odkud uživatel přišel a jakým způsobem používá web %1$s.</p>
<h3>Jaké typy cookies %1$s používá?</h3><p>Soubory cookies mohou sloužit k celé řadě funkcí:</p>
<p><b>1. Nezbytné cookies</b><br />Některé soubory cookies jsou nezbytné pro fungování webu %1$s. Takové soubory cookies umožňují chod služeb, které jste si během procházení vyžádali.</p>
<p><b>2. Obsah stránek</b><br />Soubory cookies uchovávají také anonymní informace ze stránek, které jste navštívili. Lze je například použít ke sledování, jaké stránky jsou nejvíce populární, jaké uspořádání stránek je nejvhodnější nebo k určení, proč na některých stránkách dochází k chybám.</p>
<p><b>3. Funkčnost stránek</b><br />Soubory cookies umožňují si zapamatovat vaše volby, nastavení a provedené úkony za účelem zlepšení uživatelského komfortu.</p>
<p>%1$s může také povolit používání souborů cookies třetích stran, které nespadají do žádné výše uvedené kategorie. Spousta stránek například využívá Google Analytics pro monitorování využívání a návštěvnosti webu.</p>
<h3>Jak lze soubory cookies blokovat?</h3><p>Používání souborů cookies můžete obvykle zakázat v nastavení svého webového prohlížeče. Konkrétní postup naleznete v dokumentaci svého prohlížeče nebo zařízení. Můžete také navštívit některou z následujících stránek, které obsahují podrobné informace o správě, kontrole a mazání souborů cookies.<br /><br />
<a href="http://www.aboutcookies.org" target="_blank" style="text-decoration:none">www.aboutcookies.org</a><br />
<a href="http://www.allaboutcookies.org" target="_blank" style="text-decoration:none">www.allaboutcookies.org</a></p>
<p>Pamatujte, že pokud používání cookies zakážete, nemusí některé části webu %1$s správně fungovat.</p>
<h3>Sociální sítě a sdílení obsahu</h3><p>%1$s může obsahovat odkazy a propojení se sociálními službami (např. Google+, Twitter, Facebook, nebo YouTube). Tyto weby mohou rovněž ukládát soubory cookies do vašeho zařízení a %1$s neovlivní, jakým způsobem své cookies používají. Informace o tom, jak s nimi nakládají naleznete na jejich stránkách.',
	'COOKIE_POLICY'			=> 'Zásady používání souborů cookies',
));
