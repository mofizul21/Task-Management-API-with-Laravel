# Task Management API with Authentication using Laravel & Sanctum

## Setup

1. Clone the repository:
   git clone <repository-url>
   cd task-manager-api

2. Install the dependencies:
    composer install

3. Set up the environment variables:
    cp .env.example .env

4. Run migrations:
    php artisan migrate

5. Start the development server:
    php artisan serve

## API Endpoints
- POST /api/tasks: Create a task.
- GET /api/tasks: Retrieve all tasks.
- PUT /api/tasks/{id}: Mark a task as completed.
- DELETE /api/tasks/{id}: Delete a task.
- POST /api/login: Authenticate a user.
- POST /api/register: Register a new user.
- POST /api/logout: Log out the authenticated user.

Use tools like Postman or Curl to test the API.

## Authentication
The API uses Laravel Sanctum for authentication. To authenticate a request, you need to include the token in the Authorization header. You can obtain the token by sending a POST request to the /api/login endpoint with the email and password of the user.

## Unit Tests
To run the unit tests, execute the following command:
    php artisan test

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Screenshots
