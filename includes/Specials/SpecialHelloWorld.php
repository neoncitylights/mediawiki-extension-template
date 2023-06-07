<?php

namespace MediaWiki\Extension\MyCoolExtension\Specials;

use SpecialPage;

/**
 * @license MIT
 */
class SpecialHelloWorld extends SpecialPage {
	public function __construct() {
		parent::__construct( 'HelloWorld' );
	}

	public function execute( $sub ) {
		$this->setHeaders();
		$this->outputHeader();
		$this->getOutput()->addWikiMsg( 'mycoolextension-helloworld' );
	}
}
