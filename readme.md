## BUILDING A BLOG USING LARAVEL V6.0.2

### 1. Create the project
	> composer create-project laravel/laravel==6.0.2 lblog
### 2. Create page: using template inheritance
### 3. Create db: ka_lblog
### 4. Create controller
	> λ php artisan make:controller StudentController --resource
	> Controller created successfully.
### 5. Create model
	> λ php artisan make:model Students -m
	Model created successfully.
	Created Migration: 2020_08_09_013313_create_students_table
### 6. Create studen table schema
	Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
        });
    > run migration: php artisan migrate
    ... 
    error
    > fixing error
    # re-run migration
	λ php artisan migrate
	Migration table created successfully.
	Migrating: 2014_10_12_000000_create_users_table
	Migrated:  2014_10_12_000000_create_users_table (1.6 seconds)
	Migrating: 2014_10_12_100000_create_password_resets_table
	Migrated:  2014_10_12_100000_create_password_resets_table (0.32 seconds)
	Migrating: 2019_08_19_000000_create_failed_jobs_table
	Migrated:  2019_08_19_000000_create_failed_jobs_table (1.01 seconds)
	Migrating: 2020_08_09_013313_create_students_table
	Migrated:  2020_08_09_013313_create_students_table (0.51 seconds)