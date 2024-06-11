<?php
/*
Plugin Name:  Ic Easy Email Marketing
Plugin URI:   https://idechy.ir/
Description:  ایمیل اختصاصی ویزا لاین
Version:      1.0
Author:       idechy
Author URI:   https://idechy.ir/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wpb-tutorial
Domain Path:  /languages
*/


if ( ! defined( 'ABSPATH' ) ) {
    exit();
  }


// function for add items in wp-admin menu
  function custom_email_menu() {
    add_menu_page(
        'Custom Email',
        'ایمیل - ویزالاین',
        'manage_options',
        'custom-email',
        'Email_visaline_page',
        'data:image/svg+xml;base64,' . base64_encode(
            '<svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 661.58 661.58"><path class="cls-1" d="m352.84 507.218 242.58-242.58 66.158 66.157-242.58 242.58z"/><path class="cls-1" d="m396.95 595.42-66.16 66.16L88.21 419l242.58-242.58 66.16 66.16L220.53 419z"/><path class="cls-1" d="M573.37 242.58 330.79 485.16 264.63 419l176.42-176.42L264.63 66.16 330.79 0z"/><path class="cls-1" d="m-.003 330.796 242.58-242.58 66.157 66.157-242.58 242.58z"/></svg>'),
        22
        );

    add_submenu_page(
        null, // This makes the submenu page hidden from the main menu
        'Edit Email',
        'Edit Email',
        'manage_options',
        'edit-email',
        'edit_comment_page'
    );
    add_submenu_page(
        'custom-email', // Parent menu slug
        'تنظیمات', // Page title
        'تنظیمات', // Menu title
        'manage_options', // Capability
        'custom-email-setting', // Menu slug
        'Email_visaline_setting_page', // Callback function
        3
    );
    add_submenu_page(
        'custom-email', // Parent menu slug
        'مخاطبین', // Page title
        'مخاطبین', // Menu title
        'manage_options', // Capability
        'contact-setting', // Menu slug
        'Email_visaline_contact_page', // Callback function
        1
    );

    add_submenu_page(
        'custom-email', // Parent menu slug
        'افزودن مخاطب', // Page title
        'افزودن مخاطب', // Menu title
        'manage_options', // Capability
        'add-contact', // Menu slug
        'Email_visaline_add_contact_page', // Callback function
        2
    );
}
// Add Function menu to admin
add_action('admin_menu', 'custom_email_menu');


// function for item Pages 

function Email_visaline_setting_page(){
    echo '<h1>تنظیمات ایمیل ویزالاین </h1>';

}

function Email_visaline_page(){
    echo '<h1> ایمیل ویزالاین </h1>';

}

function Email_visaline_contact_page(){
    echo '<h1>مخاطبین  ویزالاین </h1>';

}
  

function Email_visaline_add_contact_page(){
    echo '<h1افزودن مخاطب</h1>';

}
    
    