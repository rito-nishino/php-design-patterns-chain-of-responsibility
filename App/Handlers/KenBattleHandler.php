<?php

namespace App\Handlers;

use App\Handlers\Super\BattleHandler;

class KenBattleHandler extends BattleHandler
{
    private $level = 15;

    public function battleResult($level)
    {
        return ($level > $this->level);
    }

    public function getMessage()
    {
        return 'Ken win! You lose.';
    }
}