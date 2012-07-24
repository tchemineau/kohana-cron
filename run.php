<?php

/**
 * @package Cron
 *
 * @author      Chris Bandy
 * @copyright   (c) 2010 Chris Bandy
 * @license     http://www.opensource.org/licenses/isc-license.txt
 */

// Path to Kohana's index.php
$system = dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'index.php';

if (file_exists($system))
{
	defined('SUPPRESS_REQUEST') or define('SUPPRESS_REQUEST', TRUE);

	include $system;

    if(!empty($_SERVER['argv'][1]))
        Cron::set_group($_SERVER['argv'][1]);

	// If Cron has been run in APPPATH/bootstrap.php, this second call is harmless
	Cron::run();
}
