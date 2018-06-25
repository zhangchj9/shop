<?php
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2017/3/4
 * Time: 14:51
 */

namespace BLMYX01\Config;


use App\Configuration;
use BLMYX01\Exception\UnConfigurableException;

trait ConfigureHelper
{
    public function getConfig($key, $defaultValue = null)
    {
        if (!isset($this->configuration) || !isset($this->configuration->config[$key]) || empty($this->configuration->config[$key]))
            return $defaultValue;
        return $this->configuration->config[$key];
    }

    public function getBoolConfig($key, $defaultValue = false)
    {
        $default = $defaultValue ? 'true' : 'false';
        return $this->getConfig($key, $default) == 'true';
    }

    /**
     * @return array
     */
    public abstract function getConfigKeys();

    /**
     * @param array $array
     * @return boolean
     * @throws UnConfigurableException
     */
    public function saveConfig($array)
    {
        if (!$this->configuration) {
            $configuration = $this->innerSetConfigKeys(new Configuration(), $array);
            return $this->configuration()->save($configuration);
        }
        return $this->innerSetConfigKeys($this->configuration, $array)->save();
    }

    /**
     * @param Configuration $configuration
     * @param $array
     * @return Configuration
     */
    private function innerSetConfigKeys(Configuration $configuration, $array)
    {
        $config = $configuration->config;
        foreach ($array as $key => $value) {
            if (in_array($key, $this->getConfigKeys())) {
                $config[$key] = $value;
            }
        }
        $configuration->config = $config;
        return $configuration;
    }

}