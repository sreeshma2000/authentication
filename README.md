# Laravel User Management System

This is a simple user management system built with Laravel. It includes features such as user registration, login, and displaying user details along with automaticallygenerated userid on the dashboard.

## Installation

1. **Install dependencies:**
    composer install

2. **Set up your database:**

    Edit the `.env` file to set your database connection details.

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```
3. **install the laravel ui:**

   composer require laravel/ui
    
4.**install bootstrap for authentication:**

    php artisan ui bootstrap --auth

3. **Run database migrations:**

    php artisan migrate

4. **Install front-end dependencies:**

    npm install
    npm run dev
    
## Configuration

Make sure to configure the necessary environment variables in the `.env` file, including database connection, mail server settings, etc.

## Usage

1. **Start the development server:**

    php artisan serve
   
2. **Access the application:**

    Open your web browser and go to `http://localhost:8000`.

## Features

- **User Registration**: Users can register with their name, email, and password.
- **User Login**: Users can log in with their email and password.
- **Dashboard**: After logging in, users are redirected to the dashboard where their details (name, email, UUID, and registration date) are displayed.
- **Form Validation**: Includes client-side and server-side validation for forms.
- **Bootstrap Styling**: Uses Bootstrap for responsive and attractive UI components.


  ## LOGIN FORM ##

  ![Screenshot (35)](https://github.com/sreeshma2000/authentication/assets/137146236/a544b0ed-ae4c-440d-bbf2-7329ea6cb6d9)

  ## REGISTER FORM ##

  ![Screenshot (34)](https://github.com/sreeshma2000/authentication/assets/137146236/14f4f7b1-891d-46f3-a393-59a24a4a3876)

  ## DASHBOARD ##
  
  ![Screenshot (37)](https://github.com/sreeshma2000/authentication/assets/137146236/daded31b-dcec-4dde-8964-8d073bdd0a3a)

  ## DATABASE ##

   ![Screenshot (42)](https://github.com/sreeshma2000/authentication/assets/137146236/a0f35801-853c-4d0b-a541-e03cac3ef982)



## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
