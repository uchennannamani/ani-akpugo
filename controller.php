<?php
include 'models/database_conn.php';
include 'models/chiefs_db_util.php';
include 'models/comrads_db_util.php';

$command = filter_input(INPUT_GET, 'command', FILTER_SANITIZE_STRING);
$category = filter_input(INPUT_GET, 'category', FILTER_SANITIZE_STRING);
$tempchief_id = filter_input(INPUT_GET, 'tempchief_id', FILTER_SANITIZE_STRING);
$tempcomrad_id = filter_input(INPUT_GET, 'tempcomrad_id', FILTER_SANITIZE_STRING);

// $tempchief_id = filter_input(INPUT_POST, 'tempchief_id', FILTER_SANITIZE_STRING);
// $tempcomrad_id = filter_input(INPUT_POST, 'tempcomrad_id', FILTER_SANITIZE_STRING);

switch ($command) {
    case 'HOME':
        include ('index.php');
        break;

    case 'CHIEF':
        $chiefs = list_chiefs();
        include ('views/list_chiefs.php');
        break;

    case 'COMRAD':
        $comrads = list_comrads($category);
        include ('views/list_comrads.php');
        break;

    case 'HISTORY':
        include ('views/history.php');
        break;

    case 'GALLERY':
        include ('views/gallery.php');
        break;

    case 'CHIEF_DETAIL':
        $chief_details = chief_details($tempchief_id);
        include ('views/chief_detail.php');
        break;

    case 'COMRAD_DETAIL':
        $comrad_details = comrad_details($tempcomrad_id);
        include ('views/comrad_detail.php');
        break;

    // add case for command = admin_login
    case 'ADMIN_LOGIN':
        header("location: admin_login.php");
        break;

    case 'ADMIN_LOGOUT':
        header("location: admin/admin_logout.php");
        break;

    // in the admin_login.php file try to have buttons for the admin to select what they wish to achieve (add chief, add comrad, update chief, update comrad, etc). Then create case for them.
    case 'ADD_CHIEF':
        header("location: admin/admin_add_chief.php"); // provide redirect to the admin welcome portal on success
        break;

    case 'UPDATE_CHIEF': // This will load the list of chiefs with buttons for update / delete on each of them
        $chiefs = list_chiefs();
        include ('admin/admin_list_chiefs.php'); // provide redirect to the admin welcome portal on success
        break;

    case 'CHIEF_DETAIL_UPDATE': // This will load a from and populate is with the details of the relevant chief
                                 // $chief_details = chief_details($tempchief_id);
                                 // include ('admin/admin_update_chief_detail.php'); //provide redirect to the admin welcome portal on success
        header("location: admin/admin_update_chief_detail.php");
        break;

    case 'ADD_COMRAD':
        header("location: admin/admin_add_comrad.php"); // provide redirect to the admin welcome portal on success
        break;

    case 'UPDATE_COMRAD':
        $comrads = list_comrads(); // Create a function that will pull out all
        include ('views/list_comrads.php'); // provide redirect to the admin welcome portal on success
        break;

    default:
        $chiefs = list_chiefs();
        include ('views/list_chiefs.php');
}

?>




