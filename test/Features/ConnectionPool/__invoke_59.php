<?php

namespace xltxlm\resources\test\Features\ConnectionPool;

use xltxlm\resources\Config\ConfigRandom;
use xltxlm\resources\Features\ConnectionPool;
use xltxlm\resources\test\ConfigDefineread;

/**
 *
 */
class __invoke_59
{

    public function __invoke()
    {
        $configs = [];
        $configs[] = new redisconfiga;
        $ConfigRandom = (new ConfigRandom($configs));
        $setConfigRandom = (new ConnectionPool())
            ->setConfigRandom($ConfigRandom);
        for ($i = 0; $i <= 10; $i++) {
            $tns = $setConfigRandom
                ->__invoke();

            \xltxlm\helper\Util::d($tns);
        }
    }

}

class redisconfiga extends ConfigDefineread
{
    protected $Tns = __LINE__;
}