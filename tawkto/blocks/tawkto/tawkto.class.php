<?php
namespace Block;
/**
 * tawkto - Main Class
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
class tawkto extends \SCHLIX\cmsBlock
{
	public function Run()
	{
    global $__tawkto_loaded;
		if ($__tawkto_loaded !== 'loaded') // prevent the built-in duplicate blocks feature 
		{
      $site_id = $this->config['str_site_id'];
      $widget_id = $this->config['str_widget_id'];
      
			$__tawkto_loaded = 'loaded';
			$this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
		}
  }
}
