<?php
/**
 *
 * @file          include.php
 * @author        Nils Laumaillé
 * @version       2.2.1
 * @copyright     (c) 2009-2013 Nils Laumaillé
 * @licensing     GNU AFFERO GPL 3.0
 * @link
 */
// DONT'T CHANGE BELOW THIS LINE
global $settings, $languages_list;

$k['version'] = "2.2.1";
$k['tool_name'] = "TeamPass";
$k['jquery-version'] = "1.8.3";
$k['jquery-ui-version'] = "1.9.2";
$k['jquery-ui-theme'] = "overcast";
$k['one_month_seconds'] = 2592000;
$k['image_file_ext'] = array('jpg', 'gif', 'png', 'jpeg', 'tiff', 'bmp');
$k['office_file_ext'] = array('xls', 'xlsx', 'docx', 'doc', 'csv', 'ppt', 'pptx');
$k['admin_full_right'] = true;
// Management Pages
$mngPages = array(
    'manage_users' => 'users.php',
    'manage_folders' => 'folders.php',
    'manage_roles' => 'roles.php',
    'manage_views' => 'views.php',
    'manage_main' => 'admin.php',
    'manage_settings' => 'admin.settings.php'
   );
