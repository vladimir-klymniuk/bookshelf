## Image-processor service.

#### This service serve RESTFull api backend which used by SPA application.
###### Requirements php7.4, mysql5.7+

```
   Projects overview:
        - app
            - Console
                - Commands      // UI, CLI interface.
            - DataTransformer   // Application, DataMappers.
            - DTO               // Domain.
            - Exceptions        // Domain.
            - Http              // UI. HTTP interface. 
                - Controllers   
                - Middleware
            - Manager           // Persistent, ORM. Work with db driver, using full access to change data.
            - Entities          // Persistent, Domain. Object Oriented Presentation of tables row and it's relations.
                - Type          // Domain, Dictionary. Just dictionaries to reduce copy paste strings.
            - Repositories      // Persistent, ORM. Data reader.
            - Services          // Service, Facade. proxies and other building blocks.
        - docker                // Infra
            - php-web
            - nginx
            - mysql
        - database             // Infra, Persistent
            - migrations
        - config               // 
              
```



## Installation: ###
##### 1. Clone the repository. ###
` git clone https://github.com/`
##### 2. Create .env file.  ###
` cp .env.example .env`
##### 3. Download vendors.  ###
`composer install --no-cache`
##### 4. Fetch database migrations.  ###
`php artisan migrate:install` or `php artisan migrate:refresh` to reset database.
######## 5. Test  ####
Run `php artisan test` to validate application state.


## Read more about below: 
- [SETUP](https://github.com/vkquant/12man/blob/master/docs/00-setup.md)
- [CLI](https://github.com/vkquant/12man/blob/master/docs/01-cli.md)
- [API](https://github.com/vkquant/12man/blob/master/docs/02-api.md)
- [TESTING](https://github.com/vkquant/12man/blob/master/docs/03-tests.md)
- [RUN & DEPLOY](https://github.com/vkquant/12man/blob/master/docs/04-run.md)
- [DOCKER](https://github.com/vkquant/12man/blob/master/docs/05-docker.md)

