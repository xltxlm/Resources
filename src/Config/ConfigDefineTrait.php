<?php

namespace xltxlm\resources\Config;

use xltxlm\resources\Features\ConnectionPool;

/**
 * 配置文件的定义;
 */
Trait ConfigDefineTrait
{
    use ConfigDefineTrait\ConfigDefineTrait_implements;

    public function __invoke()
    {
        $ConfigRandom = (new ConfigRandom([$this]));
        $ConnectionPool = (new ConnectionPool($ConfigRandom));
        return $ConnectionPool->__invoke();

    }


}