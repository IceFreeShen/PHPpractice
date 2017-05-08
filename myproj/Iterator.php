<?php
/**
 * Created by PhpStorm.
 * User: shenpu
 * Date: 4/25/17
 * Time: 11:16 AM
 */
class ObjectIterator implements Iterator{
    private $obj;
    private $count;
    private $currentIndex;
    function __construct($obj)
    {
        $this->obj=$obj;
        $this->count=count($this->obj->data);
    }
    public function rewind()
    {
        $this->currentIndex=0;

        // TODO: Implement current() method.
    }
    function valid()
    {
     return $this->currentIndex < $this->count;
        // TODO: Implement valid() method.
    }
    function key()
    {
     return $this->currentIndex;
        // TODO: Implement key() method.
    }
    public function current()
    {
        // TODO: Implement current() method.
        return $this->obj->data[$this->currentIndex];
    }
    function next()
    {
        // TODO: Implement next() method.
    $this->currentIndex++;
    }
}
class Object implements IteratorAggregate{
    public $data=array();
    function __construct($in)
    {
        $this->data =$in;
    }
    function getIterator()
    {
     return new ObjectIterator($this);
        // TODO: Implement getIterator() method.
    }
}
$myObject = new Object(array(2,4,6,8,10));
$myIterator = $myObject->getIterator();
for($myIterator->rewind();$myIterator->valid();$myIterator->next()){
    $key =$myIterator->key();
    $value=$myIterator->current();
    echo $key."=>".$value."<br/>";
}