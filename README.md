# Car & Classic Recruitment PHP task

## Setup steps

* `composer install`
* `touch database/database.sqlite`
* `./artisan migrate`
* `./artisan db:seed`
* `./artisan serve`
* `vendor/bin/phpunit`

## Useful Info
* [TailwindCSS](https://tailwindcss.com/) is available
* [FontAwesome](https://fontawesome.com/) is available
* There is 1 dealer in the database with an id of 1 and a business_name of 'A&H Prestige Motors'

## Reason
We've recently started promoting dealer adverts on our social accounts (Twitter/Instagram primarily).

When we do this we'd like to be able to tag the appropriate dealers' usernames, but we don't have them and dealers have _no_ way to set their account information.

This task is to allow dealers to set some of their details, starting with their Twitter/Instagram handles (if they have them), and their email address which we'll then add verification to in a future task. 

## Acceptance Criteria
* [ ] Dealers have a new 'My Account' page 
* [ ] Dealers can use this new page to update their Twitter handle, if they have one
* [ ] Dealers can use this new page to update their Instagram handle, if they have one
* [ ] Dealers can use this new page to update their email address
* [ ] There is suitable validation & protection
* [ ] Any available improvements possible to the code layout/structure/methods made if sensible
* [ ] Any found errors should be fixed
* [ ] Correct menu item is highlighted when you're on the new page
* [ ] Tests pass: `vendor/bin/phpunit`

## Thoughts
* Should we get a Slack notification that a dealer has updated their details, in case we have any pending ads setup to promote on social?  If so, what are the next actions for this?
* Should we have a checkbox to stop social promotions?  If they don't want us to post their ads?
* Is there any way to verify they've typed in the correct handle?  They might think they have `sexy-classics` but actually they're `sexy-classics-uk`, or they typo to `sexy-clasics` and that doesn't exist at all?

## Notes
* We'll need new columns in the database
* A pull request should be created and a review requested from Ashley Hindle
* Make any and all improvements to the structure/code as you like
