# # Project 2 - Input/Output Sanitization

Time spent: **30** hours spent in total

## User Stories

The following **required** functionality is completed:

1\. [x]  Required: Import the Starting Database

2\. [x]  Required: Set Up the Starting Code

3 \. [x]  Required: Review code for Staff CMS for Users

4\. [ ]  Required: Complete Staff CMS for Salespeople
  * [x]  Required: index.php
  * [x]  Required: show.php
  * [x]  Required: new.php
  * [ ]  Required: edit.php

5\. [ ]  Required: Complete Staff CMS for States
  * [x]  Required: index.php
  * [x]  Required: show.php
  * [x]  Required: new.php
  * [ ]  Required: edit.php

6\. [ ]  Required: Complete Staff CMS for Territories
  * [x]  Required: index.php
  * [x]  Required: show.php
  * [x]  Required: new.php
  * [ ]  Required: edit.php

7\. [ ]  Required: Add Data Validations
  * [x]  Required: Validate that no values are left blank.
  * [x]  Required: Validate that all string values are less than 255 characters.
  * [x]  Required: Validate that usernames contain only the whitelisted characters.
  * [x]  Required: Validate that phone numbers contain only the whitelisted characters.
  * [x]  Required: Validate that email addresses contain only whitelisted characters.
  * [ ]  Required: Add *at least 5* other validations of your choosing.

8\. [ ]  Required: Sanitization
  * [ ]  Required: All input and dynamic output should be sanitized.
  * [ ]  Required: Sanitize dynamic data for URLs
  * [ ]  Required: Sanitize dynamic data for HTML
  * [ ]  Required: Sanitize dynamic data for SQL

9\. [ ]  Required: Penetration Testing
  * [ ]  Required: Verify form inputs are not vulnerable to SQLI attacks.
  * [ ]  Required: Verify query strings are not vulnerable to SQLI attacks.
  * [ ]  Required: Verify form inputs are not vulnerable to XSS attacks.
  * [ ]  Required: Verify query strings are not vulnerable to XSS attacks.
  * [ ]  Required: Listed other bugs or security vulnerabilities


The following advanced user stories are optional:

- [ ]  Bonus: On "public/staff/territories/show.php", display the name of the state.

- [ ]  Bonus: Validate the uniqueness of `users.username`.

- [ ]  Bonus: Add a page for "public/staff/users/delete.php".

- [ ]  Bonus: Add a Staff CMS for countries.

- [ ]  Advanced: Nest the CMS for states inside of the Staff CMS for countries


## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/qYfe3gq.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

I had trouble getting the edit.php pages to implement the edits made to the page. I think the problem may lie within the update functions. I am continually revising the code to see what the problem may be.  

## License

    Copyright [2017] [Omar Syed]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
