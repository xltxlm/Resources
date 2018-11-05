<?php
namespace xltxlm\resources\Config\ConfigRandom;

/**
 * 随机返回一个同等的配置信息;
*/
abstract class ConfigRandom_implements
{



    /* @var \xltxlm\resources\Config\ConfigDefine 获取一个可用的定义 */
        protected $OneConfigDefine;
    


    /**
     * @return \xltxlm\resources\Config\ConfigDefine;
     */
    public function getOneConfigDefine():\xltxlm\resources\Config\ConfigDefine    {
        return $this->OneConfigDefine;
    }




    /**
     * @param \xltxlm\resources\Config\ConfigDefine $OneConfigDefine;
     * @return $this
     */
    protected function setOneConfigDefine(\xltxlm\resources\Config\ConfigDefine $OneConfigDefine)
    {
        $this->OneConfigDefine = $OneConfigDefine;
        return $this;
    }

    /* @var \xltxlm\resources\Config\ConfigDefine[] 设置配置文件 */
        protected $Configs = [];
    


    /**
     * @return \xltxlm\resources\Config\ConfigDefine[];
     */
    public function getConfigs():array    {
        return $this->Configs;
    }



        /**
        * @param \xltxlm\resources\Config\ConfigDefine $Configs;
        * @return $this
        */
        public function setConfigs_Row(\xltxlm\resources\Config\ConfigDefine $Configs){
            $this->Configs[] = $Configs;
            return $this;
        }

    /**
     * @param \xltxlm\resources\Config\ConfigDefine[] $Configs;
     * @return $this
     */
    public function setConfigs(array $Configs)
    {
        $this->Configs = $Configs;
        return $this;
    }

    /**
     *   返回一个具体的php原生扩展类;
     *   @return ;
    */
    abstract public function __invoke();

}