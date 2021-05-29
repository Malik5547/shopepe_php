<?php
  ob_start();
  // include header.php file
  include("header.php");
?>

<?php

    /* include cart items if it is not empty */
    count($product->getData('cart')) ? include("template/_cart.php") : include("template/notFound/_cart_notFound.php");
    /* include cart items if it is not empty */

    /* include wishlist items if it is not empty */
    count($product->getData('wishlist')) ? include("template/_wishlist.php") : include("template/notFound/_wishlist_notFound.php");
    /* include wishlist items if it is not empty */

    /* include new phones */
        include("template/_new_phones.php");
    /* include banner area */

?>

<?php
  // include footer.php file
  include("footer.php");
?>