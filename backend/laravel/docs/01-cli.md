#### CLI ####

Run ` php artisan` to see all availabe list of commands.

Under tha "app" chapter you should see list of image-service application context commands. 
```
 app
  app:images:seed  This command process unzipped images. Resize, crop and creates thumbnails from fetched images, than storing processed results in database.
  app:images:unzip Unzip providen archive with photos for seeding.
```


##########################
##### UnzipPhotos Command  
##########################

```
  Command prepears zip archive with photos to seed into the database.

Usage:
  app:images:unzip [options]

Options:
      --archPath[=ARCHPATH]    Archive --archPath=storage/app/public/task-images.zip 
      --extractTo[=EXTRACTTO]  Storage folder for storing fetched images  '--extractTo=--archPath=storage/app/public/tasks-images'
```

Example:
```
    php artisan app:images:unzip  --archPath=storage/app/public/task-images.zip  --extractTo=--archPath=storage/app/public/tasks-images
```


##########################
##### Seed Command  
##########################

` php artisan app:images:seed --help`

```
Description:
  Please use this command to Fill database with new images.

Usage:
  app:images:seed

```


- [back](https://github.com/vkquant/12man/tree/master/docs)
- [main](https://github.com/vkquant/12man)
