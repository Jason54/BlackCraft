<?php

namespace BlackTeam\BlackCraft;


use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\block\Block;
use pocketmine\item\Item;
use pocketmine\math\Vector3;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentInstance;


use pocketmine\inventory\ShapedRecipe;


class Main extends PluginBase implements Listener{
	
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		$i = Item::get(Item::CHAINMAIL_HELMET);
		$i->setCustomName("§6BlackHelmet");
		$helmet = new ShapedRecipe(["BBB","ADA","CCC"],["A"=>Item::get(Item::DIAMOND),"B"=>Item::get(Item::IRON_INGOT),"C"=>Item::get(Item::GOLD_INGOT),"D"=>Item::get(Item::DIAMOND_HELMET)],[$i]);
		$helmet->registerToCraftingManager($this->getServer()->getCraftingManager());
		$i = Item::get(Item::CHAINMAIL_CHESTPLATE);
		$i->setCustomName("§6BlackChesplate");
		$chestplate = new ShapedRecipe(["BBB","ADA","CCC"],["A"=>Item::get(Item::DIAMOND),"B"=>Item::get(Item::IRON_INGOT),"C"=>Item::get(Item::GOLD_INGOT),"D"=>Item::get(Item::DIAMOND_CHESTPLATE)],[$i]);
		$chestplate->registerToCraftingManager($this->getServer()->getCraftingManager());
		$i = Item::get(Item::CHAINMAIL_LEGGINGS);
		$i->setCustomName("§6BlackLeggings");
		$leggings = new ShapedRecipe(["BBB","ADA","CCC"],["A"=>Item::get(Item::DIAMOND),"B"=>Item::get(Item::IRON_INGOT),"C"=>Item::get(Item::GOLD_INGOT),"D"=>Item::get(Item::DIAMOND_LEGGINGS)],[$i]);
		$leggings->registerToCraftingManager($this->getServer()->getCraftingManager());
		$i = Item::get(Item::CHAINMAIL_BOOTS);
		$i->setCustomName("§6BlackBoots");
		$boots = new ShapedRecipe(["BBB","ADA","CCC"],["A"=>Item::get(Item::DIAMOND),"B"=>Item::get(Item::IRON_INGOT),"C"=>Item::get(Item::GOLD_INGOT),"D"=>Item::get(Item::DIAMOND_BOOTS)],[$i]);

$boots->registerToCraftingManager($this->getServer()->getCraftingManager());
		$i = Item::get(Item::BONE);
		$i->setCustomName("§6BlackSword");
		$sword = new ShapedRecipe(["BBB","ADA","CCC"],["A"=>Item::get(Item::DIAMOND),"B"=>Item::get(Item::IRON_INGOT),"C"=>Item::get(Item::GOLD_INGOT),"D"=>Item::get(Item::DIAMOND_SWORD)],[$i]);
		$sword->registerToCraftingManager($this->getServer()->getCraftingManager());
		$i = Item::get(Item::SPIDER_EYE);
		$i->setCustomName("§6Hammer");
		$casque2 = new ShapedRecipe(["AAA","ABA"," B "],["A"=>Item::get(Item::DIAMOND),"B"=>Item::get(Item::STICK)],[$i]);
		$casque2->registerToCraftingManager($this->getServer()->getCraftingManager());
		$i = Item::get(Item::EGG);
		$i->setCustomName("§6dDynamite");
		$boots2 = new ShapedRecipe(["AAA","ABA","AAA"],["A"=>Item::get(Item::TNT),"B"=>Item::get(Item::STRING)],[$i]);

$boots2->registerToCraftingManager($this->getServer()->getCraftingManager());
	}
	
	public function onDisable(){
		
	}
	
	
}
