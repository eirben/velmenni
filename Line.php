<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Line
 *
 * @author ebe
 */
abstract class Line {
    const PI=3.14;

        public function getAx() {
        return $this->ax;
    }

    public function setAx($ax) {
        $this->ax = $ax;
    }

    public function getBx() {
        return $this->bx;
    }

    public function setBx($bx) {
        $this->bx = $bx;
    }

    public function getCx() {
        return $this->cx;
    }

    public function setCx($cx) {
        $this->cx = $cx;
    }

    public function getAy() {
        return $this->ay;
    }

    public function setAy($ay) {
        $this->ay = $ay;
    }

    public function getBy() {
        return $this->by;
    }

    public function setBy($by) {
        $this->by = $by;
    }

    public function getCy() {
        return $this->cy;
    }

    public function setCy($cy) {
        $this->cy = $cy;
    }

    private $ax;
    private $bx;
    private $cx;
    private $ay;
    private $by;
    private $cy;
    private $dx;
    private $dy;
    public function getDx() {
        return $this->dx;
    }

    public function setDx($dx) {
        $this->dx = $dx;
    }

    public function getDy() {
        return $this->dy;
    }

    public function setDy($dy) {
        $this->dy = $dy;
    }

        public abstract function surface();

    public abstract function cubic();

    public function xline() {
        $linex = $this->getBy() - $this->getCy();
        return $linex;
    }

    public function yline() {
        $liney = $this->getCy() - $this->getAy();
        return $liney;
    }

    public function zline() {
        $linez = $this->getAy() - $this->getBy();
        return $linez;
    }

}

?>
