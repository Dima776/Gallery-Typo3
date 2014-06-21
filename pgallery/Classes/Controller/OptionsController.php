<?php
namespace TYPO3\Pgallery\Controller;

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
class OptionsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {


protected $optionsRepository;

	public function __construct(){
		$objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Extbase\Object\ObjectManager');
		$this -> optionsRepository = $objectManager->get('TYPO3\Pgallery\Domain\Repository\OptionsRepository');

	}


	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$optionss = $this->optionsRepository->findAll();
		$this->view->assign('optionss', $optionss);
	}

	/**
	 * action show
	 *
	 * @param \TYPO3\Pgallery\Domain\Model\Options $options
	 * @return void
	 */
	public function showAction(\TYPO3\Pgallery\Domain\Model\Options $options) {
		$this->view->assign('options', $options);
	}

	/**
	 * action new
	 *
	 * @param \TYPO3\Pgallery\Domain\Model\Options $newOptions
	 * @dontvalidate $newOptions
	 * @return void
	 */
	public function newAction(\TYPO3\Pgallery\Domain\Model\Options $newOptions = NULL) {
		$this->view->assign('newOptions', $newOptions);
	}

	/**
	 * action create
	 *
	 * @param \TYPO3\Pgallery\Domain\Model\Options $newOptions
	 * @return void
	 */
	public function createAction(\TYPO3\Pgallery\Domain\Model\Options $newOptions) {
		$this->optionsRepository->add($newOptions);
		$this->flashMessageContainer->add('Your new Options was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \TYPO3\Pgallery\Domain\Model\Options $options
	 * @return void
	 */
	public function editAction(\TYPO3\Pgallery\Domain\Model\Options $options) {
		$this->view->assign('options', $options);
	}

	/**
	 * action update
	 *
	 * @param \TYPO3\Pgallery\Domain\Model\Options $options
	 * @return void
	 */
	public function updateAction(\TYPO3\Pgallery\Domain\Model\Options $options) {
	
	    $param = $options->getCount();

		if ((int)$param > 20){ //check min count
			$this->optionsRepository->update($options);
			$this->flashMessageContainer->add('Your Options was updated.');
			$this->redirect('list');
		}
		else{
			$this->flashMessageContainer->add('','Min param is 20 and it must be integer',$severity = \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR,$storeInSession = TRUE);
			$this->redirect('list');
		}
		
	}

	/**
	 * action delete
	 *
	 * @param \TYPO3\Pgallery\Domain\Model\Options $options
	 * @return void
	 */
	public function deleteAction(\TYPO3\Pgallery\Domain\Model\Options $options) {
		$this->optionsRepository->remove($options);
		$this->flashMessageContainer->add('Your Options was removed.');
		$this->redirect('list');
	}

}
?>