# Assignment-Frontend-ROI
Description
------------------
APSIS Lead (ProspectEye) generates lots of leads to our users every day. To be able to deliver a good ROI of the value of all the leads we create we must be able to score leads in a good way. If we have a good scoring model we can then present an ROI to our users what value we create for them on a daily or monthly basis.

The scoring model is based on bagdes. Badges have a score and a money value. A badge also have a relation to a lead together with a timestamp.

Assignment
------------------
Your assignment is to design a view that presents the ROI for our users. There should also be a view to add, edit and delete the badges. There should also be a backend written that delivers data to the view.

**ROI view**

Should present the value of all leads that have a badge for a given timeframe, ie per day or per month. There should also be possible to toggle between different timeframes. Both the combined score and money should be presented in a nice way. It would also be nice to get the difference in percentage according to prior timeframe. The assignment don't state how the view should be design so graphs, textual-values, donut-graphs is allowed aslong as it looks nice ofcourse =) (grapical frontend libraries are allowed)

**Badge view**

Should be possible to add a new badge with a given score and money. Should be able to update a badge's score and money, should be able to delete a badge.
In this assignment the badges should be connected to leads.

Install
------------------
- Fork the master branch or download the zip for this repo.
- Install php components with `php composer.phar install`
- Install bower components with `bower install`
- NOTE: if bower is not installed on computer you have to run `npm install -g bower` first
- NOTE #2: if npm is not installed on computer you have to install it aswell https://nodejs.org/#download
- Start a php webserver to the root path of the repo folder
- Enter url http://localhost:[port]/public
- Don't forget to run the unittests!

Prerequisites
------------------
You don't need a database in this assignment. All the values can be variables in a session. The backend should be able to deliver the following entities and endpoints.

**Models**

```
Badge structure
- Id (int)
- AccountId (int)
- Score (int)
- Money (int)
```

```
BadgeRelation structure
- (LeadId) (int)
- (BadgeId) (int)
- (Timestamp) (timestamp)
```

**Controllers**

```
Badge api controller
- all (GET /api/badge)
- read (GET /api/badge/:id)
- insert (POST /api/badge)
- update (PUT /api/badge/:id)
- delete (DELETE /api/badge/:id)
```

```
BadgeRelation api controller
- all (GET /api/badgerelation)
- allByTimestamp (GET /api/badgerelation/:timestamp)
- insert (POST /api/badgerelation)
- delete (DELETE /api/badgerelation/:id)
```

**Backend**

PHP should be used for backend programming and to write REST routes the framework Slim should be used https://github.com/slimphp/Slim

The backend structure should be written with routes -> controllers -> repositories -> entities

**Frontend**

For frontend AngularJS (https://angularjs.org/) should be used (jQuery can also be used but should not be used as DOM-manipulation)
Framework like underscore (http://underscorejs.org/) and lodash (https://lodash.com/) is also allowed.
Browser support for IE10+, Chrome, Firefox and Safari is a requirement.

The css should be written in sass, less or stylus. Bootstrap is not allowed.

**Unittest**

Development should be testdriven and unit testing should be used for php with https://phpunit.de/. No unit test needs to be written for frontend but it ofcourse gives a plus if its done (should be tested with karma and jasmine)

**How to send in the assignment**

Fork this repo to begin the assignment. Create a branch with you github-username and do all development there. When you are done send a pull-request back to us.

**Last words**

Structure of all code is very important (PHP, javascript and css) aswell as good looking UI/UX. The design of classes and functions should be simple and understandable. We appriciate smaller classes and functions over big functions and big classes. Keep it simple!

Good luck!

