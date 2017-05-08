<?php
/**
 * Created by PhpStorm.
 * User: shenpu
 * Date: 4/24/17
 * Time: 9:16 PM
 */
class A {
    function __construct()
    {
        echo " this is A construct!";
    }

    public $attribute1;
    function operation1(){

    }
}
class B extends A{
    function __construct()
    {
        echo " this is B construct!";
    }
    public $attribute2;
    function operation2(){

    }

}
$b = new B();
$b->attribute1=20;

class C{
    private function operation1(){
        echo "operation 1 in C";
    }
    protected function operation2(){
        echo "operation 2 in C";
    }
    public function operation3(){

    }

}
class D extends C{
    function __construct()
    {

        $this->operation2();
        $this->operation3();

    }
}
interface Display{
    function display();



}
class E implements Display {
    function display()
    {
        echo "jiang";
    }
}
abstract class F implements Display{
    function display()
    {

    }
}