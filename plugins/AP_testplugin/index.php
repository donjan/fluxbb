<?php

// Make sure no one attempts to run this script "directly"
if (!defined('PUN'))
  exit;

// Tell admin_loader.php that this is indeed a plugin and that it is loaded
define('PUN_PLUGIN_LOADED', 1);

// Specify what hooks we want
$myhooks = array('first_in_body');

// Make the hook system work on the plugin side. The hook_handler is highly
// recommended, but in case you want partial hooking or manual control, you can
// also use the *_hooks functions (in include/functions.php) directly.
if (!hook_handler($myhooks))
  return;

// Display the admin navigation menu
generate_admin_menu($plugin);

echo '<p>Configuration interface for test plugin</p>';

// Show the activation/deactivation button
hook_button($myhooks);

?>
