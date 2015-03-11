<?php

/**
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link   http://www.pocketmine.net/
 *
 *
 */

namespace pocketmine\event\entity;

use pocketmine\entity\Entity;

class EntityDamageByEntityEvent extends EntityDamageEvent{
	public static $eventPool = [];
	public static $nextEvent = 0;

	/** @var Entity */
	private $damager;
	/** @var float */
	private $knockBack;

	/**
	 * @param Entity    $damager
	 * @param Entity    $entity
	 * @param int       $cause
	 * @param int|int[] $damage
	 * @param float     $knockBack
	 */
	public function __construct(Entity $damager, Entity $entity, $cause, $damage, $knockBack = 0.4){
		$this->damager = $damager;
		$this->knockBack = $knockBack;
		parent::__construct($entity, $cause, $damage);
	}

	/**
	 * @return Entity
	 */
	public function getDamager(){
		return $this->damager;
	}
	/**
	 * @return float
	 */
	public function getKnockBack(){
		return $this->knockBack;
	}
	/**
	 * @param float $knockBack
	 */
	public function setKnockBack($knockBack){
		$this->knockBack = $knockBack;
	}
}