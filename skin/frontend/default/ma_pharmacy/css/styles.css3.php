<?php
    header('Content-type: text/css; charset: UTF-8');
    header('Cache-Control: must-revalidate');
    header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
    $url = $_REQUEST['url'];
?>

.products-grid .item-inner:hover,
.ma-featuredproductslider-container .item-inner:hover
{
	-moz-box-shadow: 0 0 3px 0 #ccc;
	-webkit-box-shadow: 0 0 3px 0 #ccc;
	box-shadow: 0 0 3px 0 #ccc;
}

.products-grid .actions .link-wishlist,
.products-grid .actions .link-compare,
.products-grid .actions .product-detail a,
.products-grid .item-inner:hover .actions,
.ma-newproductslider-container .flex-direction-nav a,
.ma-featured-vertscroller-wrap .jcarousel-next-vertical, 
.ma-featured-vertscroller-wrap  .jcarousel-prev-vertical,
.ma-thumbnail-container .flex-direction-nav a,
.ma-banner7-container .flex-control-paging li a,
#back-top,
.product-prev,
.product-next
{
	-webkit-transition: 0.5s;
	-moz-transition: 0.5s;
	transition: 0.5s;
}
#back-top
{
	-webkit-border-radius: 25px;
	-moz-border-radius: 25px;
	border-radius: 25px;
	behavior: url(<?php echo $url; ?>css/css3.htc);
}

.header .form-search,
.product-qty
{
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	behavior: url(<?php echo $url; ?>css/css3.htc);
}
.products-list button.btn-cart span span,
.product-view button.btn-cart span span
{
	-webkit-border-radius: 0 3px 3px 0;
	-moz-border-radius: 0 3px 3px 0;
	border-radius: 0 3px 3px 0;
	behavior: url(<?php echo $url; ?>css/css3.htc);
}
.products-grid button.btn-cart span
{
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	behavior: url(<?php echo $url; ?>css/css3.htc);
}
.ma-footer-static .f-address-icon,
.ma-footer-static .f-email-icon,
.ma-footer-static .f-phone-icon,
.footer-social li,
#twitter_update_list .icon-tweet,
{
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
	behavior: url(<?php echo $url; ?>css/css3.htc);
}
.product-view .product-shop .price-box
{
	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;
	behavior: url(<?php echo $url; ?>css/css3.htc);
}