<?php

  if(!defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN')) {
    exit();
  }
  else {
    delete_option('widget_mostpopulartags');
  }
  
?>