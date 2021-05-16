# 1. Service Container 
[Link](https://www.youtube.com/watch?v=_z9nzEUgro4&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=1)

## Changed Files
* Billing directory
* Orders directory
* PayOrderController.php
* AppServiceProvider.php


# 2. View Composers
[Link](https://www.youtube.com/watch?v=7QWZxjgvEQc&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=2)

## Changed Files
* Channel controller, model. factory, seeder, migration
* Database seeder
* Web.php
* AppServiceProvider.php
* PostController
* app\Http\View directory
* resources\views\partials directory
* resources\views\post\create.blade.php directory


# 3. Polymorphic Relationships
[Link](https://www.youtube.com/watch?v=C7T1689IvPQ&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=3)

## Info
* `tweet` object is called `post` in original video
* Run seeder to see database
* Polymorph object = { comment, image, tag }
* Base object = { tweet, user, video }

## Explanation
* Polymorph object can take form as an attribute of base object.
* Polymorph object use:
    * morphTo()
    * many to many: morphedByMany()
* Base object use:
    * morphOne()
    * morphMany()
    * many to many: MorphToMany()

## Changed Files
* Polymorph object migration and model
* create_taggables_table migration
* Base object migration, model, and factory
* Database Seeder


# 4. Facades
[Link](https://www.youtube.com/watch?v=zR6JnwH7MSQ&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=4)

## Changed Files
* App\Services directory
* web.php
* AppServiceProvider.php


# 5. Macros
[Link](https://www.youtube.com/watch?v=S8nz1JqbT9M&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=5)

## Changed Files
* App\Mixin directory
* AppServiceProvider.php
* web.php


# 6. Pipelines Design Pattern
[Link](https://www.youtube.com/watch?v=7XqEJO-wt7s&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=6)

## Changed Files
* web.php
* App\QueryFilters directory
* Post controller, model, factory, migration
* Database seeder (to seed post)
* views\post\index.blade.php


# 7. Repository Pattern
[Link](https://www.youtube.com/watch?v=93ZhGkFIwbA&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=7)

## Changed Files
* web.php
* Customer controller, model, factory, migration
* Database seeder (to seed customer)
* App\Repositories directory
* App\Providers\RepositoriesServiceProviders
* config\app.php, at `providers` section


# 8. Lazy Collections & PHP Generator
[Link](https://www.youtube.com/watch?v=yRpaMx3vvAw&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=8)

## Changed Files
* web.php
