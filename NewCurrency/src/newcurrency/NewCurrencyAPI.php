<?php

namespace newcurrency;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\Player;

class NewCurrencyAPI extends PluginBase{

    public $account;
    
    public function onEnable(){
        $this->saveResource("currency.yml");
        $this->account = new Config($this->getDataFolder()."account.yml", Config::YAML);
        $this->getCommand("newcurrency")->setExecutor(new commands\NewCurrencyCommand($this));
      	$this->getServer()->getLogger()->info("§aEnabling ".$this->getDescription()->getFullName()."...");
    }
    
    public function onDisable(){
      	$this->getServer()->getLogger()->info("§cDisabling ".$this->getDescription()->getFullName()."...");
    }
    
    public function getCurrencyName(){
        return $this->getResource("currency.yml")->get("name");
    }
    
    public function getCurrencySymbol(){
        return $this->getResource("currency.yml")->get("symbol");
    }
    
    public function getMinimumBalance(){
        return $this->getResource("currency.yml")->get("balance");
    }
    
    public function getMaximumBalance(){
        return $this->getResource("currency.yml")->get("balance");
    }
    
    public function getBalance($player){
        return $this->account->get($player);
    }
    
    public function getDefault(){
        return $this->getResource("currency.yml")->get("default");
    }
    
    public function decreaseBalance($amount, $player){
        
    }
    
    public function increaseBalance($amount, $player){
        
    }
    
    public function isRegistered($player){
        return $this->account->get($player);
    }
    
    public function register($player){
        $this->account->set($player);
    }
    
    public function unregister($player){
        $this->account->remove($player);
    }
}
