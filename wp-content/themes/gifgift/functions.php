<?php

add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array (
'name' => __( 'Custom Widget Area', 'blankslate' ),
'id' => 'custom-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Theme Options');
	acf_add_options_page('Gift Cards');
}
function register_footer_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_footer_menu' );

function wpdocs_codex_card_init() {
    $labels = array(
        'name'                  => _x( 'Gift Cards', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Gift Card', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Gift Cards', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Gift Card', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Gift Card', 'textdomain' ),
        'new_item'              => __( 'New Gift Card', 'textdomain' ),
        'edit_item'             => __( 'Edit Gift Card', 'textdomain' ),
        'view_item'             => __( 'View Gift Card', 'textdomain' ),
        'all_items'             => __( 'All Gift Cards', 'textdomain' ),
        'search_items'          => __( 'Search Gift Cards', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Gift Cards:', 'textdomain' ),
        'not_found'             => __( 'No cards found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No cards found in Trash.', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'card' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
    );
 
    register_post_type( 'card', $args );
}
 
add_action( 'init', 'wpdocs_codex_card_init' );

// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Categories', 'Categories General Name', 'text_domain' ),
		'singular_name'              => _x( 'gift_category', 'Categories Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Category', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'post_card', array( 'card' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );

//GIF

function gif_init() {
    $labels = array(
        'name'                  => _x( 'Gif', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Gif', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'All Gifs', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Gif', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Gif', 'textdomain' ),
        'new_item'              => __( 'New Gif', 'textdomain' ),
        'edit_item'             => __( 'Edit Gif', 'textdomain' ),
        'view_item'             => __( 'View Gif', 'textdomain' ),
        'all_items'             => __( 'All Gif', 'textdomain' ),
        'search_items'          => __( 'Search Gif', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Gif:', 'textdomain' ),
        'not_found'             => __( 'No gif found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No gif found in Trash.', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'gif' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
    );
 
    register_post_type( 'gif', $args );
}
 
add_action( 'init', 'gif_init' );

// Register Custom Taxonomy
function gif_taxonomy() {

    $labels = array(
        'name'                       => _x( 'GIF Categories', 'Categories General Name', 'text_domain' ),
        'singular_name'              => _x( 'gif_category', 'Categories Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Gif Category', 'text_domain' ),
        'all_items'                  => __( 'All Items', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'gif_category', array( 'gif' ), $args );

}
add_action( 'init', 'gif_taxonomy', 0 );

//GIF

function gif_orders() {
    $labels = array(
        'name'                  => _x( 'Gif Orders', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Gif Orders', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'All Orders', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Orders', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Order', 'textdomain' ),
        'new_item'              => __( 'New Order', 'textdomain' ),
        'edit_item'             => __( 'Edit Order', 'textdomain' ),
        'view_item'             => __( 'View Order', 'textdomain' ),
        'all_items'             => __( 'All Orders', 'textdomain' ),
        'search_items'          => __( 'Search Order', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Order:', 'textdomain' ),
        'not_found'             => __( 'No Order found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Order found in Trash.', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'gif_orders' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'custom-fields' ),
    );
 
    register_post_type( 'gif_orders', $args );
}
 
add_action( 'init', 'gif_orders' );

add_filter( 'wp_nav_menu_items', 'wti_loginout_menu_link', 10, 2 );

function wti_loginout_menu_link( $items, $args ) {
if ($args->theme_location == 'main-menu') {
     $items .= ' <li class="dropdown">';
     $items .= ' 
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">';
     $items .= 'My Account <span class="caret"></span></a>';
     $items .= '<ul class="dropdown-menu" role="menu">';
     if (is_user_logged_in()) {
     $items .= '<li><a href="'. site_url() .'/my-profile/">'. __("My Profile") .'</a></li>';
     $items .= '<li><a href="'. site_url() .'/my-orders/">'. __("My Orders") .'</a></li>';
     $items .= '<li><a href="'. wp_logout_url( site_url()) .'">'. __("Log Out") .'</a></li>';
  } else {
     $items .= '<li><a href="'. site_url('login') .'">'. __("Log In") .'</a></li>';
     // $items .= '<li><a href="'. site_url('register') .'">'. __("Register") .'</a></li>';
  }
     $items .= '<li><a href="'. site_url() .'/gift-cart/">'. __("My Selection") .'</a></li>';
     $items .= '</ul></li>';
}
   return $items;
}

//Ajax upload
add_action('wp_ajax_cvf_upload_files', 'cvf_upload_files');
add_action('wp_ajax_nopriv_cvf_upload_files', 'cvf_upload_files'); // Allow front-end submission 

function cvf_upload_files(){
    

  /* img upload */

 $condition_img=7;
 $img_count = count(explode( ',',$_POST["image_gallery"] )); 

 if(!empty($_FILES["my_file_upload"])){

 require_once( ABSPATH . 'wp-admin/includes/image.php' );
 require_once( ABSPATH . 'wp-admin/includes/file.php' );
 require_once( ABSPATH . 'wp-admin/includes/media.php' );
  
   
 $files = $_FILES["my_file_upload"];  
 $attachment_ids=array();
 $attachment_idss='';

 if($img_count>=1){
 $imgcount=$img_count;
 }else{
 $imgcount=1;
 }
  

 $ul_con='';

 foreach ($files['name'] as $key => $value) {            
   if ($files['name'][$key]) { 
    $file = array( 
     'name' => $files['name'][$key],
     'type' => $files['type'][$key], 
     'tmp_name' => $files['tmp_name'][$key], 
     'error' => $files['error'][$key],
     'size' => $files['size'][$key]
    ); 
    $_FILES = array ("my_file_upload" => $file); 
    
    
    foreach ($_FILES as $file => $array) {              
      
      if($imgcount>=$condition_img){ break; } 

     require_once(ABSPATH . "wp-admin" . '/includes/image.php');
     require_once(ABSPATH . "wp-admin" . '/includes/file.php');
     require_once(ABSPATH . "wp-admin" . '/includes/media.php');
     
     //$newupload = my_handle_attachment($file,$pid); 

     $attach_id = media_handle_upload( $file, $post_id );
      $attachment_ids[] = $attach_id; 

      $image_link = wp_get_attachment_url( $attach_id);
      $img_type = pathinfo( $image_link, PATHINFO_EXTENSION);
      if ($img_type == 'jpg' || $img_type == 'png' || $img_type == 'gif') {
         $imglink[]= $image_link;
        $ul_con = array_filter( $imglink  );
        $ul_con =  implode( ', ', $ul_con ); 

          //$ul_con = $ul_con;
         
      }else{
        $ul_con.= $image_link;
      }
    }
    if($imgcount>$condition_img){ break; } 
    $imgcount++;
   } 
  }

  
 } 
/*img upload */

 $image_gallery=$_POST['image_gallery'];

$attachment_idss = array_filter( $attachment_ids  );
$attachment_idss =  implode( ',', $attachment_idss );  

//$imgs = array_filter( $ul_con  );
//$imgs =  implode( ',', $imgs ); 

 //if($image_gallery){ $imgs=$image_gallery.",".$imgs;  }
 //if($image_gallery){ $imgs=$image_gallery.",".$imgs;  }


$arr = array();
$arr['attachment_idss'] = $attachment_idss;
$arr['ul_con'] =$ul_con; 

echo json_encode( $arr );
 die();
}

add_filter( 'manage_edit-gif_orders_columns', 'my_edit_gif_orders_columns' ) ;

function my_edit_gif_orders_columns( $columns ) {

  $columns = array(
    'cb' => '<input type="checkbox" />',
    'title' => __( 'GIF Orders' ),
    'content' => __( 'Email' ),
    'amount' => __( 'Amount' ),
    'rname' => __( 'Receiver Name' ),
    'status' => __( 'Status' ),
    'date' => __( 'Date' ),
  );

  return $columns;
}
add_action( 'manage_gif_orders_posts_custom_column', 'my_manage_gif_orders_columns', 10, 2 );

function my_manage_gif_orders_columns( $column, $post_id ) {
  global $post;

  switch( $column ) {

    /* If displaying the 'duration' column. */
    case 'content' :
      $content = the_content();
      if ( empty( $content ) )
        echo __( '' );
      else
        printf( __( '$%s' ), $content );
      break;

    case 'amount' :
      $amount = get_post_meta( $post_id, 'amount', true );
      if ( empty( $amount ) )
        echo __( '-' );
      else
        printf( __( '$%s' ), $amount );
      break;

    case 'rname' :
      $rname = get_post_meta( $post_id, 'rname', true );
      if ( empty( $rname ) )
        echo __( '-' );
      else
        printf( __( '%s' ), $rname );
      break;

      case 'status' :
      $status = get_post_meta( $post_id, 'status', true );
      if ( empty( $status ) )
        echo __( '-' );
      else
        printf( __( '%s' ), $status );
      break;
   
    default :
      break;
  }
}


// custom functions 
add_action( 'wp_ajax_load_search_results', 'load_search_results' );
add_action( 'wp_ajax_nopriv_load_search_results', 'load_search_results' );


function load_search_results() {


 if ($_GET['query']) {
   $search_data ="https://api.tenor.co/v1/search?tag=".$_GET['query']."&key=LIVDSRZULELA";
   $variable = json_decode(file_get_contents($search_data));
   

?>
  
         <div class="tab-content">
        <div class="col-md-12 masonry">
      <?php
        foreach ($variable->results as $key => $value) {    
  
          foreach ($value->media as $key => $value1) {         
      ?>  
          <div class="nopadding">
          <input type="radio" value="<?php echo $value1->gif->url; ?>" name="choose_gif" id="my-<?php echo $value1->gif->url; ?>" class="input-hidden choose_gif" />
            <label for="my-<?php echo $value1->gif->url; ?>"><img src="<?php echo $value1->gif->url ;?>"></label>
          </div>
      <?php 
          }
        }
      ?>
        </div> 
        </div>
    

<?php

  echo $result;
     die();
   }
}

function test_session () {
 global $wp_session;
 $wp_session = WP_Session::get_instance();
}
add_action( 'init', 'test_session' );



add_action( 'wp_ajax_add_foobar', 'prefix_ajax_add_foobar' );

function prefix_ajax_add_foobar() { 
  if(isset($_POST['data']))
  {   

     $_POST['data'] ;
     $datareal=explode("-", $_POST['data']); 
    // require_once( ABSPATH . 'wp-admin/includes/file.php' );
    // $url = $datareal[1];
    // $timeout_seconds = 5;
    // $temp_file = download_url( $url, $timeout_seconds );
    //   if ( !is_wp_error( $temp_file ) ) {
    //     $file = array(
    //       'name'     => basename($url), // ex: wp-header-logo.png
    //       'type'     => 'image/png',
    //       'tmp_name' => $temp_file,
    //       'error'    => 0,
    //       'size'     => filesize($temp_file),
    //     );
    //     $overrides = array(
    //       'test_form' => false,
    //       'test_size' => true,
    //     );

    //       $results = wp_handle_sideload( $file, $overrides );
    //   }
    //      $wp_session = WP_Session::get_instance();

            // $wp_session['gift_data']['amount'] = $wp_session['gift_data']['amount']+$datareal[2];
           // $wp_session['gift_data']['gif2_img_id'] = $datareal[1];
          /* more cookies */
           //setcookie('gif2_img_id',$datareal[1], time() + 3600, "/");

           // setcookie("gif2_img_id", $datareal[1], time() + ( 15 * 60 ), "/gif/");
          echo $datareal[1];

          // return true ;
  } 
}

function admin_default_page() {
  return '/';
}

add_filter('login_redirect', 'admin_default_page');
add_filter('show_admin_bar', '__return_false');
require_once "tangocard/vendor/autoload.php";
$platformName = 'GifGiftCard_Test'; // RaaS v2 API Platform Name
$platformKey = 'CDyCRNeJOjRfNOJIxwr$wadcE?&GLI@yPMBdSyJySSloQR'; 