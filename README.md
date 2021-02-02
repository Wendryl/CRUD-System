# CRUD-System
A customer registration system
## Instructions to run this project
### Clone project and setup the database
```
git clone https://github.com/wendryl/crud-system
cd crud-system

# Use vim or nano, or any editor of your choice
vim php_action/db_connect.php
```

```php
// Alter the following variables with your database setup
  2 $servername = "localhost";
  3 $username = YOUR_DATABASE_USERNAME;
  4 $password = YOUR_DATABASE_PASSWORD;
  5 $db_name = YOUR_DATABASE_NAME;
```
### Import the crud.sql to your database
```
mysql -u YOUR_DATABASE_USERNAME -p YOUR_DATABASE_NAME < crud.sql
```

### Finally - run project
```
php -S localhost:3000
```
