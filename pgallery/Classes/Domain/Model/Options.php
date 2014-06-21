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
class Options extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * height
	 *
	 * @var \integer
	 */
	protected $height;

	/**
	 * width
	 *
	 * @var \integer
	 */
	protected $width;

	/**
	 * count
	 *
	 * @var \integer
	 */
	protected $count;

	/**
	 * opvar1
	 *
	 * @var \string
	 */
	protected $opvar1;

	/**
	 * opvar2
	 *
	 * @var \string
	 */
	protected $opvar2;

	/**
	 * opvar3
	 *
	 * @var \string
	 */
	protected $opvar3;

	/**
	 * Returns the height
	 *
	 * @return \integer $height
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Sets the height
	 *
	 * @param \integer $height
	 * @return void
	 */
	public function setHeight($height) {
		$this->height = $height;
	}

	/**
	 * Returns the width
	 *
	 * @return \integer $width
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * Sets the width
	 *
	 * @param \integer $width
	 * @return void
	 */
	public function setWidth($width) {
		$this->width = $width;
	}

	/**
	 * Returns the count
	 *
	 * @return \integer $count
	 */
	public function getCount() {
		return $this->count;
	}

	/**
	 * Sets the count
	 *
	 * @param \integer $count
	 * @return void
	 */
	public function setCount($count) {
		$this->count = $count;
	}

	/**
	 * Returns the opvar1
	 *
	 * @return \string $opvar1
	 */
	public function getOpvar1() {
		return $this->opvar1;
	}

	/**
	 * Sets the opvar1
	 *
	 * @param \string $opvar1
	 * @return void
	 */
	public function setOpvar1($opvar1) {
		$this->opvar1 = $opvar1;
	}

	/**
	 * Returns the opvar2
	 *
	 * @return \string $opvar2
	 */
	public function getOpvar2() {
		return $this->opvar2;
	}

	/**
	 * Sets the opvar2
	 *
	 * @param \string $opvar2
	 * @return void
	 */
	public function setOpvar2($opvar2) {
		$this->opvar2 = $opvar2;
	}

	/**
	 * Returns the opvar3
	 *
	 * @return \string $opvar3
	 */
	public function getOpvar3() {
		return $this->opvar3;
	}

	/**
	 * Sets the opvar3
	 *
	 * @param \string $opvar3
	 * @return void
	 */
	public function setOpvar3($opvar3) {
		$this->opvar3 = $opvar3;
	}

}
?>