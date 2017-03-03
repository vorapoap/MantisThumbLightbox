<?php
auth_reauthenticate( );
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );
layout_page_header( lang_get( 'plugin_format_title' ) );
layout_page_begin( 'manage_overview_page.php' );
print_manage_menu( 'manage_plugin_page.php' );
?>

<div class="container">
<h2>
You may want to modify following values in your config file. 
</h2>
<div class="container well">
<pre>

// Make sure this is big enough, the image bigger than this will not be previewed inline
$g_preview_attachments_inline_max_size <?php echo "// Currently = ".$GLOBALS['g_preview_attachments_inline_max_size']; ?>


// Max height for thumbnails for previewed images
$g_preview_max_height <?php echo "// Currently = ".$GLOBALS['g_preview_max_height']; ?>



</pre>
</div>

<?php
layout_page_end();