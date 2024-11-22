<?php
namespace common\modules\AATemplateModule\tests\acceptance;


use common\modules\AATemplateModule\tests\AcceptanceTester;

class Login
{
	public static $URL = '/login';

	public $usernameField = '#mainForm #username';
	public $passwordField = '#mainForm input[name=password]';
	public $loginButton = '#mainForm input[type=submit]';

	protected AcceptanceTester $tester;

	// we inject AcceptanceTester into our class
	public function __construct(AcceptanceTester $I)
	{
		$this->tester = $I;
	}

	public function login($name, $password)
	{
		$I = $this->tester;

		$I->amOnPage(self::$URL);
		$I->fillField($this->usernameField, $name);
		$I->fillField($this->passwordField, $password);
		$I->click($this->loginButton);
	}



}