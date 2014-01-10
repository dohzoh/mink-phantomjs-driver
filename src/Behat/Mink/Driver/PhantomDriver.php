<?php

namespace Behat\Mink\Driver;

use Behat\Mink\Session;
use Behat\Mink\Element\NodeElement;
use Behat\Mink\Exception\DriverException;
use Behat\Mink\Exception\UnsupportedDriverActionException;

class PhantomDriver implements DriverInterface
{

    const BROWSER_NAME = 'phantomjs';

    /**
     * The current Mink session
     * @var \Behat\Mink\Session
     */
    private $session;

    /**
     * Whether the browser has been started
     * @var Boolean
     */
    private $started = false;

    /**
     * The WebDriver instance
     * @var WebDriver
     */
    private $webDriver;

    /**
     * The WebDriverSession instance
     * @var \WebDriver\Session
     */
    private $wdSession;

    /**
     * The timeout configuration
     * @var array
     */
    private $timeouts = array();

    /**
     * Instantiates the driver.
     *
     * @param string    $wdHost The WebDriver host
     */
    public function __construct($wdHost = 'http://localhost:4444/wd/hub')
    {

        $this->setWebDriver(new WebDriver($wdHost));
    }

    /**
     * Sets driver's current session.
     *
     * @param Session $session
     */
    public function setSession(Session $session)
    {
        $this->session = $session;
    }

    /**
     * Starts driver.
     */
    public function start()
    {
        try {
            // second arg in the webdriver session is desiredCapabilities but removing for now
            $this->wdSession = $this->webDriver->session(self::BROWSER_NAME, []);
            $this->applyTimeouts();
        } catch (\Exception $e) {
            throw new DriverException('Could not open connection: '.$e->getMessage(), 0, $e);
        }

        if (!$this->wdSession) {
            throw new DriverException('Could not connect to a Selenium 2 / WebDriver server');
        }
        $this->started = true;
    }

    /**
     * Checks whether driver is started.
     *
     * @return Boolean
     */
    public function isStarted()
    {
        
    }

    /**
     * Stops driver.
     */
    public function stop()
    {
        
    }

    /**
     * Resets driver.
     */
    public function reset()
    {
        
    }

    /**
     * Visit specified URL.
     *
     * @param string $url url of the page
     */
    public function visit($url)
    {
        
    }

    /**
     * Returns current URL address.
     *
     * @return string
     */
    public function getCurrentUrl()
    {
        
    }

    /**
     * Reloads current page.
     */
    public function reload()
    {
        
    }

    /**
     * Moves browser forward 1 page.
     */
    public function forward()
    {
        
    }

    /**
     * Moves browser backward 1 page.
     */
    public function back()
    {
        
    }

    /**
     * Sets HTTP Basic authentication parameters
     *
     * @param string|Boolean $user     user name or false to disable authentication
     * @param string         $password password
     */
    public function setBasicAuth($user, $password)
    {

    }

    /**
     * Switches to specific browser window.
     *
     * @param string $name window name (null for switching back to main window)
     */
    public function switchToWindow($name = null)
    {
        
    }

    /**
     * Switches to specific iFrame.
     *
     * @param string $name iframe name (null for switching back)
     */
    public function switchToIFrame($name = null)
    {
        
    }

    /**
     * Sets specific request header on client.
     *
     * @param string $name
     * @param string $value
     */
    public function setRequestHeader($name, $value)
    {
        
    }

    /**
     * Returns last response headers.
     *
     * @return array
     */
    public function getResponseHeaders()
    {
        
    }

    /**
     * Sets cookie.
     *
     * @param string $name
     * @param string $value
     */
    public function setCookie($name, $value = null)
    {
        
    }

    /**
     * Returns cookie by name.
     *
     * @param string $name
     *
     * @return string|null
     */
    public function getCookie($name)
    {
        
    }

    /**
     * Returns last response status code.
     *
     * @return integer
     */
    public function getStatusCode()
    {
        
    }

    /**
     * Returns last response content.
     *
     * @return string
     */
    public function getContent()
    {
        
    }

    /**
     * Finds elements with specified XPath query.
     *
     * @param string $xpath
     *
     * @return array array of NodeElements
     */
    public function find($xpath)
    {
        
    }

    /**
     * Returns element's tag name by it's XPath query.
     *
     * @param string $xpath
     *
     * @return string
     */
    public function getTagName($xpath)
    {
        
    }

    /**
     * Returns element's text by it's XPath query.
     *
     * @param string $xpath
     *
     * @return string
     */
    public function getText($xpath)
    {
        
    }

    /**
     * Returns element's html by it's XPath query.
     *
     * @param string $xpath
     *
     * @return string
     */
    public function getHtml($xpath)
    {
        
    }

    /**
     * Returns element's attribute by it's XPath query.
     *
     * @param string $xpath
     * @param string $name
     *
     * @return mixed
     */
    public function getAttribute($xpath, $name)
    {
        
    }

    /**
     * Returns element's value by it's XPath query.
     *
     * @param string $xpath
     *
     * @return mixed
     */
    public function getValue($xpath)
    {
        
    }

    /**
     * Sets element's value by it's XPath query.
     *
     * @param string $xpath
     * @param string $value
     */
    public function setValue($xpath, $value)
    {
        
    }

    /**
     * Checks checkbox by it's XPath query.
     *
     * @param string $xpath
     */
    public function check($xpath)
    {
        
    }

    /**
     * Unchecks checkbox by it's XPath query.
     *
     * @param string $xpath
     */
    public function uncheck($xpath)
    {
        
    }

    /**
     * Checks whether checkbox checked located by it's XPath query.
     *
     * @param string $xpath
     *
     * @return Boolean
     */
    public function isChecked($xpath)
    {
        
    }

    /**
     * Selects option from select field located by it's XPath query.
     *
     * @param string  $xpath
     * @param string  $value
     * @param Boolean $multiple
     */
    public function selectOption($xpath, $value, $multiple = false)
    {
        
    }

    /**
     * Clicks button or link located by it's XPath query.
     *
     * @param string $xpath
     */
    public function click($xpath)
    {
        
    }

    /**
     * Double-clicks button or link located by it's XPath query.
     *
     * @param string $xpath
     */
    public function doubleClick($xpath)
    {
        
    }

    /**
     * Right-clicks button or link located by it's XPath query.
     *
     * @param string $xpath
     */
    public function rightClick($xpath)
    {
        
    }

    /**
     * Attaches file path to file field located by it's XPath query.
     *
     * @param string $xpath
     * @param string $path
     */
    public function attachFile($xpath, $path)
    {
        
    }

    /**
     * Checks whether element visible located by it's XPath query.
     *
     * @param string $xpath
     *
     * @return Boolean
     */
    public function isVisible($xpath)
    {
        
    }

    /**
     * Simulates a mouse over on the element.
     *
     * @param string $xpath
     */
    public function mouseOver($xpath)
    {
        
    }

    /**
     * Brings focus to element.
     *
     * @param string $xpath
     */
    public function focus($xpath)
    {
        
    }

    /**
     * Removes focus from element.
     *
     * @param string $xpath
     */
    public function blur($xpath)
    {
        
    }

    /**
     * Presses specific keyboard key.
     *
     * @param string $xpath
     * @param mixed  $char     could be either char ('b') or char-code (98)
     * @param string $modifier keyboard modifier (could be 'ctrl', 'alt', 'shift' or 'meta')
     */
    public function keyPress($xpath, $char, $modifier = null)
    {
        
    }

    /**
     * Pressed down specific keyboard key.
     *
     * @param string $xpath
     * @param mixed  $char     could be either char ('b') or char-code (98)
     * @param string $modifier keyboard modifier (could be 'ctrl', 'alt', 'shift' or 'meta')
     */
    public function keyDown($xpath, $char, $modifier = null)
    {
        
    }

    /**
     * Pressed up specific keyboard key.
     *
     * @param string $xpath
     * @param mixed  $char     could be either char ('b') or char-code (98)
     * @param string $modifier keyboard modifier (could be 'ctrl', 'alt', 'shift' or 'meta')
     */
    public function keyUp($xpath, $char, $modifier = null)
    {
        
    }

    /**
     * Drag one element onto another.
     *
     * @param string $sourceXpath
     * @param string $destinationXpath
     */
    public function dragTo($sourceXpath, $destinationXpath)
    {
        
    }

    /**
     * Executes JS script.
     *
     * @param string $script
     */
    public function executeScript($script)
    {
        
    }

    /**
     * Evaluates JS script.
     *
     * @param string $script
     *
     * @return mixed
     */
    public function evaluateScript($script)
    {
        
    }

    /**
     * Waits some time or until JS condition turns true.
     *
     * @param integer $time      time in milliseconds
     * @param string  $condition JS condition
     */
    public function wait($time, $condition)
    {
        
    }

    /**
     * Capture a screenshot of the current window.
     *
     * @return  string  screenshot of MIME type image/* depending
     *   on driver (e.g., image/png, image/jpeg)
     */
    public function getScreenshot()
    {
        // TODO: Implement getScreenshot() method.
    }

    /**
     * Return the names of all open windows.
     *
     * @return array    array of all open windows
     */
    public function getWindowNames()
    {
        // TODO: Implement getWindowNames() method.
    }

    /**
     * Return the name of the currently active window.
     *
     * @return string    the name of the current window
     */
    public function getWindowName()
    {
        // TODO: Implement getWindowName() method.
    }

    /**
     * Checks whether select option, located by it's XPath query, is selected.
     *
     * @param string $xpath
     *
     * @return Boolean
     */
    public function isSelected($xpath)
    {
        // TODO: Implement isSelected() method.
    }

    /**
     * Set the dimensions of the window.
     *
     * @param integer $width set the window width, measured in pixels
     * @param integer $height set the window height, measured in pixels
     * @param string $name window name (null for the main window)
     */
    public function resizeWindow($width, $height, $name = null)
    {
        // TODO: Implement resizeWindow() method.
    }

    /**
     * Maximize the window if it is not maximized already
     *
     * @param string $name window name (null for the main window)
     */
    public function maximizeWindow($name = null)
    {
        // TODO: Implement maximizeWindow() method.
    }

    /**
     * Submits the form.
     *
     * @param string $xpath Xpath.
     */
    public function submitForm($xpath)
    {
        // TODO: Implement submitForm() method.
    }

    /**
     * Sets the WebDriver instance
     *
     * @param WebDriver $webDriver An instance of the WebDriver class
     */
    public function setWebDriver(WebDriver $webDriver)
    {
        $this->webDriver = $webDriver;
    }


}
