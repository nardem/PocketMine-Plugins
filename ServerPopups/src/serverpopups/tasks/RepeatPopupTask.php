<?php

namespace serverpopups\tasks;

use pocketmine\scheduler\PluginTask;
use serverpopups\ServerPopupsAPI;

class RepeatPopupTask extends PluginTask{

    public function __construct(ServerPopupsAPI $plugin){
        $this->plugin = $plugin;
    }
    
    public function onRun($currentTick){
    
    }
}
