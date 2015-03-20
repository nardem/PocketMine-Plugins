<?php

namespace WarpArrow;

use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\event\Listener;
use pocketmine\math\Vector3;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Loader extends PluginBase implements Listener{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::GREEN."WarpArrow enabled.");
    }
    
    public function onDisable(){
        $this->getLogger()->info(TextFormat::RED."WarpArrow disabled.");
    }
}