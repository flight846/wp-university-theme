<!-- Theme interface with WP -->
<?php 
    /*
    * Define function to load main.css
    * @@Params arbitrary name, get stylesheet uri style.css in root
    * @@Return 
    */
    function university_files() {
        // load scripts
        wp_enqueue_script('static-scripts', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
        // load fonts
        wp_enqueue_style('roboto', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        // fonts link
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        // load css
        wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
    }
    /* 
    * Actions to Load css scripts to the head
    * @@params - to load script
    * @@return - add styles to  head
    */
    add_action('wp_enqueue_scripts', 'university_files');

    /*
    * Define function to add feature to theme
    * @@Params 
    * @@Return dynamic page title
    */
    function university_features() {
        // add menu location in admin
        register_nav_menu('headerMenuLocation', 'Header Menu Location');
        register_nav_menu('footerLocationOne', 'Footer Location One');
        register_nav_menu('footerLocationTwo', 'Footer Location Two');

        add_theme_support('title-tag');
    } 

    add_action('after_setup_theme', 'university_features');
?>