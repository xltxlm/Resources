<?php

namespace xltxlm\resources\Features;

/**
 * 链接池设计;
 */
class ConnectionPool extends ConnectionPool\ConnectionPool_implements
{
    private static $ConnectionPool = [];

    /**
     * ConnectionPool constructor.
     */
    public function __construct(\xltxlm\resources\Config\ConfigRandom $ConfigRandom = null)
    {
        if ($ConfigRandom) {
            $this->setConfigRandom($ConfigRandom);
        }
    }


    public function __invoke()
    {
        $config = $this->getConfigRandom()->getOneConfigDefine();
        $key = md5(serialize($config)) . '@' . posix_getpid();
        if (self::$ConnectionPool[$key] == null) {
            self::$ConnectionPool[$key] = $config->__invoke();
        }
        return self::$ConnectionPool[$key];
    }


}