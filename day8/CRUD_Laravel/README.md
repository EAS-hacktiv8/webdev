# Structure
## Views
#### Index
[contacts/index.blade.php](../../laravel/hacktiv_bri/resources/views/contacts/index.blade.php), for home page, listing all contacts, with options to edit and delete the contact entry
#### Add
[contacts/add.blade.php](../../laravel/hacktiv_bri/resources/views/contacts/add.blade.php), for inputting new contact
#### Edit
[contacts/edit.blade.php](../../laravel/hacktiv_bri/resources/views/contacts/edit.blade.php), opened when clicking edit on a contact entry from home page
#### Search
[contacts/edit.blade.php](../../laravel/hacktiv_bri/resources/views/contacts/edit.blade.php), for searching using name or email. it will list result in the table below the input form.  Use AJAX to fetch the 'api' endpoint so that result is shown on the same page.

## Controller
#### ContactController
[app/Http/Controllers/ContactController.php](../../laravel/hacktiv_bri/app/Http/Controllers/ContactController.php), for all the CRUD handling of the contacts. Using default CRUD route resource from laravel for most of the route, with added `search` and `searchView` for handling searching functionality.

## Extras
#### Birthday Reminder
[app/birthday_reminder.php](../../laravel/hacktiv_bri/app/birthday_reminder.php), for helper function to add reminder if birthday is on the same month. This funcion is added to [composer.json](../../laravel//hacktiv_bri/composer.json) to `autoload.files` so that it can be called on all php function easily

#### Routing
[routes/web.php](../../laravel/hacktiv_bri/routes/web.php), for routing
