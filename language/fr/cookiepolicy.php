<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'COOKIE_ACCEPT_TEXT'	=> 'Ce forum utilise les cookies pour vous offrir la meilleure et la plus pertinente des expériences utilisateur. En utilisant ce forum, vous acceptez cette politique.<br /><br />Vous pouvez en savoir plus sur les cookies utilisés en cliquant sur « Politique des cookies » sur la page principale.<br /><br />',
	'COOKIE_ACCEPT'			=> '[ J’accepte ]',
	'COOKIE_ACCESS'			=> 'Accès aux liens',

	'COOKIE_BLOCK'			=> 'Vous ne pouvez accèder aux liens de ce forum tant que vous n’aurez pas accepté la politique des cookies.',

	'COOKIE_TEXT'			=> '<h3>Comment utilisons-nous les cookies sur ce forum ?</h3>
	<p>Nous utilisons des fichiers appelés cookies sur %1$s pour améliorer ses performances et améliorer votre expérience utilisateur. En utilisant %1$s vous acceptez le fait que nous pouvons placer ce type de fichiers sur votre appareil.</p>
<h3>Que sont les cookies ?</h3><p>Les cookies sont de petits fichiers texte qu’un site WEB peut stocker sur votre ordinateur ou votre appareil mobile, lorsque vous visitez pour la première fois un site ou l’une de ses pages.<br /><br />
Il y a beaucoup de fonctions pour lesquelles un cookie peut servir. Par exemple, un cookie aidera le site ou un autre site à reconnaître votre appareil la prochaine fois que vous le visiterez. %1$s utilise le terme « cookies » dans sa politique pour se référer à tous les fichiers qui recueillent des renseignements de cette manière.<br /><br />
Certains cookies contiennent des informations personnelles – par exemple, si vous cliquez sur « Se souvenir de moi » lors de la connexion, un cookie va stocker votre nom d’utilisateur. La plupart des cookies ne recueillent pas des informations permettant de vous identifier, mais recueillent des informations plus générales telles que comment les utilisateurs sont arrivés et utilisent %1$s, ou l’emplacement général d’un utilisateur.</p>
<h3>Quelles sortes de cookies utilise %1$s ?</h3><p>Les cookies peuvent remplir plusieurs fonctions différentes :</P>
<p><b>1. Les cookies essentiels</b><br />Certains cookies sont indispensables pour le fonctionnement de %1$s. Ces cookies autorisent les services que vous avez spécifiquement demandés.</p>
<p><b>2. Les cookies analytiques</b><br />Ces cookies peuvent recueillir des informations anonymes sur les pages visitées. Par exemple, nous pourrions utiliser des cookies analytiques pour garder une trace des pages les plus populaires, quel type de liaison entre les pages est le plus efficace et pour déterminer pourquoi certaines pages provoquent des messages d’erreur.</p>
<p><b>3. Cookies de fonctionnalité</b><BR />Ces cookies se souviennent des choix que vous faites pour améliorer votre expérience utilisateur.</p>
<p>%1$s peut également permettre à des tiers de se servir des cookies des catégories ci-dessus. Par exemple, comme de nombreux sites, nous pouvons utiliser Google Analytics pour nous aider à surveiller le trafic de notre site WEB.</p>
<h3>Est-ce qu’un utilisateur du forum peut bloquer les cookies ?</h3><p>Pour savoir comment gérer les cookies que vous autorisez, veuillez vous réfèrer à la rubrique d’aide de votre navigateur ou le manuel de votre appareil mobile - ou vous pouvez visiter l’un des sites ci-dessous, qui ont des informations détaillées sur la façon de gérer, contrôler ou supprimer les cookies.<br /><br />
<a href="http://www.aboutcookies.org" style="text-decoration:none">www.aboutcookies.org</a><br />
<a href="http://www.allaboutcookies.org" style="text-decoration:none">www.allaboutcookies.org</a></p>
<p>Merci de prendre note que si vous choisissez de désactiver les cookies, certaines sections de %1$s ne fonctionneront pas correctement.</p>
<h3>Les cookies de %1$s provenant des réseaux sociaux</h3><p>%1$s peuvent avoir des liens vers des sites de réseaux sociaux (e.g. Facebook, Twitter ou YouTube). Ces sites peuvent également placer des cookies sur votre appareil et %1$s ne gère pas la façon dont ils les utilisent, donc %1$s vous suggère de vérifier leurs sites pour voir comment ils utilisent les cookies.',

	'COOKIE_POLICY'			=> 'Politique des cookies',

	'COOKIE_REQUIRE_ACCESS'	=> '<h3>Acceptation de la politique des cookies nécessaire</h3>
	<p>Vous devez accepter la politique des cookies de %1$s avant de pouvoir vous enregistrer sure ce site ou, si vous êtes déja enregistré, avant de pouvoir vous connecter au site.</p>',
));
