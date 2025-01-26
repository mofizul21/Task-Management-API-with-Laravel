# Task Management API with Authentication using Laravel & Sanctum

## Setup

1. Clone the repository:
   ```git clone <repository-url>```
  ``` cd task-manager-api```

2. Install the dependencies:
    ```composer install```

3. Set up the environment variables:
    ```cp .env.example .env```

4. Run migrations:
    ```php artisan migrate```

5. Start the development server:
    ```php artisan serve```

## API Endpoints
- ```POST /api/tasks```: Create a task.
- ```GET /api/tasks```: Retrieve all tasks.
- ```PUT /api/tasks/{id}```: Mark a task as completed.
- ```DELETE /api/tasks/{id}```: Delete a task.
- ```POST /api/login```: Authenticate a user.
- ```POST /api/register```: Register a new user.
- ```POST /api/logout```: Log out the authenticated user.

Use tools like Postman or Curl to test the API.

## Authentication
The API uses Laravel Sanctum for authentication. To authenticate a request, you need to include the token in the Authorization header. You can obtain the token by sending a POST request to the ```/api/login``` endpoint with the email and password of the user.

## Unit Tests
To run the unit tests, execute the following command:
    ```php artisan test```

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Screenshots
All required screenshots of the API is here:

Create: 
![Create](https://github.com/user-attachments/assets/b78e372f-e7f2-4d0a-b4d5-06cd55d71c15)
Read: 
![READ](https://github.com/user-attachments/assets/cff0b5aa-9f45-4df1-82eb-d035c68cb83f)
Update: 
![Update](https://github.com/user-attachments/assets/c496aea3-e9e4-4bca-ae71-cff5d6ab5516)
Delete: 
![DELETE](https://github.com/user-attachments/assets/0357c4dc-4e08-4229-8073-71483b69e94f)
Run Test: 
![Run Test](https://github.com/user-attachments/assets/27384b6a-4ce2-4c57-98e2-5bc10cdde9a6)

Login with Token: 
![Login with Token](https://github.com/user-attachments/assets/131b0981-c744-4e3a-ab6f-e5fb621e576d)

