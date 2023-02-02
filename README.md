# Simple Quiz App

## About

Super simple quiz app where users can take quizzes and see how they did. They can continously take the quiz for better marks. The results will be saved in the database. Users can also create their own quiz which will be saved in the database.

## Getting Started

Must have node and php laravel installed. 

in the .env file, set up the database with Postgres and add 'DATABASE_URL' field and add the connection string if you have one already. I.E using ElephantSQL or Render, etc.

Open up a terminal and run the following commands in the root directory:
```javascript
composer install
npm install
```

With the database set up above, run the migrations and seeders.
```javascript
php artisan migrate:fresh
php artisan db:seed --class=QuizSeeder
php artisan db:seed --class=QuestionSeeder
php artisan db:seed --class=AnswerSeeder
```

Now run the following command in the terminal
```javascript
npm run dev
```

Open another terminal run the following command
```javascript
php artisan serve
```

Project should be live on: http://127.0.0.1:8000/

## Pictures

![Home](https://github.com/josemourinho333/quiz-app-vue-laravel/blob/main/docs/Screen%20Shot%202023-02-02%20at%2011.10.08%20AM.png?raw=true)

![Quiz](https://github.com/josemourinho333/quiz-app-vue-laravel/blob/main/docs/Screen%20Shot%202023-02-02%20at%2011.10.24%20AM.png?raw=true)

![Results](https://github.com/josemourinho333/quiz-app-vue-laravel/blob/main/docs/Screen%20Shot%202023-02-02%20at%2011.10.39%20AM.png?raw=true)

![New Quiz](https://github.com/josemourinho333/quiz-app-vue-laravel/blob/main/docs/Screen%20Shot%202023-02-02%20at%2011.18.14%20AM.png?raw=true)
