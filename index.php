<?php
require_once 'autoload.php';

use App\Handlers\RyuBattleHandler;
use App\Handlers\KenBattleHandler;
use App\Handlers\HondaBattleHandler;

$ryu = new RyuBattleHandler();
$ken = new KenBattleHandler();
$honda = new HondaBattleHandler();

$handler = $ryu->setHandler($ken->setHandler($honda));

for ($i=1; $i<=10; $i++) {
    $player_level = rand(1, 30);
    echo sprintf('プレイ：%d回目　あなたのプレイヤーレベル：%d<br>', $i, $player_level);
    echo $handler->battle($player_level);
    echo '<br><br>';
}



