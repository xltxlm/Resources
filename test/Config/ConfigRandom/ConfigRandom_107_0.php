<?php

namespace xltxlm\resources\test\Config\ConfigRandom;

use xltxlm\resources\Config\ConfigDefine;
use xltxlm\resources\Config\ConfigRandom;
use xltxlm\resources\test\ConfigDefineread;

/**
 *
 */
class ConfigRandom_107_0
{

    public function __invoke()
    {
        $configs = [];
        $configs[] = new class extends ConfigDefineread
        {
            public function getTns(): string
            {
                return __LINE__;
            }

        };
        $configs[] = new class extends ConfigDefineread
        {
            public function getTns(): string
            {
                return __LINE__;
            }

        };
        $configs[] = new class extends ConfigDefineread
        {
            public function getTns(): string
            {
                return __LINE__;
            }

        };
        $configs[] = new class extends ConfigDefineread
        {
            public function getTns(): string
            {
                return __LINE__;
            }

        };

        $ConfigRandom = (new ConfigRandom($configs));
        $config = $ConfigRandom->getOneConfigDefine();
        \xltxlm\helper\Util::d($config->getTns());

        $config = $ConfigRandom->getOneConfigDefine();
        \xltxlm\helper\Util::d($config->getTns());

    }

}
