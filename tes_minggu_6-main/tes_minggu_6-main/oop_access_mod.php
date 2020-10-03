<?php

/** 
 * 
 * poin 2
 * 
 * - 1 || Buatlah sebuah class dengan menginplementasikan access modifier pada method maupun properties
 * - 1 || invoke/call method yang kalian buat dengan visibilitas static maupun non static
 */

class Motor
{
    protected $kecepatanMax;
 
    protected function lihatKecepatan()
    {
        return $this->kecepatanMax = 150;
    }
}
 
class MotorGunung extends Motor
{
 
    public function getSpeed()
    {
        return parent::lihatKecepatan();
    }
}
 
 
 
$motor = new MotorGunung();
 
echo $motor->getSpeed();