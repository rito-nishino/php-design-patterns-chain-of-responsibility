<?php

namespace App\Handlers;

use App\Handlers\Super\BattleHandler;

class RyuBattleHandler extends BattleHandler
{
    private $level = 10;

    public function battleResult($level)
    {
        return ($level > $this->level);
    }

    public function getMessage()
    {
        return 'Ryu win! You lose.';
    }
}