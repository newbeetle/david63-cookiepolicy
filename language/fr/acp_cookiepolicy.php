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
	'ALL'									=> 'Toutes les pages',

	'CLICK_TO_SELECT'						=> 'Cliquer dans la boite pour sélectionner une couleur',

	'COOKIE_BLOCK_LINKS'					=> 'Bloquer tous les liens',
	'COOKIE_BLOCK_LINKS_EXPLAIN'			=> 'Empèche un utilisateur d’accèder à tous les liens jusqu’à ce qu’il ait accepté la Politique des Cookies.',
	'COOKIE_BOX_BDR_COLOUR'					=> 'Couleur de la bordure de la boite d’acceptation des cookies',
	'COOKIE_BOX_BDR_COLOUR_EXPLAIN'			=> 'Sélectionner la couleur de la bordure de la boite d’acceptation des cookies.<br />La couleur par défaut est <strong>“#FFFF8A”</strong>',
	'COOKIE_BOX_BDR_WIDTH'					=> 'Taille de la bordure de la boite d’acceptation des cookies',
	'COOKIE_BOX_BDR_WIDTH_EXPLAIN'			=> 'Selectionner la taille de la bordure de la boite d’acceptation des cookies.<br />La taille par défaut est <strong>“1”</strong>',
	'COOKIE_BOX_BG_COLOUR'					=> 'Couleur de l’arrière-plan de la boite d’acceptation des cookies',
	'COOKIE_BOX_BG_COLOUR_EXPLAIN'			=> 'Sélectionner une couleur d’arrière-plan pour la boite d’acceptation des cookies.<br />La couleur par défaut est <strong>“#00608F”</strong>',
	'COOKIE_BOX_HREF_COLOUR'				=> 'Couleur du lien de la boite d’acceptation des cookies',
	'COOKIE_BOX_HREF_COLOUR_EXPLAIN'		=> 'Sélectionner la couleur du lien d’acceptation pour la boite d’acceptation des cookies.<br />La couleur par défaut est <strong>“#FFFFFF”</strong>',
	'COOKIE_BOX_TXT_COLOUR'					=> 'Couleur du texte de la boite d’acceptation des cookies',
	'COOKIE_BOX_TXT_COLOUR_EXPLAIN'			=> 'Sélectionner la couleur du texte pour la boite d’acceptation des cookies.<br />La couleur par défaut est <strong>“#DBDB00”</strong>',
	'COOKIE_BOX_POSITION'					=> 'Position de la boite d’acceptation des cookies',
	'COOKIE_BOX_POSITION_EXPLAIN'			=> 'Position de la boite d’acceptation des cookies sur la gauche ou la droite.',

	'COOKIE_CUSTOM_PAGE'					=> 'Utiliser des couleurs personalisées pour la page de politique des cookies',
	'COOKIE_CUSTOM_PAGE_CORNERS'			=> 'Utiliser des coins arrondis',
	'COOKIE_CUSTOM_PAGE_CORNERS_EXPLAIN'	=> 'Utiliser des coins arrondis sur la page de politique des cookies.<br />Le paramètre <strong>Non</strong> utilisera des coins à angle droit.',
	'COOKIE_CUSTOM_PAGE_EXPLAIN'			=> 'Utiliser des couleurs personalisées pour la page de politique des cookies.<br />Le paramètre <strong>Non</strong> utilisera les couleurs par défaut de votre style.',
	'COOKIE_CUSTOM_PAGE_RADIUS'				=> 'Rayon des angles de la page de politique des cookies',
	'COOKIE_CUSTOM_PAGE_RADIUS_EXPLAIN'		=> 'Sets the number of pixels for rounding the custom Cookie page corners. Setting this to 0 means that the page will have square corners.<br /><em>The default for prosilver is 7px.</em>',
 
	'COOKIE_EXPIRE'							=> 'Expiration des cookies',
	'COOKIE_EXPIRE_EXPLAIN'					=> 'En réglant cette option sur oui, les utilisateurs devront re accepter la politique de scookies chaque année.',

	'COOKIE_LEFT'							=> 'Gauche',

	'COOKIE_PAGE_BG_COLOUR'					=> 'Couleur personnalisée de l’arrière-plan de la page de politique des cookies',
	'COOKIE_PAGE_BG_COLOUR_EXPLAIN'			=> 'Sélectionner une couleur d’arrière-plan pour la page de politique des cookies.',
	'COOKIE_PAGE_TXT_COLOUR'				=> 'Couleur personnalisée du texte de la page de politique des cookies',
	'COOKIE_PAGE_TXT_COLOUR_EXPLAIN'		=> 'Sélectionner la couleur du texte pour la page de politique des cookies.',

	'COOKIE_POLICY_ENABLE'					=> 'Activer la politique des cookies',
	'COOKIE_POLICY_ENABLE_EXPLAIN'			=> 'Active / désactive sur le forum la condition requise d’accepter les cookies pour tous les utilisateurs étant concernés par la directive EU Cookie (2012).',
	'COOKIE_POLICY_EXPLAIN'					=> 'Définir les options pour gérer la politique des cookies.',
	'COOKIE_POLICY_ON_INDEX'				=> 'Afficher uniquement sur l’index du forum',
	'COOKIE_POLICY_ON_INDEX_EXPLAIN'		=> 'Afficher la boite d’acceptation de la politique des cookies seulement sur la page d’index ou sur toutes les pages .',
	'COOKIE_POLICY_OPTIONS'					=> 'Options de politique des cookies',

	'COOKIE_REQUIRE'						=> 'Nécessite l’acceptation des cookies',
	'COOKIE_REQUIRE_EXPLAIN'				=> 'Nécessite l’acceptation des cookies du forum avant qu’un membre ne puisse s’enregister ou se connecter.<br />Le paramétrage sur “Oui” autorisera les utilisateurs a voir le forum (selon les permissions).',
	'COOKIE_RIGHT'							=> 'Droite',

	'COOKIE_SHOW_POLICY'					=> 'Afficher la politique des cookies',
	'COOKIE_SHOW_POLICY_EXPLAIN'			=> 'En réglant cette option sur oui, le lien de la politique des cookies sera affiché dans la barre de navigation quand la politique des cookies est désactivée, i.e. vous pouvez avoir une politique des cookies sans avoir la boite d’acceptation des cookies.',

	'CUSTOM_BOX_COLOURS'					=> 'Couleurs personnalisées de la boite d’acceptation des cookies',
	'CUSTOM_BOX_COLOURS_EXPLAIN'			=> '<strong>Ici vous pouvez modifier les couleurs selon votre style pour la boite d’acceptation des cookies.</strong>',
	'CUSTOM_PAGE_COLOURS'					=> 'Couleurs personnalisées de la page de politique des cookies',
	'CUSTOM_PAGE_COLOURS_EXPLAIN'			=> '<strong>Ici vous pouvez modifier les couleurs de la page de politique des cookies selon votre style.</strong>',

	'PIXELS'							=> 'px',
));
