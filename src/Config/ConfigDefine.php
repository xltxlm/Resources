<?php
namespace xltxlm\resources\Config;

/**
* 配置文件的定义;
*/
Interface ConfigDefine{





        /**
        * @return string;
        */
        public function getTns():string;



/**
     * @param string $Tns;
     * @return $this
     */
public function setTns(string $Tns);

    


        /**
        * @return string;
        */
        public function getUser():string;



/**
     * @param string $User;
     * @return $this
     */
public function setUser(string $User);

    


        /**
        * @return string;
        */
        public function getPassword():string;



/**
     * @param string $Password;
     * @return $this
     */
public function setPassword(string $Password);

    


        /**
        * @return int;
        */
        public function getPort():int;



/**
     * @param int $Port;
     * @return $this
     */
public function setPort(int $Port);

    

    /**
    *   测试服务是否正常;
    *   @return :bool;
    */
    public function Test():bool;
    
    /**
    *   获取php扩展的原生类;
    *   @return ;
    */
    public function __invoke();
    
    /**
    *   创建新链接;
    *   @return ;
    */
    public function NewConnect();
    
}