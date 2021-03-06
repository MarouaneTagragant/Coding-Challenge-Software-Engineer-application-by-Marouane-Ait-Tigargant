# Coding chalange - Laravel / VueJs
---
### Tech Specification

  - Laravel 8
  - Vue 2 + VueRouter
  - Vue-bootstrap
  - CLI costume commands

### Features

  - CRUD (Create / Read / Update / Delete) Product 
  - CRUD (Create / Read / Update / Delete) Category
  - CLI Commands

### Installation

to use this project please follow the instrection below

```sh
$ git clone https://github.com/MarouaneTagragant/Coding-Challenge-Software-Engineer-application-by-Marouane-Ait-Tigargant.git
$ cd path_to_project
$ composer install
$ cp .env.example .env
$ cp .env.example .env
```
Update .env and set your database credentials

```sh
$ php artisan migrate
$ npm install
$ npm run dev
```
And finally to start the server so that you can consult the executed project the following command
```sh
$ php artisan serve
```
Verify the deployment by navigating to your server address in your preferred browser.
```sh
127.0.0.1:8000
```

to use CLI commande for Delete or ADD (Product/Category)
```sh
    $ php artisan command:AddProduct ProductName ProductDescription price category_id path_img
    $ php artisan command:deleteProduct id_Product
    $ php artisan command:AddCategory CategoryName ParentCategoty_id/Optionelle
    $ php artisan command:deleteCategory id_Category
```

License
----

MIT