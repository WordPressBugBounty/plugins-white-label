<?php
/**
 * Plugin Name:       White Label
 * Plugin URI:        https://whitewp.com/
 * Description:       White Label WordPress and make life easier for your clients.
 * Version:           2.15.2
 * Author:            WhiteWP.com
 * Author URI:        https://whitewp.com/
 *
 * @package white-label
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * WHITEWP_Init int the plugin.
 */
class WHITEWP_Init
{
    /**
     * Access all plugin constants
     *
     * @var array
     */
    public $constants;
    /**
     * Access notices class.
     *
     * @var class
     */
    private $notices;

    /**
     * Plugin init.
     */
    public function __construct()
    {
        $this->constants = [
            'name' => 'White Label',
            'version' => '2.15.2',
            'slug' => plugin_basename(__FILE__, ' . php'),
            'base' => plugin_basename(__FILE__),
            'name_sanitized' => basename(__FILE__, '. php'),
            'path' => plugin_dir_path(__FILE__),
            'url' => plugin_dir_url(__FILE__),
            'file' => __FILE__,
        ];

        // Multisite
        if (is_multisite()) {
            $main_site_multisite_options = get_blog_option(get_main_site_id(), 'white_label_multisite');
            $this_sites_multisite_options = get_blog_option(get_current_blog_id(), 'white_label_multisite');

            $this->constants['multisite'] = [
                'main_site' => get_main_site_id(),
                'sub_site' => (!is_main_site() ? get_current_blog_id() : 0),
                'global_settings' => (isset($main_site_multisite_options['enable_global_settings']) && $main_site_multisite_options['enable_global_settings'] == 'on' ? true : false),
                'ignore_global_settings' => (isset($this_sites_multisite_options['ignore_global_settings']) && $this_sites_multisite_options['ignore_global_settings'] == 'on' ? true : false),
            ];
        }

        // Notices
        include_once plugin_dir_path(__FILE__).'classes/class-admin-notices.php';
        $this->notices = new white_label_admin_notices();

        // Activation
        register_activation_hook(__FILE__, [$this, 'activation']);

        // Dectivation
        register_deactivation_hook(__FILE__, [$this, 'deactivation']);

        // Load plugin when all plugins are loaded.
        add_action('init', [$this, 'load_textdomain']);
        add_action('init', [$this, 'init']);
    }

    /**
     * Load text domain.
     */
    public function load_textdomain()
    {
        load_plugin_textdomain('white-label', false, dirname(plugin_basename(__FILE__)).'/languages');
    }

    /**
     * Plugin init.
     */
    public function init()
    {
        // If White Label Pro below 2.0 with White Label Free 2.0+.
        if (function_exists('white_label_pro_check_for_core')) {
            if (current_user_can('administrator')) {
                $this->notices->add_notice(
                    'error',
                    __('Head\'s up - White Label Pro is standalone now. Please deactivate the free version and update to White Label Pro 2.0+', 'white-label')
                );
            }
            return false;
        }

        $this->dependencies();
    }

    public function activation()
    {
        $text = __(
            'Thank you for installing White Label! Get started using the plugin on your your site now.',
            'white-label'
        ).'<a style="margin-left: 15px;font-size: 13px;" class="button button-primary" href="'.esc_url(admin_url('/options-general.php?page=white-label')).'">'.__('Configure White Label', 'white-label').'</a>';
        $this->notices->add_notice(
            'success',
            $text
        );


    }

    public function deactivation()
    {
    }

    /**
     * Include dependencies
     */
    public function dependencies()
    {
        include_once ABSPATH.'wp-admin/includes/plugin.php';

        // Include our dependencies.
        include_once plugin_dir_path(__FILE__).'migration.php';
        // General Helper functions.
        include_once plugin_dir_path(__FILE__).'functions/helpers.php';
        // Admin Helper functions.
        include_once plugin_dir_path(__FILE__).'admin/functions.php';

        include_once plugin_dir_path(__FILE__).'admin/free.php';
        // Admin settings API.
        include_once plugin_dir_path(__FILE__).'classes/class-settings-api.php';
        // Create our settings page.
        include_once plugin_dir_path(__FILE__).'admin/class-admin-settings.php';
        // Start the admin page.
        $admin_settings = new white_label_Admin_Settings($this->constants);

        // Import & Export options class.
        include_once plugin_dir_path(__FILE__).'classes/class-import-export.php';
        $import_export = new white_label_Import_Export_Options();

        $sections = $admin_settings->sections();
        // Make sure the general sections isn't imported/exported.
        if (isset($sections['white_label_general'])) {
            unset($sections['white_label_general']);
        }

        $import_export->set_completed_message(__('Success! White Label settings has been imported. Please set your White Label Administrators as they differ from site to site.', 'white-label'));
        $import_export->set_option_keys($sections);
        $import_export->set_option_page_slug('white-label');

        $enable_white_label = white_label_get_option('enable_white_label', 'white_label_general', false);

        if ($enable_white_label === 'on') {
            include_once plugin_dir_path(__FILE__).'functions/front-end.php';
            include_once plugin_dir_path(__FILE__).'functions/login-page.php';
            include_once plugin_dir_path(__FILE__).'functions/dashboard.php';
            include_once plugin_dir_path(__FILE__).'functions/custom-dashboard-page.php';

            include_once plugin_dir_path(__FILE__).'functions/menus.php';
            include_once plugin_dir_path(__FILE__).'functions/plugins.php';
            include_once plugin_dir_path(__FILE__).'functions/themes.php';
            include_once plugin_dir_path(__FILE__).'functions/tweaks.php';
        }
        
        // Elementor
        if (is_plugin_active('elementor/elementor.php') || is_plugin_active('elementor-pro/elementor-pro.php')) {
            include_once $this->constants['path'].'functions/plugins-elementor.php';
        }

    }
}

$white_label = new WHITEWP_Init();