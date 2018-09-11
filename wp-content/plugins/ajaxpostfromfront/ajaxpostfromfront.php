/*
Plugin Name: Ajax post from front
Plugin URI: 
Description:Allows to post from front end
Author: Abbas Suterwala
Version: 
Author URI: 
*/
define('APFSURL', WP_PLUGIN_URL."/".dirname( plugin_basename( __FILE__ ) ) );
define('APFPATH', WP_PLUGIN_DIR."/".dirname( plugin_basename( __FILE__ ) ) );

function apf_enqueuescripts()
{
    wp_enqueue_script('apf', APFSURL.'/js/apf.js', array('jquery'));
    wp_localize_script( 'apf', 'apfajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}
add_action('wp_enqueue_scripts', apf_enqueuescripts);