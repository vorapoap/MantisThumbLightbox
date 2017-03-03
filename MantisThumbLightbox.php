<?php
class MantisThumbLightboxPlugin extends MantisPlugin {
    function register() {
        $this->name = 'Thumb Lightbox';    # Proper name of plugin
        $this->description = 'Preview inline images turns into Lightbox';    # Short description of the plugin
        $this->page = 'info';           # Default plugin page

        $this->version = '1.0';     # Plugin version string
        $this->requires = array(    # Plugin dependencies, array of basename => version pairs
            'MantisCore' => '2.0.0, >= 2.0.0',  #   Should always depend on an appropriate version of MantisBT
            );

        $this->author = 'Vorapoap Lohwongwatana';         # Author/team name
        $this->contact = 'vorapoap@gmail.com';        # Author/team e-mail address
        $this->url = 'https://github.com/vorapoap/MantisThumbLightbox';            # Support webpage
    }
    function hooks() {
        return array(
            'EVENT_CORE_READY' => 'hookCoreReady',
            'EVENT_LAYOUT_CONTENT_BEGIN' => 'hookLayoutContentBegin',
        );
    }
    function hookLayoutContentBegin() {
        if (!is_writable("plugins/MantisThumbLightbox/cache")) {
            echo '<div class="alert alert-danger" role="alert">Please make "plugins/MantisThumbLightbox/cache" writable.</div>';
        }
    }
    function hookCoreReady() {
        global $g_scripts_included, $g_stylesheets_included;
        $g_scripts_included[] = '../plugins/MantisThumbLightbox/js/lightbox-loader.js';
        $g_scripts_included[] = '../plugins/MantisThumbLightbox/assets/lightbox2/dist/js/lightbox.js';
        $g_stylesheets_included[] = '/plugins/MantisThumbLightbox/assets/lightbox2/dist/css/lightbox.css';
        //$g_preview_attachments_inline_max_size = 3000000;
        //$g_preview_max_height = 500;

    }

}
