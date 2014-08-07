<?php
namespace Fab\QuickDemo\Domain\Model;

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
 * AccessLog Domain Model
 *
 */
class AccessLog extends AbstractEntity {

	/**
	 * Code
	 *
	 * @var \string
	 */
	protected $code = '';

	/**
	 * Book
	 *
	 * @var \string
	 */
	protected $book = '';

	/**
	 * file
	 *
	 * @var \string
	 */
	protected $file = '';

	/**
	 * Device
	 *
	 * @var \string
	 */
	protected $device = '';

	/**
	 * Returns the code
	 *
	 * @return \string $code
	 */
	public function getCode() {
		return $this->code;
	}

	/**
	 * Sets the code
	 *
	 * @param \string $code
	 * @return void
	 */
	public function setCode($code) {
		$this->code = $code;
	}

	/**
	 * Sets book
	 *
	 * @param \string $book
	 * @return void
	 */
	public function setBook($book) {
		$this->book = $book;
	}

	/**
	 * Returns book
	 *
	 * @return \string
	 */
	public function getBook() {
		return $this->book;
	}

	/**
	 * Returns the file
	 *
	 * @return \string $file
	 */
	public function getFile() {
		return $this->file;
	}

	/**
	 * Sets the file
	 *
	 * @param \string $file
	 * @return void
	 */
	public function setFile($file) {
		$this->file = $file;
	}

	/**
	 * Returns the device
	 *
	 * @return \string $device
	 */
	public function getDevice() {
		return $this->device;
	}

	/**
	 * Sets the device
	 *
	 * @param \string $device
	 * @return void
	 */
	public function setDevice($device) {
		$this->device = $device;
	}

}