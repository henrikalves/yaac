<?php

namespace Afosto\Acme\Data;

class RenewalInfo
{
	protected ?\DateTime $startWindow;

	protected ?\DateTime $endWindow;

	public function __construct($startWindow, $endWindow){
		$this->startWindow = ( new \DateTime() )->setTimestamp( strtotime( $startWindow ) );
		$this->endWindow = ( new \DateTime() )->setTimestamp( strtotime( $endWindow ) );
	}

	public function getStartWindow(): \DateTime {
		return $this->startWindow;
	}

	public function getEndWindow(): \DateTime {
		return $this->endWindow;
	}
}