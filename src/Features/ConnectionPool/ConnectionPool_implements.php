<?php
namespace xltxlm\resources\Features\ConnectionPool;

/**
 * 链接池设计;
*/
abstract class ConnectionPool_implements
{



    /* @var \xltxlm\resources\Config\ConfigRandom 配置信息 */
        protected $ConfigRandom;
    


    /**
     * @return \xltxlm\resources\Config\ConfigRandom;
     */
    public function getConfigRandom():\xltxlm\resources\Config\ConfigRandom    {
        return $this->ConfigRandom;
    }




    /**
     * @param \xltxlm\resources\Config\ConfigRandom $ConfigRandom;
     * @return $this
     */
    public function setConfigRandom(\xltxlm\resources\Config\ConfigRandom $ConfigRandom)
    {
        $this->ConfigRandom = $ConfigRandom;
        return $this;
    }

    /**
     *   返回一个具体的php原生扩展类;
     *   @return ;
    */
    abstract public function __invoke();

}