# CREATING LARAVEL PROJECT

creating new laravel project command => laravel new <projectName>
checking if application is connected to the db => php artisan migrate

# CREATING TABLES

NB: In Laravel, migrations are used to create tables instead of manually creating them in PhpMyAdmin
Migration cmd => php artisan make:migration <keyword>_<tableName>_<table>
Example -> php artisan make:migration create_products_table

# CREATING COLUMNS

To create columns in a table, use $table-><dataType><columnName>
E.g: $table->string('name');
Run this command to push the columns into the created table -> php artisan migrate

# CREATING MODELS

php artisan make:model <modelName><flags>

# CREATING CONTROLLER

php artisan make:controller <controllerName><flags>
NB:
=> Routes interracts with controller
=> Views interracts with controller

# ROUTES

Routes are created in the web.php file found in the routes folder
Example -> Route::get('/product', [ProductController::class, 'index'])->name('product.index');

<keyword><method>(<navigation><controller><name>)
