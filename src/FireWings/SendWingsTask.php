<?php

namespace FireWings;

use pocketmine\scheduler\Task;
use pocketmine\level\particle\FlameParticle;

class SendWingsTask extends Task{
	
	public function __construct(Main $main){
		$this->main = $main;
	}
	
	public function onRun($currentTicks){
		foreach($this->getMain()->getServer()->getOnlinePlayers() as $player){
			if(isset($this->main->players[strtolower($player->getName())])){
				$playerPosition = $player->getPosition()->add(0, 1.2, 0);
				switch($player->getDirection()){
										case 0:
$position = $playerPosition->add(-0.5, 1.4, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 1.4, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 1.2, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 1.2, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 1.2, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 1.2, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 1, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 1, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 1, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 1, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 1, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 1, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 1, 1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 1, -1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.8, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.8, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.8, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.8, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.8, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.8, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.8, 1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.8, -1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.6, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.6, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.6, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.6, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.6, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.6, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.6, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.6, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.4, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.4, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.4, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.4, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.4, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.4, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.4, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.4, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.2, 0); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.2, -0); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.2, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.2, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(-0.5, 0.2, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.2, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(-0.5, 0.2, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0.2, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(-0.5, 0, 0); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0, -0); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(-0.5, 0, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(-0.5, 0, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, 0, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(-0.5, -0.2, 0); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, -0.2, -0); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(-0.5, -0.2, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, -0.2, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(-0.5, -0.4, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, -0.4, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(-0.5, -0.4, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, -0.4, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(-0.5, -0.6, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, -0.6, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(-0.5, -0.6, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, -0.6, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(-0.5, -0.6, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, -0.6, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(-0.5, -0.8, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, -0.8, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(-0.5, -0.8, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, -0.8, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(-0.5, -1, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.5, -1, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1));
						break 1;
					case 1:
$position = $playerPosition->add(0.8, 1.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.8, 1.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.8, 1.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.8, 1.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(1, 1.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-1, 1.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.6, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.6, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.8, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.8, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(1, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-1, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(1.2, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-1.2, 1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.6, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.6, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.8, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.8, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(1, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-1, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(1.2, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-1.2, 0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.4, 0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.4, 0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.6, 0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.6, 0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.8, 0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.8, 0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(1, 0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-1, 0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.2, 0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.2, 0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.4, 0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.4, 0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.6, 0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.6, 0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.8, 0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.8, 0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0, 0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0, 0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.2, 0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.2, 0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.4, 0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.4, 0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.6, 0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.6, 0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0, 0, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0, 0, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.2, 0, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.2, 0, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.4, 0, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.4, 0, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0, -0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0, -0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.2, -0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.2, -0.2, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.2, -0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.2, -0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.4, -0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.4, -0.4, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.2, -0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.2, -0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.4, -0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.4, -0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.6, -0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.6, -0.6, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.4, -0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.4, -0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.6, -0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.6, -0.8, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.6, -1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.6, -1, -0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1));
						break 1;
					case 2:
$position = $playerPosition->add(0.5, 1.4, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 1.4, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 1.2, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 1.2, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 1.2, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 1.2, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 1, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 1, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 1, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 1, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 1, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 1, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 1, 1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 1, -1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0.8, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0.8, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0.8, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0.8, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0.8, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0.8, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0.8, 1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0.8, -1.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0.6, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0.6, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0.6, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0.6, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0.6, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0.6, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0.6, 1); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0.6, -1); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0.4, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0.4, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0.4, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0.4, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0.4, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0.4, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0.4, 0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0.4, -0.8); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0.2, 0); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0.2, -0); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0.2, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0.2, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0.2, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0.2, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0.2, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0.2, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0, 0); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0, -0); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, 0, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, 0, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, -0.2, 0); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, -0.2, -0); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, -0.2, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, -0.2, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, -0.4, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, -0.4, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, -0.4, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, -0.4, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, -0.6, 0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, -0.6, -0.2); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 

$position = $playerPosition->add(0.5, -0.6, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, -0.6, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, -0.6, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, -0.6, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, -0.8, 0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, -0.8, -0.4); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, -0.8, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, -0.8, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, -1, 0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.5, -1, -0.6); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
						break 1;
					case 1:
$position = $playerPosition->add(0.8, 1.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.8, 1.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.8, 1.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.8, 1.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(1, 1.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-1, 1.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.6, 1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.6, 1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.8, 1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.8, 1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(1, 1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-1, 1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(1.2, 1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-1.2, 1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.6, 0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.6, 0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.8, 0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.8, 0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(1, 0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-1, 0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(1.2, 0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-1.2, 0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.4, 0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.4, 0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.6, 0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.6, 0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.8, 0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.8, 0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(1, 0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-1, 0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.2, 0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.2, 0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.4, 0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.4, 0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.6, 0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.6, 0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.8, 0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.8, 0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0, 0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0, 0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.2, 0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.2, 0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.4, 0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.4, 0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.6, 0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.6, 0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0, 0, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0, 0, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.2, 0, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.2, 0, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.4, 0, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.4, 0, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0, -0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0, -0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.2, -0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.2, -0.2, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.2, -0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.2, -0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.4, -0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.4, -0.4, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.2, -0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.2, -0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.4, -0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.4, -0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.6, -0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.6, -0.6, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.4, -0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.4, -0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.6, -0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.6, -0.8, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(0.6, -1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
$position = $playerPosition->add(-0.6, -1, 0.5); 
$player->getLevel()->addParticle(new FlameParticle($position, 1)); 
						break 1;
				}
			}
		}
	}
	
	public function getMain()
	{
		return $this->main;
	}
}
