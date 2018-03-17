<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('VIEW', 'views/');
define('CONTROLLER', 'controller/');
require (CONTROLLER. 'Contact_Controller.php');
require ( CONTROLLER. 'Presentation_Controller.php');
require (CONTROLLER. 'stock_page_1_Controller.php');
require_once(VIEW. 'main-page.php');
//require_once(VIEW. 'stocks/Search-stock.php');
//require_once(VIEW. 'stocks/stock-presentation-1.php');
$action = isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';
$controller = '';

switch ($action) {
	case 'Presentation':
		require_once(CONTROLLER . 'Presentation_Controller.php');
		$controller = new Presentation_Controller();
		break;
  case 'stock-page1':
		require_once(CONTROLLER . 'stock_page_1_controller1_Controller.php');
		$controller = new stock_page_1_controller();
		break;
  case 'Contact':
		require_once(CONTROLLER . 'Contact_Controller.php');
		$controller = new Contact_Controller();
		break;
  }
  //$controller->run();
  require_once(VIEW. 'footer.php');
 ?>
