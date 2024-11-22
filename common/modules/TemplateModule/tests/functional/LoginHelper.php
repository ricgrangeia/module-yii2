<?php

namespace common\modules\AATemplateModule\tests\functional;

use common\modules\AATemplateModule\tests\FunctionalTester;

class LoginHelper
{
	public static function loginUser(FunctionalTester $I): FunctionalTester
	{
		$I->amOnRoute('/admin/user/login'); # Need change to your links
		$I->fillField('Login[username]', 'username');
		$I->fillField('Login[password]', 'password');
		$I->click('login-button');
		$I->seeResponseCodeIs(200);
		return $I;
	}
}
