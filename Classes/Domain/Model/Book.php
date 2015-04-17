<?php
namespace Fab\VidiDemo\Domain\Model;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Book Domain Model
 */
class Book extends AbstractEntity {

	/**
	 * Title
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $title = '';

	/**
	 * Description
	 *
	 * @var \string
	 */
	protected $description = '';

	/**
	 * Author
	 *
	 * @var \string
	 */
	protected $author = '';

	/**
	 * Language
	 *
	 * @var \integer
	 */
	protected $language = 0;

	/**
	 * Publisher
	 *
	 * @var \Fab\VidiDemo\Domain\Model\Publisher
	 */
	protected $publisher = NULL;

	/**
	 * Access Codes
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fab\VidiDemo\Domain\Model\AccessCode>
	 */
	protected $accessCodes = NULL;

	/**
	 * Files
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fab\VidiDemo\Domain\Model\File>
	 */
	protected $files = NULL;

	/**
	 * __construct
	 *
	 * @return Book
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->accessCodes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->files = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return \string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param \string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the description
	 *
	 * @return \string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param \string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the author
	 *
	 * @return \string $author
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * Sets the author
	 *
	 * @param \string $author
	 * @return void
	 */
	public function setAuthor($author) {
		$this->author = $author;
	}

	/**
	 * Returns the language
	 *
	 * @return \integer $language
	 */
	public function getLanguage() {
		return $this->language;
	}

	/**
	 * Sets the language
	 *
	 * @param \integer $language
	 * @return void
	 */
	public function setLanguage($language) {
		$this->language = $language;
	}

	/**
	 * Returns the publisher
	 *
	 * @return \Fab\VidiDemo\Domain\Model\Publisher $publisher
	 */
	public function getPublisher() {
		return $this->publisher;
	}

	/**
	 * Sets the publisher
	 *
	 * @param \Fab\VidiDemo\Domain\Model\Publisher $publisher
	 * @return void
	 */
	public function setPublisher(\Fab\VidiDemo\Domain\Model\Publisher $publisher) {
		$this->publisher = $publisher;
	}

	/**
	 * Adds an AccessCode
	 *
	 * @param \Fab\VidiDemo\Domain\Model\AccessCode $accessCode
	 * @return void
	 */
	public function addAccessCode(\Fab\VidiDemo\Domain\Model\AccessCode $accessCode) {
		$this->accessCodes->attach($accessCode);
	}

	/**
	 * Removes an AccessCode
	 *
	 * @param \Fab\VidiDemo\Domain\Model\AccessCode $accessCodeToRemove The AccessCode to be removed
	 * @return void
	 */
	public function removeAccessCode(\Fab\VidiDemo\Domain\Model\AccessCode $accessCodeToRemove) {
		$this->accessCodes->detach($accessCodeToRemove);
	}

	/**
	 * Returns the accessCodes
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fab\VidiDemo\Domain\Model\AccessCode> $accessCodes
	 */
	public function getAccessCodes() {
		return $this->accessCodes;
	}

	/**
	 * Sets the accessCodes
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fab\VidiDemo\Domain\Model\AccessCode> $accessCodes
	 * @return void
	 */
	public function setAccessCodes(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $accessCodes) {
		$this->accessCodes = $accessCodes;
	}

	/**
	 * Returns the files
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fab\VidiDemo\Domain\Model\File> $files
	 */
	public function getFiles() {
		return $this->files;
	}

	/**
	 * Sets the files
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Fab\VidiDemo\Domain\Model\File> $files
	 * @return void
	 * @see \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	public function setFiles(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $files) {
		$this->files = $files;
	}

	/**
	 * Returns the size of the largest file attached
	 *
	 * @return integer
	 */
	public function getMaxFileSize() {
		$sizes = array();
		foreach ($this->getFiles() as $file) {
			$sizes[] = $file->getSize();
		}
		return max($sizes);

	}

}