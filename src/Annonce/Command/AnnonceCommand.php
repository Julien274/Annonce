<?php

namespace Annonce\Command;

use Annonce\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class AnnonceCommand extends Command {
    public function __construct() {
        parent::__construct("annonce", "Annonce");
    }
    public function execute(CommandSender $sender, string $commandLabel, array $args) {
        if ($sender->hasPermission("annonce.use")) {
            if (isset($args[0])) {
                $message = implode(" ", $args);
                Main::getInstance()->getServer()->broadcastMessage("§7[§cANNONCE§7] " . $message);
            }else{
                $sender->sendMessage("Usage : /annonce [message]");
            }
        }else{
            $sender->sendMessage("You don't ave permission to use this");
        }
    }
}