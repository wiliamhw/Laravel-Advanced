# Laravel 6 Advanced
* [Note](https://github.com/wiliamhw/Laravel-Advanced/blob/main/Laravel%20Advanced%20Note.enex) 
  is openable using Evernote.
* To open it:
    1. make new `.enex` file.
    2. Copy the content of [note](https://github.com/wiliamhw/Laravel-Advanced/blob/main/Laravel%20Advanced%20Note.enex) 
        to the new `.enex` file.
    3. Run the `.enex` file by using double click.
<br>

## 1. Service Container 
[Link](https://www.youtube.com/watch?v=_z9nzEUgro4&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=1)

### Changed Files
* Billing directory
* Orders directory
* PayOrderController.php
* AppServiceProvider.php
<br>

## 2. View Composers
[Link](https://www.youtube.com/watch?v=7QWZxjgvEQc&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=2)

### Changed Files
* Channel controller, model. factory, seeder, migration
* Database seeder
* Web.php
* AppServiceProvider.php
* PostController
* app\Http\View directory
* resources\views\partials directory
* resources\views\post\create.blade.php directory
<br>

## 3. Polymorphic Relationships
[Link](https://www.youtube.com/watch?v=C7T1689IvPQ&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=3)

### Info
* **tweet** object is called **post** in original video.
* Run seeder to see database
* Polymorph object = { comment, image, tag }
* Base object = { tweet, user, video }

### Explanation
* Polymorph object can take form as an attribute of base object.
* Polymorph object use:
    * morphTo()
    * many to many: morphedByMany()
* Base object use:
    * morphOne()
    * morphMany()
    * many to many: MorphToMany()

### Changed Files
* Polymorph object migration and model
* create_taggables_table migration
* Base object migration, model, and factory
* Database Seeder
<br>

## 4. Facades
[Link](https://www.youtube.com/watch?v=zR6JnwH7MSQ&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=4)

### Changed Files
* App\Services directory
* web.php
* AppServiceProvider.php
<br>

## 5. Macros
[Link](https://www.youtube.com/watch?v=S8nz1JqbT9M&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=5)

### Changed Files
* App\Mixin directory
* AppServiceProvider.php
* web.php
<br>

## 6. Pipelines Design Pattern
[Link](https://www.youtube.com/watch?v=7XqEJO-wt7s&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=6)

### Changed Files
* web.php
* App\QueryFilters directory
* Post controller, model, factory, migration
* Database seeder (to seed post)
* views\post\index.blade.php
<br>

## 7. Repository Pattern
[Link](https://www.youtube.com/watch?v=93ZhGkFIwbA&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=7)

### Changed Files
* web.php
* Customer controller, model, factory, migration
* Database seeder (to seed customer)
* App\Repositories directory
* App\Providers\RepositoriesServiceProviders
* config\app.php, at `providers` section
<br>

## 8. Lazy Collections & PHP Generator
[Link](https://www.youtube.com/watch?v=yRpaMx3vvAw&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=8)

### Changed Files
* web.php
<br>

## 9. Soft Deletes
[Link](https://www.youtube.com/watch?v=XPyTHfDCX_A&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=9)

### Info
* **article** object is called **post** in original video.

### Changed Files
* Web.php
* Article model, controller, factory, migration
* Database seeder (to seed article)
* `add_deleted_at_column_to_articles` migration file
<br>
