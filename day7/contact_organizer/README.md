## Pages
### index.php
For homepage, showing all the contacts stored.
### add.php
For adding new contacts
### edit.php
Editing existing contacts. Similar UI with add.php, but the input is pre-filled

## Model
### dbconn.php
Initializing mySQL Connection
### kontak.php
Kontak object and KontakList object.<br/>
KontakList consist of array of Kontak, and has `add`, `edit`, and `delete` function that will execute sql query

## API
### contact_{add|delete|edit}.php
use `kontak.php` to get kontaklist object, then use it's internal function to modify db data.

## DB
### kontak_mgmt.sql
export of mysql database

## Extras
### function/birthday_reminder.php
function to add highlight for birthday in the same month
### search.php, contact_search.php
search functionality