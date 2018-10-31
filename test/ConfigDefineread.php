<?php
/**
 * Created by PhpStorm.
 * User: xialintai
 * Date: 2018/10/31
 * Time: 上午11:57
 */

namespace xltxlm\resources\test;

use xltxlm\resources\Config\ConfigDefine;
use xltxlm\resources\Config\ConfigDefineTrait;

class ConfigDefineread implements ConfigDefine
{
    use ConfigDefineTrait;


    public function Test(): bool
    {
        return true;
    }

    public function __invoke()
    {
        \xltxlm\helper\Util::d("new 链接");
        return $this->getTns();
    }

}