## CSCI E-15 Dynmaic Web Applications Project P4
## Automation Reporting Tool (ART)

ART is a web based tool that allows users to view results from Automation test runs (currently Selenium WebDriver with TestNG). 

## GitHub Repo
https://github.com/cwelect1/p4

## Live Server
http://p4.corbettweinberg.me/

## Screencast Demonstration
http://screencast.com/t/r7OWBse47Lq

## Sources
###Framework/CSS
 - Bootstrap 3.3.5
 - Laravel 5.1.
 - PHP 

## CSCI E-15 DWA - Goals (http://dwa15.com/Projects/P4)

 - DONE - Uses PHP/Laravel.
 - DONE - Uses a database with at least 2 tables. This count does not include a users table, but does include pivot tables.
 - DONE - Demonstrates all 4 CRUD interactions (user signup/login does not count towards this).
 - DONE - Demonstrates basic server-side error validation.
 - DONE - README.md file organized, written with proper Markdown syntax, in the correct location, and following all other points outlined in the README specifications?
 - DONE - Screencast link in README.
 - DONE - Subdomain correct (http://p4.yourdomain.com)
 - DONE - Site design and interface is clear and easy to use.
 - DONE - Provided basic usage instructions and context for the user.
 - DONE - Demonstrates 4 database CRUD operations (Create, Read, Update, Delete)?
 - DONE - Site makes use of at least 2 different tables (not including a users table)?
 - DONE - Site demonstrates basic server-side error validation?
 - DONE - Application includes functioning migration and seeder files?
 - DONE - Best practices followed for coding as we've demonstrated in lectures thus far? For example:
 - DONE - P4 Planning Document thorough, complete, and turned in on time.

## Known Bugs/Future fixes/enhancements
  - Client Side validation not implemented.
  - Server Side validation doesn't report issues to end user.
  - Cascading delete doesn't work (for the seeded data that has relationships). Constraint error occurs.
  - Dashboard charts not complete. Only Smoke tests are being calculated based on actual test data. Other 2 charts are hard coded.
  - Individual Test Runs page not finished (linked from ID on Dashboard page).
  - Most nav links point to same placholder page. Will customize for each type (partner, infrastructure, etc...)
  - Placeholder links in top nav go to placeholder pages.

## Notes to TA
 - I didn't implement authentication yet, so there is no need to login.