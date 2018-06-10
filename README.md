# laravel-passport-startup
This project is to start a laravel API passport project, which use oAuth2.0 API model.

to view routes you can test, you can type this command in the terminal located to the project :

php artisan route-list

in this project there is a one test created, you can use this route (GET method) to test it:
YOURHOST:PORT/personalAccessTokenTest/

ex: 127.0.0.1:8000/personalAccessTokenTest

You should be logged-in to use this route, then you should type the Token name (useually the name of the application).
the response should be JSON data which is access token and some data about client.
