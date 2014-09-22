<?php
//print_r(getdate(1409780832));
?>
<br/>
<u>Product</u><br/><br/>
<pre>
<?php
$test='O:8:"stdClass":21:{s:11:"revision_id";s:4:"2922";s:3:"sku";s:39:"services_7ca28278ecddb08da96055cbd03a0d";s:5:"title";s:27:"event posted by frodoenator";s:12:"revision_uid";s:3:"459";s:6:"status";s:1:"1";s:3:"log";s:0:"";s:18:"revision_timestamp";s:10:"1410875213";s:4:"data";b:0;s:10:"product_id";s:4:"2826";s:4:"type";s:7:"service";s:8:"language";s:0:"";s:3:"uid";s:3:"459";s:7:"created";s:10:"1410875213";s:7:"changed";s:10:"1410875213";s:14:"commerce_price";a:1:{s:3:"und";a:1:{i:0;a:3:{s:6:"amount";s:4:"1000";s:13:"currency_code";s:3:"USD";s:4:"data";a:1:{s:10:"components";a:0:{}}}}}s:21:"field_expiration_date";a:1:{s:3:"und";a:1:{i:0;a:4:{s:5:"value";s:19:"2014-09-19 04:09:00";s:8:"timezone";s:19:"America/Los_Angeles";s:11:"timezone_db";s:19:"America/Los_Angeles";s:9:"date_type";s:8:"datetime";}}}s:18:"field_months_after";a:0:{}s:14:"field_location";a:1:{s:3:"und";a:1:{i:0;a:3:{s:5:"value";s:13:"somewhere usa";s:6:"format";N;s:10:"safe_value";s:13:"somewhere usa";}}}s:17:"field_description";a:0:{}s:11:"field_image";a:0:{}s:11:"rdf_mapping";a:0:{}}';
print_r(unserialize($test));
echo "<hr/>";
?>

<u>Order</u><br/><br/>
<pre>
<?php
$test='O:8:"stdClass":36:{s:12:"order_number";s:3:"881";s:12:"revision_uid";s:3:"461";s:4:"mail";s:20:"colkowski@fitmoo.com";s:6:"status";s:17:"checkout_complete";s:3:"log";s:0:"";s:18:"revision_timestamp";i:1410876838;s:17:"revision_hostname";s:11:"10.18.8.100";s:4:"data";a:4:{s:12:"profile_copy";a:1:{s:25:"customer_profile_shipping";a:2:{s:8:"elements";a:3:{s:25:"commerce_customer_address";a:1:{s:3:"und";a:1:{i:0;b:1;}}s:11:"field_phone";a:1:{s:3:"und";a:1:{i:0;b:1;}}s:19:"field_customer_name";a:1:{s:3:"und";a:1:{i:0;b:1;}}}s:6:"status";b:1;}}s:14:"payment_method";s:42:"braintree_tr|commerce_payment_braintree_tr";s:20:"payment_redirect_key";s:43:"tjp5A_uELkzd4lGLTY6PfZd11hIPD7X7YtmGqXzS92M";s:43:"commerce_payment_order_paid_in_full_invoked";b:1;}s:8:"order_id";s:3:"881";s:4:"type";s:14:"commerce_order";s:3:"uid";s:3:"461";s:7:"created";s:10:"1410876818";s:7:"changed";i:1410876838;s:8:"hostname";s:11:"10.18.8.100";s:19:"commerce_line_items";a:1:{s:3:"und";a:1:{i:0;a:1:{s:12:"line_item_id";s:4:"2715";}}}s:20:"commerce_order_total";a:1:{s:3:"und";a:1:{i:0;a:3:{s:6:"amount";d:1000;s:13:"currency_code";s:3:"USD";s:4:"data";a:1:{s:10:"components";a:1:{i:0;a:3:{s:4:"name";s:10:"base_price";s:5:"price";a:3:{s:6:"amount";d:1000;s:13:"currency_code";s:3:"USD";s:4:"data";a:0:{}}s:8:"included";b:1;}}}}}}s:25:"commerce_customer_billing";a:1:{s:3:"und";a:1:{i:0;a:1:{s:10:"profile_id";s:3:"415";}}}s:26:"commerce_customer_shipping";a:1:{s:3:"und";a:1:{i:0;a:1:{s:10:"profile_id";s:3:"416";}}}s:18:"commerce_discounts";a:0:{}s:24:"field_commerce_sp_paypal";a:1:{s:3:"und";a:1:{i:0;a:1:{s:5:"value";s:1:"0";}}}s:16:"field_fitmoo_fee";a:0:{}s:15:"field_new_total";a:0:{}s:14:"field_tracking";a:0:{}s:18:"field_seller_email";a:0:{}s:12:"field_seller";a:0:{}s:24:"field_shipping_label_url";a:0:{}s:23:"field_confirmation_code";a:0:{}s:15:"field_buyer_com";a:0:{}s:16:"field_fitmoo_com";a:0:{}s:13:"field_referer";a:0:{}s:17:"field_referer_com";a:0:{}s:22:"field_shipping_type_id";a:0:{}s:22:"field_shipping_carrier";a:0:{}s:11:"rdf_mapping";a:0:{}s:15:"old_revision_id";s:4:"3785";s:11:"revision_id";s:4:"3786";}';
print_r(unserialize($test));
echo "<hr/>";
?>

<u>Line Item</u><br/><br/>
<pre>
<?php
$test='O:8:"stdClass":13:{s:12:"line_item_id";s:4:"2715";s:8:"order_id";s:3:"881";s:4:"type";s:7:"product";s:15:"line_item_label";s:39:"services_7ca28278ecddb08da96055cbd03a0d";s:8:"quantity";s:4:"1.00";s:7:"created";s:10:"1410876818";s:7:"changed";s:10:"1410876837";s:4:"data";a:0:{}s:19:"commerce_unit_price";a:1:{s:3:"und";a:1:{i:0;a:3:{s:6:"amount";s:4:"1000";s:13:"currency_code";s:3:"USD";s:4:"data";a:1:{s:10:"components";a:1:{i:0;a:3:{s:4:"name";s:10:"base_price";s:5:"price";a:3:{s:6:"amount";s:4:"1000";s:13:"currency_code";s:3:"USD";s:4:"data";a:1:{s:10:"components";a:0:{}}}s:8:"included";b:1;}}}}}}s:14:"commerce_total";a:1:{s:3:"und";a:1:{i:0;a:3:{s:6:"amount";s:4:"1000";s:13:"currency_code";s:3:"USD";s:4:"data";a:1:{s:10:"components";a:1:{i:0;a:3:{s:4:"name";s:10:"base_price";s:5:"price";a:3:{s:6:"amount";d:1000;s:13:"currency_code";s:3:"USD";s:4:"data";a:1:{s:10:"components";a:0:{}}}s:8:"included";b:1;}}}}}}s:16:"commerce_product";a:1:{s:3:"und";a:1:{i:0;a:1:{s:10:"product_id";s:4:"2826";}}}s:21:"commerce_display_path";a:1:{s:3:"und";a:1:{i:0;a:3:{s:5:"value";s:0:"";s:6:"format";N;s:10:"safe_value";s:0:"";}}}s:11:"rdf_mapping";a:0:{}}';

print_r(unserialize($test));
echo "<hr/>";
?>


<u>Event</u><br/><br/>
<pre>
<?php
//$test='';
//print_r(unserialize($test));
echo "<hr/>";
?>
