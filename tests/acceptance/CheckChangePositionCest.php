<?php

use Page\YandexVideo as YandexVideoPage;

class CheckChangePositionCest
{
    /**
     * @param AcceptanceTester $I
     * @throws Exception
     */
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo("Check that when user's cursor hover on element, he changes position");
        $I->amOnPage(YandexVideoPage::$URL);
        $I->checkChangePosition(YandexVideoPage::$FIRST_VIDEO,0,-6);
    }
}

