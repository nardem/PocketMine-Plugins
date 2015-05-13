<?php

namespace spreadfreeze;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class SpreadFreezeLoader extends PluginBase{
    
    public function onEnable(){
        $this->saveFiles();
        $this->getServer()->getLogger()->info("§aEnabling ".$this->getDescription()->getFullName()."...");
    }
    
    public function onDisable(){
        $this->getServer()->getLogger()->info("§cDisabling ".$this->getDescription()->getFullName()."...");
    }
    
    public function saveFiles(){
        if(!file_exists($this->getDataFolder()."config.yml")){
            $this->saveDefaultConfig();
        }
    }
}
