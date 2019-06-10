<?php
/**
 * Template Name: User request Template
 */

/**
 * The template for user request page
 *
 * @package dazzling
 */


get_header();
global $wpdb;
$email_key= base64_decode($_GET['key']);
if(!empty($_POST['btn'])){
    $url= get_site_url() . '/wp-login.php';
    if ( $_POST['btn']=='Accept' ) {
    $update_array = array('user_status' => 1);
    $wpdb->update("{$wpdb->prefix}users",$update_array,array( 'user_email' => $email_key ));
    wp_redirect( $url );
    exit;
    }else {
        $update_array = array('user_status' => -1);
        $wpdb->update("{$wpdb->prefix}users",$update_array,array( 'user_email' => $email_key ));   
        wp_redirect( $url );
        exit;
}

}


?>
 <form method="post">
		<h3>User account with below details has been created.Please accept or deny the request</h3>
		 Email:-<b><?php echo esc_attr($email_key); ?></b>
         <div class="clearfix"></div>
         <div class="divider-40"></div>
         <input type="submit" name="btn" value="Accept" />
         <input type="submit" name="btn" value="Deny" />
</form>

<?php //get_footer(); ?>

