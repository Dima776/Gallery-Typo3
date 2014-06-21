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
 * Test case for class \TYPO3\Pgallery\Domain\Model\Options.
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
class OptionsTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\Pgallery\Domain\Model\Options
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\Pgallery\Domain\Model\Options();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getHeightReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getHeight()
		);
	}

	/**
	 * @test
	 */
	public function setHeightForIntegerSetsHeight() { 
		$this->fixture->setHeight(12);

		$this->assertSame(
			12,
			$this->fixture->getHeight()
		);
	}
	
	/**
	 * @test
	 */
	public function getWidthReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getWidth()
		);
	}

	/**
	 * @test
	 */
	public function setWidthForIntegerSetsWidth() { 
		$this->fixture->setWidth(12);

		$this->assertSame(
			12,
			$this->fixture->getWidth()
		);
	}
	
	/**
	 * @test
	 */
	public function getCountReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getCount()
		);
	}

	/**
	 * @test
	 */
	public function setCountForIntegerSetsCount() { 
		$this->fixture->setCount(12);

		$this->assertSame(
			12,
			$this->fixture->getCount()
		);
	}
	
	/**
	 * @test
	 */
	public function getOpvar1ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setOpvar1ForStringSetsOpvar1() { 
		$this->fixture->setOpvar1('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOpvar1()
		);
	}
	
	/**
	 * @test
	 */
	public function getOpvar2ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setOpvar2ForStringSetsOpvar2() { 
		$this->fixture->setOpvar2('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOpvar2()
		);
	}
	
	/**
	 * @test
	 */
	public function getOpvar3ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setOpvar3ForStringSetsOpvar3() { 
		$this->fixture->setOpvar3('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOpvar3()
		);
	}
	
}
?>