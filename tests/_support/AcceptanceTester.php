<?php

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @throws Exception
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

   /**
    * @throws Exception
    * Get first position $element (coordinates of the upper left point of the element).
    * first position(x)+($x).
    * first position(y)+($y).
    * Move mouse over $element.
    * Get second position $element (coordinates of the upper left point of the element).
    * Assert equals.
    * first position(x)+($x) = second position(x).
    * first position(y)+($y) = second position(y).
    * If Assert equals = True, element successfully changed position.
    * @param $element
    * @param $x
    * @param $y
    */

    public function checkChangePosition($element, $x, $y)
    {
        $this->waitForElementVisible($element);
        $position1 = $this->executeInSelenium(function(\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) use ($element){
            return $webdriver->findElement(WebDriverBy::cssSelector($element))->getLocation();
        });
        $this->moveMouseOver($element);
        $position2 = $this->executeInSelenium(function(\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) use ($element){
            return $webdriver->findElement(WebDriverBy::cssSelector($element))->getLocation();
        });
        $this->assertEquals($position1->getX()+($x),$position2->getX());
        $this->assertEquals($position1->getY()+($y),$position2->getY());
    }
}
