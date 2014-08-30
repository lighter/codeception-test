<?php
date_default_timezone_set('Europe/Berlin');
$I = new AcceptanceTester($scenario);
$I->wantTo('view all data');
$I->amOnPage('/read_account');
$I->see('Create Account', 'a[href="simple/bootstrap"]');
// $I->click('body > div.navbar.navbar-inverse.navbar-fixed-top > div > div.collapse.navbar-collapse > ul > li:nth-child(3) > a');
$I->click('Create Account');
$I->wantTo('create account');
// $I->amOnPage('/');
$I->see('Username');
$I->see('Email');
$I->see('Password');
$I->see('Create');
// $I->sendAjaxPostRequest('simple/create_account', array('ussername' => 'Miles', 'email' => 'Davis', 'password' => '123456'));
$I->fillField('input[name="username"]', 'Miles');
$I->fillField('Email', 'test@gmail.com');
$I->fillField('Password', '123456');
$I->click('Create');
// $I->see('create success');

?>