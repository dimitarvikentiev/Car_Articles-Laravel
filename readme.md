<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Website introduction

The website is about car articles. 
For example:
- Car reviews.
- News from car expositions.

The website provides functionality to create, update and delete car related articles.
The user can create an account where he/she can attach a profile photo. 
The website provides a watermark for each photo.
Each user can edit and delete only his own articles.
Each article can be exported as a pdf from all users.
Note that when the article is deleted by an user it is not deleted from the database.

## Admin account

An admin account can be created from the command prompt with the following command:
<img src="http://i.imgur.com/76qzjdr.png" width="800" height="461"/>

You can only use the admin account if you type manually enter the url.
- Admin login: http://localhost:8000/admin/login
- Admin dashboard: http://localhost:8000/admin

Note that there is no functionality only related for the admin account but this can be added in the future. For example the admin could have the option to see all the articles - even the deleted ones. The admin could also edit and delete all the articles.

## Libraries and extensions used:
- Intervention for image.
- DOMPDF Wrapper

## The website uses RESTful API that provides CRUD functionalities
Postman can be used for testing the RESTful API.

### For creating:
<img src="http://i.imgur.com/9ci8vVG.jpg" width="800" height="331"/>

### To show all posts:
<img src="http://i.imgur.com/pudgCe6.jpg" width="800" height="409"/>

### To show the post that we created:
<img src="http://i.imgur.com/ed9C1vV.jpg" width="800" height="239"/>

### To edit the post that we created:
<img src="http://i.imgur.com/Wk8oFFf.jpg" width="800" height="324"/>

### To delete the post that we created:
<img src="http://i.imgur.com/zhq41DH.jpg" width="800" height="251"/>





