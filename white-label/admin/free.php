<?php
/**
 * Free White Label functions.
 *
 * @package White Label
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Add White Label Pro features upsell to Upgrade section.
 *
 * @return void
 */
function white_label_free_upgrade()
{
    echo '
    <div class="white-label-subsection white-label-custom-tab">
        <div style="padding:0 30px; margin-bottom:60px;">
            <h1 style="margin-bottom:20px;">
                <a href="https://whitewp.com/pro?utm_source=plugin_white_label&utm_content=upgrade" target="_blank">Get White Label Pro</a>
            </h1>

            <p><b>Give every client site a fully branded WordPress experience.</b> Hide third-party logos and upsells, change the login URL, white label Yoast SEO, Gravity Forms, and 20+ more features.</p>
            <a href="https://whitewp.com/pricing?utm_source=plugin_white_label&utm_content=upgrade" target="_blank" class="white-label-learn-more" style="margin:20px auto; width:160px;">View Pricing Plans</a>
            <p style="font-size:12px;">14-day money-back guarantee &middot; 1 year of updates &amp; support included</p>
        </div>

        <h3>White Label Pro Features</h3>

        <div class="white-label-grid">
            <div>
                <a target="_blank" href="https://whitewp.com/white-label-yoast-seo/?utm_source=plugin_white_label&utm_content=upgrade">
                    <img src="https://whitewp.com/wp-content/uploads/2025/07/feature-white-label-yoast-seo-300x157.png">
                </a>
                <h3>White Label Yoast SEO</h3>
                <p>Customize the branding, remove premium upsells, and hide notifications in Yoast SEO.</p>
            </div>

            <div>
                <a target="_blank" href="https://whitewp.com/white-label-gravity-forms/?utm_source=plugin_white_label&utm_content=upgrade">
                    <img src="https://whitewp.com/wp-content/uploads/2025/01/feature-white-label-gravity-forms-300x158.png">
                </a>
                <h3>White Label Gravity Forms</h3>
                <p>Customize Gravity Forms branding and settings to control what your clients see.</p>
            </div>

            <div>
                <a target="_blank" href="https://whitewp.com/documentation/article/rename-wordpress-admin-menus/?utm_source=plugin_white_label&utm_content=upgrade">
                    <img src="https://whitewp.com/wp-content/uploads/2022/04/featured-rename-wordpress-admin-menus-300x158.png">
                </a>
                <h3>Rename Admin Menus</h3>
                <p>Rename any sidebar menu item to match your brand or simplify navigation for clients.</p>
            </div>

            <div>
                <a target="_blank" href="https://whitewp.com/documentation/article/wordpress-login-url/?utm_source=plugin_white_label&utm_content=upgrade">
                    <img src="https://whitewp.com/wp-content/uploads/2024/10/featured-wordpress-login-url-300x158.png">
                </a>
                <h3>Change Login URL</h3>
                <p>Change the default WordPress login URL to an address of your own choosing.</p>
            </div>

            <div>
                <a target="_blank" href="https://whitewp.com/documentation/article/change-wordpress-plugin-details/?utm_source=plugin_white_label&utm_content=upgrade">
                    <img src="https://whitewp.com/wp-content/uploads/2022/06/featured-change-wordpress-plugin-details-300x158.png">
                </a>
                <h3>Change Plugin Details</h3>
                <p>Rename any plugin in the Plugins screen — hide third-party names and links from clients.</p>
            </div>

            <div>
                <a target="_blank" href="https://whitewp.com/documentation/article/rename-wordpress-theme/?utm_source=plugin_white_label&utm_content=upgrade">
                    <img src="https://whitewp.com/wp-content/uploads/2024/02/rename-wordpress-theme-300x158.png">
                </a>
                <h3>Rename WordPress Themes</h3>
                <p>Rename WordPress themes inside the admin to obscure what themes are installed and active.</p>
            </div>

            <div>
                <a target="_blank" href="https://whitewp.com/documentation/article/hide-wordpress-update-nags/?utm_source=plugin_white_label&utm_content=upgrade">
                    <img src="https://whitewp.com/wp-content/uploads/2022/04/featured-hide-wordpress-update-nags-300x158.png">
                </a>
                <h3>Hide Update Nags</h3>
                <p>Keep the admin clean by hiding WordPress update notifications from non-admin users.</p>
            </div>

            <div>
                <a target="_blank" href="https://whitewp.com/white-label-searchwp/?utm_source=plugin_white_label&utm_content=upgrade">
                    <img src="https://whitewp.com/wp-content/uploads/2026/01/feature-white-label-searchwp-300x158.png">
                </a>
                <h3>White Label SearchWP</h3>
                <p>Replace SearchWP branding and control which menus and settings clients can access.</p>
            </div>

            <div>
                <a target="_blank" href="https://whitewp.com/documentation/article/add-css-to-wordpress-admin/?utm_source=plugin_white_label&utm_content=upgrade">
                    <img src="https://whitewp.com/wp-content/uploads/2023/04/featured-add-css-to-wordpress-admin-300x158.png">
                </a>
                <h3>Insert Custom CSS</h3>
                <p>Add custom CSS to the WordPress admin for a deeper level of branding and customization.</p>
            </div>

        </div>

        <div style="padding:0 30px; margin:60px 0 30px 0;">
            <h3>Additional White Label Pro Features</h3>
            <p style="line-height:145%;">
            <strong>Plus:</strong> Change Admin Menu Icons &middot; Rename Admin Bar Items &middot; Hide Admin Bar Items &middot; Remove Dashboard Widgets &middot; Remove Admin Notifications &middot; Remove Screen Options Button &middot; Remove Help Button &middot; Login Redirect &middot; Change Default Email Settings &middot; Change Theme Screenshots &middot; Remove Front-End Admin Bar &middot; Disable Admin Email Verification &middot; and more...
            </p>
            <a href="https://whitewp.com/pro?utm_source=plugin_white_label&utm_content=upgrade" target="_blank" class="white-label-learn-more" style="margin:20px auto; width:260px;">See the Full Feature List</a>
        </div>
    </div>
    ';
}

add_action('white_label_form_bottom_white_label_upgrade', 'white_label_free_upgrade');

/**
 * Gravity Forms Custom Tab.
 *
 * @return void
 */
function white_label_plugins_gravity_forms()
{
    echo '
        <div class="white-label-subsection white-label-custom-tab">
            <div class="white-label-custom-tab-left">
                <p>
                <a target="_blank" href="https://whitewp.com/pro/">White Label Pro</a> offers features designed to help you white label the popular 
                Gravity Forms plugin. You can use White Label Pro to customize the interface and feature set of Gravity Forms in a variety of ways.
                </p>

                <h4>Gravity Forms Features</h4>
                
                <ul>
                    <li>
                        <a target="_blank" href="https://whitewp.com/documentation/article/gravity-forms-branding/">Gravity Forms Branding</a>
                        <ul>
                            <li>Hide Logo</li>
                            <li>Replace Name</li>
                        </ul>
                    </li>
                    <li><a target="_blank" href="https://whitewp.com/documentation/article/gravity-forms-templates/">Gravity Forms Templates</a></li>
                    <li><a target="_blank" href="https://whitewp.com/documentation/article/gravity-forms-toolbar-links/">Gravity Forms Toolbar Links</a></li>
                    <li><a target="_blank" href="https://whitewp.com/documentation/article/gravity-forms-settings/">Gravity Forms Settings</a></li>
                    <li><a target="_blank" href="https://whitewp.com/documentation/article/gravity-forms-add-ons/">Gravity Forms Add-Ons</a></li>
                </ul>
            </div>

            <div class="white-label-custom-tab-right">
                <a target="_blank" href="https://whitewp.com/white-label-gravity-forms/">
                    <img src="https://whitewp.com/wp-content/uploads/2025/01/feature-white-label-gravity-forms-300x158.png">
                </a>
                <h3>White Label Gravity Forms</h3>
                <p>We have written a complete guide on how to white label Gravity Forms using all of the features of our plugin.</p>
                <a class="white-label-learn-more" target="_blank" href="https://whitewp.com/white-label-gravity-forms/">Learn More</a>
            </div>
        </div>
    ';

    echo '</div>'; // This closing div needs to be here.
}

add_action('white_label_settings_tab_white_label_plugins_gravity_forms', 'white_label_plugins_gravity_forms');

/**
 * SearchWP Custom Tab.
 *
 * @return void
 */
function white_label_plugins_searchwp()
{
    echo '
        <div class="white-label-subsection white-label-custom-tab">
            <div class="white-label-custom-tab-left">
                <p>
                <a target="_blank" href="https://whitewp.com/pro/">White Label Pro</a> offers features designed to help you white label the popular 
                SearchWP plugin. You can use White Label Pro to customize the interface and feature set of SearchWP in a variety of ways.
                </p>

                <h4>SearchWP Features</h4>
                
                <ul>
                    <li>
                        <a target="_blank" href="https://whitewp.com/documentation/article/searchwp-branding/">SearchWP Branding</a>
                        <ul>
                            <li>Replace Name</li>
                            <li>Hide Logo</li>
                        </ul>
                    </li>
                    <li><a target="_blank" href="https://whitewp.com/documentation/article/hide-searchwp-menus/">SearchWP Header Menu</a></li>
                    <li><a target="_blank" href="https://whitewp.com/documentation/article/hide-searchwp-menus/">SearchWP Algorithm Menu</a></li>
                    <li><a target="_blank" href="https://whitewp.com/documentation/article/hide-searchwp-menus/">SearchWP Settings Menu</a></li>
                    <li><a target="_blank" href="https://whitewp.com/documentation/article/hide-searchwp-menus/">SearchWP Tools Menu</a></li>
                    <li><a target="_blank" href="https://whitewp.com/documentation/article/hide-searchwp-upsells/">SearchWP Upsells</a></li>
                </ul>
            </div>

            <div class="white-label-custom-tab-right">
                <a target="_blank" href="https://whitewp.com/white-label-searchwp/">
                    <img src="https://whitewp.com/wp-content/uploads/2026/01/feature-white-label-searchwp-300x158.png">
                </a>
                <h3>White Label SearchWP</h3>
                <p>We have written a complete guide on how to white label SearchWP using all of the features of our plugin.</p>
                <a class="white-label-learn-more" target="_blank" href="https://whitewp.com/white-label-searchwp/">Learn More</a>
            </div>
        </div>
    ';

    echo '</div>'; // This closing div needs to be here.
}

add_action('white_label_settings_tab_white_label_plugins_searchwp', 'white_label_plugins_searchwp');

/**
 * Yoast SEO Custom Tab.
 *
 * @return void
 */
function white_label_plugins_yoast_seo()
{
    echo '
        <div class="white-label-subsection white-label-custom-tab">
            <div class="white-label-custom-tab-left">
                <p>
                <a target="_blank" href="https://whitewp.com/pro/">White Label Pro</a> offers features designed to help you white label the popular 
                Yoast SEO plugin. You can use White Label Pro to customize the interface and feature set of Yoast SEO in a variety of ways.
                </p>

                <h4>Yoast SEO Features</h4>
                
                <ul>
                    <li>
                        <a target="_blank" href="https://whitewp.com/documentation/article/yoast-seo-branding/">Yoast SEO Branding</a>
                        <ul>
                            <li>Replace Name</li>
                            <li>Hide Logo</li>
                            <li>Hide Notification</li>
                            <li>Hide Links</li>
                        </ul>
                    </li>
                    <li><a target="_blank" href="https://whitewp.com/documentation/article/hide-yoast-seo-helpscout-beacon/">Yoast SEO Help Scout Beacon</a></li>
                    <li><a target="_blank" href="https://whitewp.com/documentation/article/hide-yoast-seo-premium-upsells/">Yoast SEO Premium Upsells</a></li>
                </ul>
            </div>

            <div class="white-label-custom-tab-right">
                <a target="_blank" href="https://whitewp.com/white-label-yoast-seo/">
                    <img src="https://whitewp.com/wp-content/uploads/2025/07/feature-white-label-yoast-seo-300x157.png">
                </a>
                <h3>White Label Yoast SEO</h3>
                <p>We have written a complete guide on how to white label Yoast SEO using all of the features of our plugin.</p>
                <a class="white-label-learn-more" target="_blank" href="https://whitewp.com/white-label-yoast-seo/">Learn More</a>
            </div>
        </div>
    ';

    echo '</div>'; // This closing div needs to be here.
}

add_action('white_label_settings_tab_white_label_plugins_yoast_seo', 'white_label_plugins_yoast_seo');