<?php
/**
 * Plugin Name: Beacon
 * Plugin URI:  https://github.com/baardbaard/beacon
 * Description: Beacon is a WordPress plugin that adds a widget to the WP dashboard to help new users.
 * Version:     0.1.0
 * Author:      Stef Thoen
 * Author URI:  http://www.baardbaard.nl
 * Text Domain: beacon
 * License:     GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 * Domain Path: /languages/
 *
 * Copyright 2017  Stef Thoen (email : stef@baardbaard.nl)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 3, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

namespace Baardbaard\Beacon;

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require __DIR__ . '/vendor/autoload.php';
}
