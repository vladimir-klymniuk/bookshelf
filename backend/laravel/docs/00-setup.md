### Install ###

##### 1. Clone the repository. ###
` git clone https://github.com/vkquant/12man.git`

##### 2. Create .env file.  ###
` cp .env.example .env`

##### 3. Download vendors.  ###
`composer install --no-cache`

##### 4. Fetch database migrations.  ###
`php artisan migrate:install` or `php artisan migrate:refresh` to reset database.

######## 5. Test  ####
Run `php artisan test` to validate application state.
```
php artisan test

   PASS  Tests\Feature\GerAllAcitveImagesTest
  ✓ show all images

  Tests:  1 passed <--- Yeah! It works! Congratulations!
  Time:   0.44s

```

#### Yeah! It works! Congratulations! ####


- [back](https://github.com/vkquant/12man/tree/master/docs)
- [main](https://github.com/vkquant/12man)
