<?php

namespace xltxlm\resources\Config;

/**
 * 随机返回一个同等的配置信息;
 */
class ConfigRandom extends ConfigRandom\ConfigRandom_implements
{

    /**
     * ConfigRandom constructor.
     */
    public function __construct(array $Configs = [])
    {
        if ($Configs) {
            $this->setConfigs($Configs);
        }
    }

    public function getOneConfigDefine(): \xltxlm\resources\Config\ConfigDefine
    {
        if (empty($this->getConfigs())) {
            throw new \Exception("配置数组为空");
        }
        $index = array_rand($this->getConfigs());
        return $this->getConfigs()[$index];
    }


}