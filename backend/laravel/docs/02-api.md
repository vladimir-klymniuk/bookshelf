### API 

Use this command - ` php artisan serve` to start application webserver.

To explore available API endpoints use `php artisan route:list`.

Example:  
``` 
+--------+----------+-------------------------+------+-----------------------------------------------------+------------+
| Domain | Method   | URI                     | Name | Action                                              | Middleware |
+--------+----------+-------------------------+------+-----------------------------------------------------+------------+
|        | POST     | api/image/upload        |      | App\Http\Controllers\ImageUploaderController@upload | api        |
|        | DELETE   | api/image/{id}          |      | App\Http\Controllers\ImagesController@deleteImage   | api        |
|        | PATCH    | api/image/{id}/favorite |      | App\Http\Controllers\ImagesController@addToFavorite | api        |
|        | PATCH    | api/image/{id}/restore  |      | App\Http\Controllers\ImagesController@restore       | api        |
|        | GET|HEAD | api/image/{id}/show     |      | App\Http\Controllers\ImagesController@show          | api        |
|        | GET|HEAD | api/images              |      | App\Http\Controllers\ImagesController@showAll       | api        |
+--------+----------+-------------------------+------+-----------------------------------------------------+------------+
```

- [back](https://github.com/vkquant/12man/tree/master/docs)
- [main](https://github.com/vkquant/12man)
