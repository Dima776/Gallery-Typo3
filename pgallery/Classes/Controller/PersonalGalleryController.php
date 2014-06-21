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
class PersonalGalleryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * personalGalleryRepository
	 *
	 * @var \TYPO3\Pgallery\Domain\Repository\PersonalGalleryRepository
	 * @inject
	 */
	protected $personalGalleryRepository;
	
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
	public function listAction( ) {
		$personalGalleries = $this->personalGalleryRepository->findAll();
		
		$height= $this -> optionsRepository ->findOneByOpvar1("Height")->getCount();
		$width= $this -> optionsRepository ->findOneByOpvar1("Width")->getCount();
	//	$new2= $this -> optionsRepository ->findOneByOpvar1(" Count of  photos on the page")->getCount();

//echo var_dump($product);die;

$this->view->assign('personalGalleries', $personalGalleries);

	}

	/**
	 * action show
	 *
	 * @param \TYPO3\Pgallery\Domain\Model\PersonalGallery $personalGallery
	 * @return void
	 */
	public function showAction(\TYPO3\Pgallery\Domain\Model\PersonalGallery $personalGallery) {
		$this->view->assign('personalGallery', $personalGallery);
	}

	/**
	 * action new
	 *
	 * @param \TYPO3\Pgallery\Domain\Model\PersonalGallery $newPersonalGallery
	 * @dontvalidate $newPersonalGallery
	 * @return void
	 */
	public function newAction(\TYPO3\Pgallery\Domain\Model\PersonalGallery $newPersonalGallery = NULL) {
		$this->view->assign('newPersonalGallery', $newPersonalGallery);
	}

	/**
	 * action create
	 *
	 * @param \TYPO3\Pgallery\Domain\Model\PersonalGallery $newPersonalGallery
	 * @return void
	 */
	public function createAction(\TYPO3\Pgallery\Domain\Model\PersonalGallery $newPersonalGallery) {
	
// если разкоментить то будет ошибка

/*	if(!empty($_FILES) AND isset($_FILES['tx_pgallery_pgallery'])){
			$basicFileFunctions = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance ( 't3lib_basicFileFunctions' );
			if(!is_dir(\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName ( 'uploads/tx_pgallery/' ))){
				\TYPO3\CMS\Core\Utility\GeneralUtility::mkdir_deep(\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName ( 'uploads/' ),'tx_pgallery');
			}	
	*/		
			// for multi-upload
//	echo var_dump($_FILES['file']['name']);die;
			$basicFileFunctions = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance ( 't3lib_basicFileFunctions' );
			foreach ( $_FILES['file']['name'] as $key => $value ){
		
			
			$link=$value;
//	echo var_dump($value);die;
			$name=$newPersonalGallery->getName();
			$comment=$newPersonalGallery->getComment();
			$this->personalGalleryRepository->insertRecord($name, $link, $comment);
			
			$fileName = $basicFileFunctions->getUniqueName ( $value, 
			\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName ( 'uploads/tx_pgallery/'));
           
			\TYPO3\CMS\Core\Utility\GeneralUtility::upload_copy_move (
				$_FILES['file'][ 'tmp_name' ][$key ],
				$fileName );
		
			}
		
		
		//}
		
	
	//тут не работает так как нужно  ввывести сообщение что нужно выбрать фото
	
	
	  //$this->personalGalleryRepository->add($newPersonalGallery);
		$this->flashMessageContainer->add('Your new PersonalGallery was created.');
		$this->redirect('list');
		}
//		else{	$this->flashMessageContainer->add('','Choose photo. ',$severity = \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR,$storeInSession = TRUE);
//		$this->redirect('new');
//		}
		
//	}

	/**
	 * action edit
	 *
	 * @param \TYPO3\Pgallery\Domain\Model\PersonalGallery $personalGallery
	 * @return void
	 */
	public function editAction(\TYPO3\Pgallery\Domain\Model\PersonalGallery $personalGallery) {
		$this->view->assign('personalGallery', $personalGallery);
	}

	/**
	 * action update
	 *
	 * @param \TYPO3\Pgallery\Domain\Model\PersonalGallery $personalGallery
	 * @return void
	 */
	public function updateAction(\TYPO3\Pgallery\Domain\Model\PersonalGallery $personalGallery) {
		
		$basicFileFunctions = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance ( 't3lib_basicFileFunctions' );
			foreach ( $_FILES['file']['name'] as $key => $value ){
		
			
			$link=$value;
			
			$fileName = $basicFileFunctions->getUniqueName ( $value, 
			\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName ( 'uploads/tx_pgallery/'));
           
			\TYPO3\CMS\Core\Utility\GeneralUtility::upload_copy_move (
				$_FILES['file'][ 'tmp_name' ][$key ],
				$fileName );
		
			}
		$personalGallery->setLink($link);
		$this->personalGalleryRepository->update($personalGallery);
		$this->flashMessageContainer->add('Your PersonalGallery was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \TYPO3\Pgallery\Domain\Model\PersonalGallery $personalGallery
	 * @return void
	 */
	public function deleteAction(\TYPO3\Pgallery\Domain\Model\PersonalGallery $personalGallery) {
		$this->personalGalleryRepository->remove($personalGallery);
		$this->flashMessageContainer->add('Your PersonalGallery was removed.');
		$this->redirect('list');
	}

}
?>