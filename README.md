# Ball Bucket Assignment App.

Please let me know your feedback and comments.

**Laravel 10.x requires a minimum PHP version of 8.1.** for more information visit -  https://laravel.com/docs/10.x/releases


For additional demo data you may use the following command. By using this you can  update the `posts,setting,user` table and insert new demo data. `--fresh` option will truncate the tables, without this command new set to data will be inserted only.

### Installation Instructions
Run
```
https://github.com/coderahuljat/ball_bucket_assignment_app.git
```
```
cd ball_bucket_assignment_app
```
From the projects root run 
```
cp .env.example .env
```
Configure your `.env` file
```
composer install
```
```
npm install
```
```
npm run dev

```
```
php artisan migrate
```
Clear All Cache:
```
 php artisan optimize:clear
```


You may create a virtualhost entry to access the application or run `php artisan serve` from the project root and visit `http://127.0.0.1:8000`
