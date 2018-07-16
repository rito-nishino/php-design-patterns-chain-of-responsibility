<?php

namespace App\Handlers;

use App\Handlers\Super\BattleHandler;

class HondaBattleHandler extends BattleHandler
{
    private $level = 20;

    public function battleResult($level)
    {
        return ($level > $this->level);
    }

    public function getMessage()
    {
        return 'Honda win! You lose.';
    }
}