<?php
namespace TYPO3\Pgallery\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Dima Doronenko 
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package pgallery
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class PersonalGallery extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var \string
	 */
	protected $name;

	/**
	 * link
	 *
	 * @var \string
	 */
	protected $link;

	/**
	 * comment
	 *
	 * @var \string
	 */
	protected $comment;

	/**
	 * var1
	 *
	 * @var \string
	 */
	protected $var1;

	/**
	 * var2
	 *
	 * @var \string
	 */
	protected $var2;

	/**
	 * var3
	 *
	 * @var \string
	 */
	protected $var3;

	/**
	 * Returns the name
	 *
	 * @return \string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param \string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the link
	 *
	 * @return \string $link
	 */
	public function getLink() {
		return $this->link;
	}

	/**
	 * Sets the link
	 *
	 * @param \string $link
	 * @return void
	 */
	public function setLink($link) {
		$this->link = $link;
	}

	/**
	 * Returns the comment
	 *
	 * @return \string $comment
	 */
	public function getComment() {
		return $this->comment;
	}

	/**
	 * Sets the comment
	 *
	 * @param \string $comment
	 * @return void
	 */
	public function setComment($comment) {
		$this->comment = $comment;
	}

	/**
	 * Returns the var1
	 *
	 * @return \string $var1
	 */
	public function getVar1() {
		return $this->var1;
	}

	/**
	 * Sets the var1
	 *
	 * @param \string $var1
	 * @return void
	 */
	public function setVar1($var1) {
		$this->var1 = $var1;
	}

	/**
	 * Returns the var2
	 *
	 * @return \string $var2
	 */
	public function getVar2() {
		return $this->var2;
	}

	/**
	 * Sets the var2
	 *
	 * @param \string $var2
	 * @return void
	 */
	public function setVar2($var2) {
		$this->var2 = $var2;
	}

	/**
	 * Returns the var3
	 *
	 * @return \string $var3
	 */
	public function getVar3() {
		return $this->var3;
	}

	/**
	 * Sets the var3
	 *
	 * @param \string $var3
	 * @return void
	 */
	public function setVar3($var3) {
		$this->var3 = $var3;
	}

}
?>