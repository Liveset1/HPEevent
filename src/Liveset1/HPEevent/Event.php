<?php

namespace Liveset1\HPEevent;

use pocketmine\plugin\PluginBase;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\event\player\PlayerQuitEvent;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\Listener;

use pocketmine\utils\TextFormat as C;


class Event extends PluginBase implements Listener {

    public function onLoad(){
        $this->getLogger()->info("Event Loading");
    }
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->getLogger()->info("Event Enabled");
    }
    public function onDisable(){
        $this->getLogger()->info("Event Disabled");
    }
    public function onJoin(PlayerJoinEvent $joinEvent){
        $player = $joinEvent->getPlayer();
        $name = $player->getName();
        $this->getServer()->broadcastMessage(c::BLACK."[".c::GREEN."+".c::BLACK."]".c::GREEN."$name");
    }
    public function onQuit(PlayerQuitEvent $quitEvent){ 
        $player = $quitEvent->getPlayer();
        $name = $player->getName();
        $this->getServer()->broadcastMessage(c::BLACK."[".c::RED."-".c::BLACK."]".c::RED."$name");
    }
}
}
