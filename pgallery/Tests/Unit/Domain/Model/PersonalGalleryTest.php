<?php

namespace TYPO3\Pgallery\Tests;
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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \TYPO3\Pgallery\Domain\Model\PersonalGallery.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Personal Gallery
 *
 * @author Dima Doronenko 
 */
class PersonalGalleryTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\Pgallery\Domain\Model\PersonalGallery
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\Pgallery\Domain\Model\PersonalGallery();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNameForStringSetsName() { 
		$this->fixture->setName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getName()
		);
	}
	
	/**
	 * @test
	 */
	public function getLinkReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLinkForStringSetsLink() { 
		$this->fixture->setLink('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLink()
		);
	}
	
	/**
	 * @test
	 */
	public function getCommentReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCommentForStringSetsComment() { 
		$this->fixture->setComment('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getComment()
		);
	}
	
	/**
	 * @test
	 */
	public function getVar1ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVar1ForStringSetsVar1() { 
		$this->fixture->setVar1('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVar1()
		);
	}
	
	/**
	 * @test
	 */
	public function getVar2ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVar2ForStringSetsVar2() { 
		$this->fixture->setVar2('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVar2()
		);
	}
	
	/**
	 * @test
	 */
	public function getVar3ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVar3ForStringSetsVar3() { 
		$this->fixture->setVar3('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVar3()
		);
	}
	
}
?>