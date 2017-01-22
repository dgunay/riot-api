<?php

/**
 * Copyright (C) 2016  Daniel Dolejška
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace RiotAPI\Objects;


/**
 *   Class RuneSlotDto
 * This object contains rune slot information.
 *
 * @package RiotAPI\Objects
 */
class RuneSlotDto extends ApiObject
{
	/**
	 * Rune ID associated with the rune slot. For static information correlating to rune IDs, please refer to the LoL Static Data API.
	 * @var int $runeId
	 */
	public $runeId;

	/**
	 * Rune slot ID.
	 * @var int $runeSlotId
	 */
	public $runeSlotId;
}