# File Management Application

Welcome to the File Management Application! This application is designed to help users register, upload, and manage their documents in a centralized location. Built using Laravel 11, Alpine.js, Livewire, Tailwind CSS, and DaisyUI, this application provides a modern, responsive interface for seamless document management.

## Table of Contents

1. [Prerequisites](#prerequisites)
2. [Installation](#installation)
3. [Configuration](#configuration)
4. [Usage](#usage)

## Prerequisites

Before you begin, ensure you have met the following requirements:

- **PHP**: 8.1 or higher
- **Composer**: For managing PHP dependencies
- **Node.js**: For managing frontend dependencies
- **npm**: Node package manager
- **MySQL**: Or any other supported database

## Installation

Follow these steps to set up the application:

1. **Clone the Repository**

   
    git clone https://github.com/msaShahid/file-management-system.git
    

2. **Navigate to the Project Directory**

   
    cd file-management-system
    

3. **Install PHP Dependencies**

   
    composer install
    

4. **Install JavaScript Dependencies**

   
    npm install
    

5. **Copy the Environment File**

   
    cp .env.example .env
    

6. **Generate the Application Key**

   
    php artisan key:generate
    

7. **Set Up the Database**

    Update your `.env` file with the appropriate database configuration:

    env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    

8. **Run Migrations**

   
    php artisan migrate
    

9. **Build the Frontend Assets**

   
    npm run dev
    

10. **Serve the Application**

   
    php artisan serve
    

    The application will be accessible at `http://localhost:8000`.

## Configuration

### Environment Configuration

Ensure that the following environment variables are set in your `.env` file:

- `APP_NAME`
- `APP_ENV`
- `APP_KEY`
- `APP_DEBUG`
- `APP_URL`
- `LOG_CHANNEL`
- `DB_CONNECTION`
- `DB_HOST`
- `DB_PORT`
- `DB_DATABASE`
- `DB_USERNAME`
- `DB_PASSWORD`

### File Uploads

Make sure that the `storage` directory is writable and configured correctly to handle file uploads. You may need to create a symbolic link to the `public` directory:


php artisan storage:link


## Usage

1. **Register an Account**

    Navigate to the registration page and create an account.

2. **Login**

    After registration, log in to your account using your credentials.

3. **Upload Documents**

    Once logged in, navigate top right corner to Add file button, and select your files for upload.

4. **Manage Documents**

    You can view, download, or delete your uploaded documents from the user dashboard.



## Contributing

Contributions are welcome! Please follow these guidelines:

1. Fork the repository.
2. Create a new branch for your changes.
3. Commit your changes and push them to your fork.
4. Open a pull request with a clear description of your changes.

