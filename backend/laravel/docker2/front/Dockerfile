FROM node:15

WORKDIR /var/www/front

ENV PATH /var/www/front/node_modules/.bin:$PATH
COPY ./package.json ./yarn.lock ./package-lock.json ./

RUN yarn install --no-cache

ENV NODE_ENV production

RUN yarn build --no-cache --frozen-lockfile

COPY ./ /var/www/front

EXPOSE 3000

CMD ["yarn", "start"]

