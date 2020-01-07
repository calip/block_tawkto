<?php
/**
 * tawkto - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
 * 
 * Live chat software to monitor and chat with visitors on your website or from a free customizable page.
 * 
 * @copyright 2019 calip
 *
 * @license MIT
 *
 * @package tawkto
 * @version 1.0
 * @author  Alip <asalip.putra@gmail.com>
 * @link    https://github.com/calip/block_tawkto
 */
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($site_id && $widget_id): ?>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/<?= ___h($site_id) ?>/<?= ___h($widget_id) ?>';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
<?php else: ?>
    <!-- NOTE - Tawk.to Site ID and widget ID was not set up correctly - please add Site ID and widget ID -->
    <script>console.error("Tawk.to Site ID and Widget ID has not been set from configuration");</script>
<?php endif ?>