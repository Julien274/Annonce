<?php

namespace Annonce;

use Annonce\Command\AnnonceCommand;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {
    private static $main;

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("AnnonceCommand enable !");
        $this->getServer()->getCommandMap()->register("AnnonceCommand", new AnnonceCommand());

        self::$main = $this;
    }
    public static function getInstance(): Main {
        return self::$main;
    }
}