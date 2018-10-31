<?php

namespace xltxlm\resources\test\Config\ConfigRandom;

use xltxlm\resources\Config\ConfigDefine;
use xltxlm\resources\Config\ConfigRandom;

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


class ConfigDefineread implements ConfigDefine
{
    protected $Tns='';

    /**
     * @return string
     */
    public function getTns(): string
    {
        return $this->Tns;
    }

    /**
     * @param string $Tns
     * @return ConfigDefineread
     */
    public function setTns(string $Tns): ConfigDefineread
    {
        $this->Tns = $Tns;
        return $this;
    }

    protected $User='';

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->User;
    }

    /**
     * @param string $User
     * @return ConfigDefineread
     */
    public function setUser(string $User): ConfigDefineread
    {
        $this->User = $User;
        return $this;
    }

    protected $Password='';

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return ConfigDefineread
     */
    public function setPassword(string $Password): ConfigDefineread
    {
        $this->Password = $Password;
        return $this;
    }

    protected $Port=0;

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->Port;
    }

    /**
     * @param int $Port
     * @return ConfigDefineread
     */
    public function setPort(int $Port): ConfigDefineread
    {
        $this->Port = $Port;
        return $this;
    }


    public function Test():bool
    {
        // TODO: Implement Test() method.
    }

    public function __invoke()
    {
        // TODO: Implement __invoke() method.
    }

}
