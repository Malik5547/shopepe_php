<?php
  ob_start();
  // include header.php file
  include("header.php");
?>

<?php

    /* include cart template */
      include("template/_cart.php");
    /* include cart template */

    /* include wishlist template */
    include("template/_wishlist_template.php");
    /* include wishlist template */

    /* include new phones */
        include("template/_new_phones.php");
    /* include banner area */

?>

<?php
  // include footer.php file
  include("footer.php");
?>