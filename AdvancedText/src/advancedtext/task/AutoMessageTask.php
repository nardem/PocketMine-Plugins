<?php

namespace advancedtext\task;

use advancedtext\AdvancedTextAPI;
use pocketmine\scheduler\PluginTask;

class AutoMessageTask extends PluginTask{

    public function __construct(AdvancedTextAPI $plugin){
        $this->plugin = $plugin;
    }
}