# ShareThePaws

This web app was built in a group of 4 as part of a term project for the Relational Databases courses at the University of British Columbia. 

## Setup Notes

Need to set appropriate permissions for htdocs/temp and htdocs/upload directories for file upload to work successfully (this is assuming the application is run in xamppfiles)

## Context

The web app is modelling a simple dog walking service, where dog owners display their dogs and volunteers can request dogs to walk. An example user story: Fred (dog owner) walks his dog on his way to class/work, and wants a walker to meet him there. The walker, Sally, has time between her classes to play with a dog. She takes care of Rover(dog) for an hour, until Fred finishes and repossesses the canine. 

There are 2 types of users for this system, a dog walker and dog owner. Owners are able to upload their dogs. 

Volunteer dog walkers can browse through the selection of dogs and request a walk. Dog owners are able to accept a walk request, and leave a review once the walk is done. 

We implemented this in HTML/CSS and PHP, utilizing the Computer Science department’s Oracle database

### SQL Queries used: 
As part of the project's criterias, the SQL Queries are shown:

#### OWNER (bob)

Insert Operation: Add Walk Post

Update Operation: Edit Walk Post (that hasn't been booked)

#### WALKER (joe)

Selection: Filter Walk Post by time

Join: Filter Walk Posts by dog size

#### OWNER

Delete Operation: Delete Walk Post, deletes all associated requests as well

#### OTHER FEATURES

Projection: Collections -> Dogs, select attributes to view

Aggregation: Dog Walkers display average rating

Nested aggregation with group-by: Collections -> Dog walkers, display count and average of ratings for all dog walkers

Division: Collections -> Hall of Fame, display dog walkers who have walked all the dogs
