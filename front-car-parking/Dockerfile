FROM node:18

WORKDIR /usr/src/app/my-app


COPY package*.json  .
# COPY node_modules  .

COPY . .

RUN npm install
# RUN npm run build

EXPOSE 2000

CMD ["npm", "run", "dev"]