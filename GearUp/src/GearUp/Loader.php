<?php

namespace GearUp;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Player;

class Loader extends PluginBase{

    public function onEnable(){
        $this->getLogger()->info(TextFormat::GREEN."GearUp enabled.");
    }
    
    public function onDisable(){
        $this->getLogger()->info(TextFormat::RED."GearUp disabled.");
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        if(strtolower($command->getName()) === "gear"){
            if(isset($args[0])){
                if($sender instanceof Player){
                    if($args[0] === "1"){
                    
                    }
                    if($args[0] === "2"){
                    
                    }
                    if($args[0] === "3"){
                    
                    }
                    if($args[0] === "4"){
                    
                    }
                    if($args[0] === "5"){
                    
                    }
                    else{
                        $sender->sendMessage("");
                    }
                }
                else{
                    $sender->sendMessage(TextFormat::RED."Please run this command in-game.");
                }
            }
            if(isset($args[1])){
                $target = $sender->getServer()->getPlayer($args[1]);
            }
            else{
                
            }
        }
        return true;
    }
}