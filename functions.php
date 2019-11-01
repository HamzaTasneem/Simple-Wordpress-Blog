<?php
function sb_load_menus(){
    //all menus here: name_id => Name_to_be_shown_in_dashboard 
    register_nav_menus( array ( "primary" => __("Primary Menu")) );
}
function sb_load_css()
{
    // all css code here
    wp_enqueue_style("font1_css", get_template_directory_uri() . "/public/fonts/font_raleway.css");
    wp_enqueue_style("font2_css", get_template_directory_uri() . "/public/fonts/font_quicksand.css");
    wp_enqueue_style("style_css", get_template_directory_uri() . "/style.css");
    
    //css for spacial templates only
    if(is_page_template('about-template.php')){  
        wp_enqueue_style("about_css", get_template_directory_uri() . "/public/css/myself.css");
        wp_enqueue_style("icons_css", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
    }
}

function sb_load_js()
{   
    //all js code here 
    wp_enqueue_script("main_js", get_template_directory_uri() . "/public/js/main.js", array("jquery"), "", false);
}

//loadind settings
add_action( "init", "sb_load_menus" );              //adding menu action on website init
add_action("wp_enqueue_scripts", "sb_load_css");    //adding css in header
add_action("wp_enqueue_scripts", "sb_load_js");     //adding js in footer
add_theme_support( 'post-thumbnails' );             //adding featured image support in sb theme
add_theme_support( 'menus' );                       //adding menu feature support in sb theme

?>
