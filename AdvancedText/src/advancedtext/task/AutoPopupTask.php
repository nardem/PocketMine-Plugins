<?php

namespace advancedtext\task;

use pocketmine\scheduler\PluginTask;
use advancedtext\AdvancedTextAPI;

class AutoPopupTask extends PluginTask{

    public function __construct(AdvancedTextAPI $plugin){
        $this->plugin = $plugin;
    }
    
    public function onRun($currentTick){
    
    }
}