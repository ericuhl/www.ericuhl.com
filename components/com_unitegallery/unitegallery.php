<?php
/**
 * @package Unite Gallery
 * @author UniteCMS.net / Valiano
 * @copyright (C) 2012 Unite CMS, All Rights Reserved. 
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * */
defined('_JEXEC') or die('Restricted access');

require_once JPATH_ADMINISTRATOR."/components/com_unitegallery/includes.php";

//error_reporting(E_ALL); // debug

$ugOperations = new UGOperations();
$ugOperations->onClientAjaxActions();

?>