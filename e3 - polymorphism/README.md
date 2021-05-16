#3. Polymorphic Relationships
[Link](https://www.youtube.com/watch?v=C7T1689IvPQ&list=PLpzy7FIRqpGD5pN3-Y66YDtxJCYuGumFO&index=3)

## Info
* Run seeder to see database
* Polymorph model = { comment, image, tag }
* Base model = { post, user, video }

## Explanation
* Polymorph model can take form as an attribute of base model.
* Polymorph model use:
    * morphTo()
    * many to many: morphedByMany()
* Base model use:
    * morphOne()
    * morphMany()
    * many to many: MorphToMany()

## Changed Files
* Models directory
* Controllers directory
* Migrations directory
