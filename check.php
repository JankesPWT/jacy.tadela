<?php


class Jankes
{
    public $var = 2;
    
    public function jeden()
    {
        if ($this->var == 1) {
            return 1;
        }
        return 2;
    }
    
}

$jankes = new Jankes;
echo $jankes->jeden();