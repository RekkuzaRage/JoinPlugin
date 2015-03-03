<?php //If you dont know why this is here, Learn PHP!

namespace JoinPlugin; //Every plugin will have this. Its usally "namespace pluginname;"

use pocketmine\event\player\PlayerJoinEvent; //This plugin will use JoinEvent so it can know when a player joins a game.
use pocketmine\event\Listener; //Needed if you want to register a listener on events
use pocketmine\plugin\PluginBase; //Required for every main class

class Main extends PluginBase implements Listener{ //Every plugin will have this line of code
    public function onEnable(){ //This says " When the server started, what should I do?"
      $this->getServer()->getPluginManager()->registerEvents($this, $this); //Register events for use in plugin
      $this->getLogger()->info("[JoinPlugin] Is enabled!"); //This sends a message ton console.
      } //Obviously you need to close brakets in php
      
    public function onJoin(PlayerJoinEvent $event){ //When a player joins a game do...
      $player = $event->getPlayer(); //This will get the player. NOT THE NAME! Just the player "object"
      $name = $player->getName(); //This will get the name of $player
      $player->sendMessage("You joined the server!"); //Send a private message to a player | Notice how we did not use $name?
      if($name === "RekkuzaRage"){ //90% of the time you will need to put 3 equal signs "==="
        $player->sendMessage("Welcome owner! $name! ");
      }
      else{ //If the username is not RekkuzaRage
        $player->sendMessage("You're not rezzuka rage!");
      } //Close the bracket
    } //Another bracket to close the player join event
  } another one to close up the plugin
    
    

