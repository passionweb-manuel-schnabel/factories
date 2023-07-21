# Using factories in TYPO3

Shows two different use cases of factories. (TYPO3 CMS)

## What does it do?

Adds a plugin for example output of the two different use cases of factories.

## Installation

Add via composer:

    composer require "passionweb/factories"

* Install the extension via composer
* Flush TYPO3 and PHP Cache

## Requirements

This example uses no 3rd party libraries.

## Extension settings

There are the following extension settings available.

### `customKey`

    # cat=Basic; type=string; label=Custom key
    customKey = YOUR_KEY

Enter your custom key (only for testing purposes)

## Troubleshooting and logging

If something does not work as expected take a look at the log file.
Every problem is logged to the TYPO3 log (normally found in `var/log/typo3_*.log`)

## Achieving more together or Feedback, Feedback, Feedback

I'm grateful for any feedback! Be it suggestions for improvement, requests or just a (constructive) feedback on how good or crappy this snippet/repo is.

Feel free to send me your feedback to [service@passionweb.de](mailto:service@passionweb.de "Send Feedback") or [contact me on Slack](https://typo3.slack.com/team/U02FG49J4TG "Contact me on Slack")
