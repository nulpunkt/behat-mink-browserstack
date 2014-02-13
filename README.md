# Behat-Mink-Browserstack

A feature context which sets up Mink for Browserstack

# Install


``` json
{
    "require": {
        "nulpunkt/behat-mink-browserstack": "*"
    }
}
```

``` bash
$> curl http://getcomposer.org/installer | php
$> php composer.phar install
```

# Usage
Set up Behat like you always do, have your `FeatureContex` extend `Nulpunkt\BrowserstackFeatureContext` and set your Browserstack username and password in your behat.yml.

A sample behat.yml could look like:

``` yaml
default:
  context:
    parameters:
      base_url: http://google.com
      username: USERNAME
      password: PASSWORD
      capabilities: {'browser': 'IE', 'browser_version': '8.0', 'os': 'Windows', 'os_version': '7', 'resolution': '1024x768'}
```

That is it.
