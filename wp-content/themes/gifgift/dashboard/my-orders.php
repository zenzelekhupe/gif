<?php /* Template Name: My Orders*/ ?>
<?php get_header();?>
<div class="main-inner-page">
<div class="container">
<div class="inner-pages-inner">
<div class="diff">
<?php if (is_user_logged_in()) { ?>
  <h1><span><?php the_title();?></span></h1>
  <div class="col-sm-12">
  <table id="example" class="table table-striped">
    <thead>
      <tr>
        <th>Order ID</th>
        <th>Receiver Email</th>
        <th>Receiver Name</th>
        <th>Amount</th>
        <th>Card</th>
        <th>GIF</th>
        <th>Second GIF</th>
        <th>Message</th>
        <th>Date</th>
      </tr>
    </thead>
    <?php global $wpdb, $current_user;
    //$wpdb->show_errors;
      get_currentuserinfo();
    $results = $wpdb->get_results( "SELECT * FROM gif_orders WHERE email = '$current_user->user_email' ORDER BY id DESC", OBJECT );
 	//$wpdb->print_error();
    ?>
    <tbody>
    <?php foreach ($results as $order) { ?>
      <tr>
        <td><?php echo $order->order_id;?></td>
        <td><?php echo $order->receiver_email;?></td>
        <td><?php echo $order->receiver_name;?></td>
        <td>$<?php echo $order->amount;?></td>
        <td><img width="100" src="<?php echo $order->card;?>"></td>
        <td><img width="100" src="<?php echo $order->gif1;?>"></td>
        <td><?php if($order->gif2):?><img width="100" src="<?php echo $order->gif2;?>"><?php endif;?></td>
        <td><?php echo $order->message;?></td>
        <td><?php echo date('d-M-Y', strtotime($order->date_created));?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
 </div>
  <?php } ?>
</div>
</div>
</div>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#example').DataTable( {
		        "order": [[ 8, "desc" ]]
			} );
		} );
	</script>
<?php get_footer();?>