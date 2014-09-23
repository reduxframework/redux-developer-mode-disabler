<?php
    /**
     * The Redux Framework Disable dev_mode Plugin
     * A simple, truly extensible and fully responsive options framework
     * for WordPress themes and plugins. Developed with WordPress coding
     * standards and PHP best practices in mind.
     * Plugin Name:     Redux Developer Mode Disabler
     * Plugin URI:      http://wordpress.org/plugins/redux-developer-mode-disabler
     * Github URI:      https://github.com/ReduxFramework/redux-disable-devmode
     * Description:     A simple plugin to help the users of developers who ship a Redux based product with developer mode on. This plugin globally disables developer mode for all Redux instances.
     * Author:          Team Redux
     * Author URI:      http://reduxframework.com
     * Version:         1.0.0
     * Text Domain:     redux-framework
     * License:         GPL3+
     * License URI:     http://www.gnu.org/licenses/gpl-3.0.txt
     * Domain Path:     /ReduxFramework/ReduxCore/languages
     *
     * @package         ReduxFramework
     * @author          Dovy Paukstys <dovy@reduxframework.com>
     * @license         GNU General Public License, version 3
     * @copyright       2012-2014 Redux Framework
     */

    if ( ! function_exists( 'redux_disable_dev_mode_plugin' ) ) {
        function redux_disable_dev_mode_plugin( $redux ) {
            if ( $redux->args['opt_name'] != 'redux_demo' ) {
                $redux->args['dev_mode'] = false;
            }
        }

        add_action( 'redux/construct', 'redux_disable_dev_mode_plugin' );
    }

