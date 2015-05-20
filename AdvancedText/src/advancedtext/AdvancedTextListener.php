<?php

namespace advancedtext;

use pocketmine\event\block\SignChangeEvent;
use pocketmine\event\Listener;
use advancedtext\AdvancedTextAPI;

class AdvancedTextListener implements Listener{

    public function __construct(ServerPopupsAPI $plugin){
        $this->plugin = $plugin;
        $this->plugin->getServer()->getPluginManager()->registerEvents($this, $this->plugin);
    }
    
    public function onSignChange(SignChangeEvent $event){
        
    }
}
