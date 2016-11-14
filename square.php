<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of square
 *
 * @author ebe
 */
class Square extends Line implements Icalculate {
    //put your code here
    
public function areacolor() {
    echo "Blár";
        
    }
public function cubic() {
        
    }
public function linewith() {
    echo "Þykkt 4";
        
    }
public function surface() {
    $a=($this->getAx()*$this->getBy())-($this->getAy()*$this->getBx());
    $b=$this->getBx()*$this->getCy()-$this->getBy()*$this->getCx();
    $c=$this->getCx()*$this->getDy()-$this->getCy()*$this->getDx();
    $d=$this->getDx()*$this->getAy()-$this->getDy()*$this->getAx();  
    return abs(($a+$b+$c+$d)/2);
    }
}

?>
