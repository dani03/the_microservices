FROM node:18

WORKDIR /app

COPY ./front-car-parking/package.json  .

RUN npm install

COPY ./front-car-parking .

EXPOSE 2000

CMD ["npm", "run", "dev", "--", "--port 2000"]