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

/**
 * @method ConfigDefineread __invoke
 * Class ConfigDefineread
 * @package xltxlm\resources\test
 */
class ConfigDefineread implements ConfigDefine
{
    use ConfigDefineTrait;

    public function getTns(): string
    {
        if (empty($this->Tns)) {
            $this->Tns = uniqid();
        }
        return $this->Tns;
    }


    public function NewConnect()
    {
        \xltxlm\helper\Util::d("new 链接");
        return $this;
    }


    public function Test(): bool
    {
        return true;
    }


}