<?php
/**
 * @package		APCu Caching Opencart v2.x
 * @version     1.0
 * @author      Stergios Zgouletas <info@web-expert.gr>
 * @link        http://www.web-expert.gr
 * @copyright   Copyright (C) 2010 Web-Expert.gr All Rights Reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
**/

namespace Cache;
class APCU
{
	private $expire=1800;
	private $cache;

	public function __construct($expire)
	{
		if(!extension_loaded('apcu'))
		{
			exit('APCu is not installed on your webserver. Please request your WebHosting provider to install it or switch caching handler');
		}
		if(!defined('CACHE_PREFIX')) define('CACHE_PREFIX',HTTP_SERVER);
		$this->expire = $expire;
	}

	public function get($key)
	{
		return apcu_fetch(CACHE_PREFIX . $key);
	}

	public function set($key, $value)
	{
		$this->delete($key);
		return apcu_add(CACHE_PREFIX . $key, $value, $this->expire);
	}

	public function delete($key)
	{
		apcu_delete(CACHE_PREFIX . $key);
	}
	
	public function setExpire($expire)
	{
		$this->expire = $expire;
	}
}