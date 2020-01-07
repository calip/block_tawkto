<?php
/**
 * tawkto - Config
 * 
 * Live chat software to monitor and chat with visitors on your website or from a free customizable page.
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<h4><?= ___('Tawk.to Settings') ?></h4>
<p><?= ___('Get your Site ID and Widget ID Tawk.to here: <a href="https://dashboard.tawk.to/" target="_blank">Tawk.to Dashboard</a>.') ?></p>
<schlix-config:textbox config-key='str_site_id' label='<?= ___('Site ID') ?>' class='form-control' required='required'/>
<schlix-config:textbox config-key='str_widget_id' label='<?= ___('Widget ID') ?>' class='form-control' required='required'/>