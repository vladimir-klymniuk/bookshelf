.DEFAULT_GOAL:=help

dockerFolder=docker
services=nginx redis redis-commander mysql app

#help: ###
    #@awk 'BEGIN {FS =":.*##"; printf "\nUsage:\n make \033<target>\033\n" /^[a-zA-Z_-]+:.*?##/ '
     #${MAKEFILE_LIST}
registry:
	cd $(dockerFolder) && docker-compose build --no-cache registry && docker-compose up -d registry
docker-login:
	docker login 0.0.0.0:5000
env:
	cd $(dockerFolder) && cp .env.example .env

build:
	cd $(dockerFolder) && docker-compose build --no-cache ${services}

start:
	cd $(dockerFolder) && docker-compose up -d ${services}

stop:
	cd $(dockerFolder) && docker-compose down

restart:
	make stop && make start

testing-env:
	cp .env.test .env.test.local

redis-commander:
    export HTTP_USER=root && export HTTP_PASSWORD=123312 && redis-commander
