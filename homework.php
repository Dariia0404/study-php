<?php
abstract class ParentClass 
    {
    public $property1;
    public $property2;

    public function setProperty1($value) 
    {
        $this->property1 = $value;
    }

    public function getProperty1() 
    {
        return $this->property1;
    }

    public function setProperty2($value) 
    {
        $this->property2 = $value;
    }

    public function getProperty2() 
    {
        return $this->property2;
    }

    abstract protected function power($base, $exponent);
}
?>



<?php
class Child1 extends ParentClass 
{
    private $childProperty1;

    public function setChildProperty1($value) 
    {
        $this->childProperty1 = $value;
    }

    public function getChildProperty1() 
    {
        return $this->childProperty1;
    }

    protected function power($base, $exponent) 
    {
        return pow($base, $exponent);
    }

    public function sumWithParent() 
    {
        return $this->property1 + $this->childProperty1;
    }
}
?>



<?php
class Child2 extends ParentClass 
{
    private $childProperty2;

    public function setChildProperty2($value) 
    {
        $this->childProperty2 = $value;
    }

    public function getChildProperty2() 
    {
        return $this->childProperty2;
    }

    protected function power($base, $exponent) 
    {
        return pow($base, $exponent);
    }

    public function multiplyWithParent() 
    {
        return $this->property2 * $this->childProperty2;
    }
}
?>



<?php
final class Child3 extends ParentClass 
{
    private $childProperty3;

    public function setChildProperty3($value) 
    {
        $this->childProperty3 = $value;
    }

    public function getChildProperty3() 
    {
        return $this->childProperty3;
    }

    protected function power($base, $exponent) 
    {
        return pow($base, $exponent);
    }

    public function divideWithParent() 
    {
        if ($this->childProperty3 == 0) 
        {
            return 0; 
        }
        return $this->property1 / $this->childProperty3;
    }
}
?>



<?php
class SubChild1A extends Child1 
{
    private $subChildProperty1A;

    public function setSubChildProperty1A($value) 
    {
        $this->subChildProperty1A = $value;
    }

    public function getSubChildProperty1A() 
    {
        return $this->subChildProperty1A;
    }

    public function addChild1AndSub() 
    {
        return $this->getChildProperty1() + $this->subChildProperty1A;
    }

    public function addParentProperty1AndSub() 
    {
        return $this->getProperty1() + $this->subChildProperty1A;
    }
}
?>



<?php
class SubChild1B extends Child1 
{
    private $subChildProperty1B;

    public function setSubChildProperty1B($value) 
    {
        $this->subChildProperty1B = $value;
    }

    public function getSubChildProperty1B() 
    {
        return $this->subChildProperty1B;
    }

    public function multiplyChild1AndSub() 
    {
        return $this->getChildProperty1() * $this->subChildProperty1B;
    }

    public function multiplyParentProperty1AndSub() 
    {
        return $this->getProperty1() * $this->subChildProperty1B;
    }
}
?>


<?php
class SubChild2A extends Child2 
{
    private $subChildProperty2A;

    public function setSubChildProperty2A($value) 
    {
        $this->subChildProperty2A = $value;
    }

    public function getSubChildProperty2A() 
    {
        return $this->subChildProperty2A;
    }

    public function subtractChild2AndSub() 
    {
        return $this->getChildProperty2() - $this->subChildProperty2A;
    }

    public function subtractParentProperty2AndSub() 
    {
        return $this->getProperty2() - $this->subChildProperty2A;
    }
}
?>


<?php
class SubChild2B extends Child2 
{
    private $subChildProperty2B;

    public function setSubChildProperty2B($value) 
    {
        $this->subChildProperty2B = $value;
    }

    public function getSubChildProperty2B() 
    {
        return $this->subChildProperty2B;
    }

    public function divideChild2AndSub() {
        if ($this->subChildProperty2B == 0) {
            return 0; 
        }
        return $this->getChildProperty2() / $this->subChildProperty2B;
    }

    public function divideParentProperty2AndSub() 
    {
        if ($this->subChildProperty2B == 0) {
            return 0; 
        }
        return $this->getProperty2() / $this->subChildProperty2B;
    }
}
?>