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
 * AccessCode Domain Model
 */
class AccessCode extends AbstractEntity {

	/**
	 * Code
	 *
	 * @var string
	 */
	protected $code = '';

	/**
	 * Total number of downloads
	 *
	 * @var integer
	 */
	protected $totalDownloads = 0;

	/**
	 * Used Downloads
	 *
	 * @var integer
	 */
	protected $usedDownloads = 0;


	/**
	 * Returns the code
	 *
	 * @return string $code
	 */
	public function getCode() {
		return $this->code;
	}

	/**
	 * Sets the code
	 *
	 * @param string $code
	 * @return void
	 */
	public function setCode($code) {
		$this->code = $code;
	}

	/**
	 * Returns the totalDownloads
	 *
	 * @return integer $totalDownloads
	 */
	public function getTotalDownloads() {
		return $this->totalDownloads;
	}

	/**
	 * Sets the totalDownloads
	 *
	 * @param integer $totalDownloads
	 * @return void
	 */
	public function setTotalDownloads($totalDownloads) {
		$this->totalDownloads = $totalDownloads;
	}

	/**
	 * Sets usedDownloads
	 *
	 * @param integer $usedDownloads
	 * @return void
	 */
	public function setUsedDownloads($usedDownloads) {
		$this->usedDownloads = $usedDownloads;
	}

	/**
	 * Returns usedDownloads
	 *
	 * @return integer
	 */
	public function getUsedDownloads() {
		return $this->usedDownloads;
	}

}