<?php

namespace Nulpunkt;

use \Behat\Mink\Mink;
use \Behat\Mink\Session;
use \Behat\Mink\Driver\Selenium2Driver;
use \Behat\MinkExtension\Context\MinkContext;

class BrowserstackFeatureContext extends MinkContext
{
    public function __construct($params)
    {
        $this->setBrowserstackParams($params);

        $host = "http://{$this->browserstack_username}:{$this->browserstack_password}@hub.browserstack.com/wd/hub";
        $mink = new Mink(array(
            'selenium2' => new Session(new Selenium2Driver('', $this->capabilities, $host)),
        ));

        $mink->setDefaultSessionName('selenium2');
        $this->setMink($mink);
        $this->setMinkParameters($params);
    }

    private function setBrowserstackParams($params)
    {
        if (!isset($params['username'])) {
            throw new \Exception("Please specify your browserstack username as a parameter to the feature context in behat.yml");
        }
        if (!isset($params['password'])) {
            throw new \Exception("Please specify your browserstack password as a parameter to the feature context in behat.yml");
        }

        $this->browserstack_username = $params['username'];
        $this->browserstack_password = $params['password'];
        $this->capabilities = isset($params['capabilities']) ? $params['capabilities'] : null;
    }
}
