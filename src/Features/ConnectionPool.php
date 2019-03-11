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
        $key = md5(serialize([$config->getTns(), $config->getUser(), $config->getPassword(), $config->getPort()])) . '@' . posix_getpid();
        if (self::$ConnectionPool[$key] == null) {
            $resource = $config->NewConnect();
            if (is_object($resource) == false) {
                throw new \Exception("不是一个链接资源");
            }
            self::$ConnectionPool[$key] = $resource;
        }
        return self::$ConnectionPool[$key];
    }


}