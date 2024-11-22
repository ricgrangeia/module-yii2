<?php

namespace common\modules\AATemplateModule\tests\functional;

use common\modules\AATemplateModule\tests\FunctionalTester;


/**
 * Class LoginCest
 */
final class AATemplateModuleCest {


	/**
	 * @param FunctionalTester $I
	 */
	public function AATemplateModuleIndex( FunctionalTester $I ) {

		$I = LoginHelper::loginUser( $I);

		$I->amOnRoute( '/TemplateModule/controller/index' );
		$I->amOnPage( '/TemplateModule/controller/index' );
		$I->seeResponseCodeIs(200);
	}
}
