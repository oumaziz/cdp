<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');


$I->amOnPage('/taches/taches');


$I->see('Your Environment GL');
$I->see('Add Task');
$I->see('Edit');
$I->see('Destroy');

//add task

$I->wantTo('Add task in my sprint');
$I->click('Add Task');
$I->see('Add Your Task');

$I->fillField('description','your task');
$I->fillField('code','your task');
$I->fillField('start_date','2015-10-26');
$I->fillField('end_date','2015-10-27');
$I->fillField('predecessors','2 3 7');

$I->click('Send');

$I->amOnPage('/taches/taches');
/*
$I->see(' ');
*/
$I->see('Welcome');

$I->click('Add Task');
$I->see('Add Your Task');
$I->fillField('description','your task');
$I->fillField('code','your task');
$I->fillField('start_date','2015-10-26');
$I->fillField('end_date','2015-10-25');
$I->fillField('predecessors','2 3 7');
$I->click('Send');

$I->see('The end date must be a date after start date');


//Edit task





