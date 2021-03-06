<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\cookiepolicy\controller;

/**
* Interface for our main controller
*
* This describes all of the methods we'll use for the front-end of this extension
*/
interface main_interface
{
    /**
     * Display the Cookie Policy page
     *
     * @param $name
     *
     * @return \Symfony\Component\HttpFoundation\Response A Symfony Response object
     * @access public
     */
	public function cookieoutput($name);
}
