<?php
/* Copyright (C) 2017 Laurent Destailleur  <eldy@users.sourceforge.net>
 * Copyright (C) 2017 ATM Consulting       <contact@atm-consulting.fr>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 *      \file       htdocs/blockedlog/ajax/block-info.php
 *      \ingroup    blockedlog
 *      \brief      block-info
 */


// This script is called with a POST method.
// Directory to scan (full path) is inside POST['dir'].

if (! defined('NOTOKENRENEWAL')) define('NOTOKENRENEWAL',1); // Disables token renewal
//if (! defined('NOREQUIRETRAN')) define('NOREQUIRETRAN','1');
if (! defined('NOREQUIREMENU')) define('NOREQUIREMENU','1');
if (! defined('NOREQUIREHTML')) define('NOREQUIREHTML','1');
//if (! defined('NOREQUIREAJAX')) define('NOREQUIREAJAX','1');


require '../../../main.inc.php';

dol_include_once('/compartmentstracking/lib/compartmentstracking.lib.php');

$product_id = GETPOST('product_id','int');

$action = GETPOST('action','alpha');

// if ((! $user->admin && ! $user->rights->blockedlog->read) || empty($conf->blockedlog->enabled)) accessforbidden();

// var_dump($product_id, $action);

echo compartmentstracking_warehouse_compartments_select_js( $action, $product_id, 'product' );
