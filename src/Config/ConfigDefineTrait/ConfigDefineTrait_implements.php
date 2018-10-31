<?php
namespace xltxlm\resources\Config\ConfigDefineTrait;

/**
 * 配置文件的定义;
*/
Trait ConfigDefineTrait_implements
{



    /* @var string 服务器的名称 */
        protected $Tns = '';
    


    /**
     * @return string;
     */
    public function getTns():string    {
        return $this->Tns;
    }




    /**
     * @param string $Tns;
     * @return $this
     */
    public function setTns(string $Tns)
    {
        $this->Tns = $Tns;
        return $this;
    }

    /* @var string 账户 */
        protected $User = '';
    


    /**
     * @return string;
     */
    public function getUser():string    {
        return $this->User;
    }




    /**
     * @param string $User;
     * @return $this
     */
    public function setUser(string $User)
    {
        $this->User = $User;
        return $this;
    }

    /* @var string 密码 */
        protected $Password = '';
    


    /**
     * @return string;
     */
    public function getPassword():string    {
        return $this->Password;
    }




    /**
     * @param string $Password;
     * @return $this
     */
    public function setPassword(string $Password)
    {
        $this->Password = $Password;
        return $this;
    }

    /* @var int 端口 */
        protected $Port = 0;
    


    /**
     * @return int;
     */
    public function getPort():int    {
        return $this->Port;
    }




    /**
     * @param int $Port;
     * @return $this
     */
    public function setPort(int $Port)
    {
        $this->Port = $Port;
        return $this;
    }

    /**
     *   测试服务是否正常;
     *   @return :bool;
    */
    abstract public function Test():bool;

    /**
     *   获取php扩展的原生类;
     *   @return ;
    */
    abstract public function __invoke();

    /**
     *   创建新链接;
     *   @return ;
    */
    abstract public function NewConnect();

}