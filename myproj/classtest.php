<?php
/**
 * Created by PhpStorm.
 * User: shenpu
 * Date: 4/24/17
 * Time: 8:33 PM
 */
class shuaipu{
    /**
     * @var
     */
    public $s1;
    /**
     * @var
     */
    public $s2;
    function __construct($param1)
    {
        echo "this is shuaipu's construct with parameter".$param1."</br>";
    }

    function operation(){

    }
    function operation2($param1,$param2){

    }


    //xigouhanshu
    function __destruct()
    {
        // TODO: Implement __destruct() method.

    }

    /**
     * @return mixed
     */
    public function getS1()
    {
        return $this->s1;
    }

    /**
     * @param mixed $s1
     */
    public function setS1($s1)
    {
        $this->s1 = $s1;
    }

    /**
     * @return mixed
     */
    public function getS2()
    {
        return $this->s2;
    }

    /**
     * @param mixed $s2
     */
    public function setS2($s2)
    {
        $this->s2 = $s2;
    }



}
$a= new shuaipu("jushuai");
$b = new shuaipu("chaoshuai");
$c = new shuaipu();
$a->s1 = "value";
echo $a->s1;

?>