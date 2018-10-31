<?php

namespace xltxlm\resources\test\Config\ConfigDefine;

use xltxlm\resources\test\ConfigDefineread;

/**
 *
 */
class __invoke_60
{

    public function __invoke()
    {
        $a = (new ConfigDefineread)
            ->__invoke();

        \xltxlm\helper\Util::d($a);
        \xltxlm\helper\Util::d($a->getTns());

        $b = (new ConfigDefineread)
            ->__invoke();
        \xltxlm\helper\Util::d($b);
        \xltxlm\helper\Util::d($b->getTns());

        assert(spl_object_id($a) == spl_object_id($b));
    }

}

