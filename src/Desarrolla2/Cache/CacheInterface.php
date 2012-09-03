<?php

/**
 * This file is part of the D2Cache proyect.
 * 
 * Description of CacheInterface
 *
 * @author : Daniel González <daniel.gonzalez@freelancemadrid.es> 
 * @file : CacheInterface.php , UTF-8
 * @date : Sep 4, 2012 , 12:45:25 AM
 */

namespace Desarrolla2\Cache;


interface CacheInterface
{

    /**
     * Delete a value from the cache
     * 
     * @param string $key
     */
    public function delete($key);

    /**
     * Retrieve the value corresponding to a provided key
     *     
     * @param string $key
     */
    public function get($key);

    /**
     * 
     * @return \Desarrolla2\Cache\Adapter\AdapterInterface $adapter
     */
    public function getAdapter();

    /**
     * Retrieve the if value corresponding to a provided key exist
     *
     * @param string $key
     */
    public function has($key);

    /**
     * * Add a value to the cache under a unique key
     * 
     * @param string $key
     * @param mixed $value
     * @param int $ttl
     */
    public function set($key, $value, $ttl = null);

    /**
     * Set Adapter interface
     * 
     * @param \Desarrolla2\Cache\Adapter\AdapterInterface $adapter
     */
    public function setAdapter(\Desarrolla2\Cache\Adapter\AdapterInterface $adapter);
}