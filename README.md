# [Fakestagram](https://fakestagram.fly.dev)
This repository is a Laravel-based attempt to create a simplified Instagram clone, focusing on fundamental social features like photo sharing, user following, and post comments.

## Table of Contents

- [About](#about)
- [Features](#features)
- [Getting Started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [Installation](#installation)
- [Usage](#usage)
    - [Warning](#Warning)
- [License](#license)

## About

Fakestagram is a Laravel project aimed at replicating the core functionalities of Instagram. It provides users with the ability to share photos, follow other users, and engage in discussions through post comments.

## Features

-  ✅ **User Authentication**: Secure user authentication system powered by Laravel's built-in features.
-  ✅ **Photo Sharing**: Upload and share photos with your followers.
-  ✅ **User Following**: Follow other users to stay updated on their latest posts.
- ❌  **Post Comments**: Engage in discussions by commenting on posts.
- ❌  **Notifications**: Receive notifications for new followers and comments.
- ✅  **Search Functionality**: Find and discover new users easily.
- ❌  **Messages**: Enjoy conversations with other users. Share text, images, and more in a secure messaging environment..
- ❌  **Reels**: Create and discover short, engaging video content similar to Instagram Reels.

## Getting Started

### Prerequisites

Before you begin, make sure you have the following installed:

- [PHP](https://www.php.net/) (>= 8.2)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [NPM](https://www.npmjs.com/)
- [MySQL](https://www.mysql.com/) or another database of your choice

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/koloseki/fakestagram.git
   ```
2. Navigate to the project directory:

    ```
   cd fakestagram
   ```

3. Install PHP and Javascript dependencies:

    ```
    composer install
    npm install
   ```

4. Copy the .env.example file to create a .env file:

    ```
    DB_CONNECTION=mysql
    DB_HOST=your-database-host
    DB_PORT=your-database-port
    DB_DATABASE=your-database-name
    DB_USERNAME=your-database-username
    DB_PASSWORD=your-database-password
   ```


5. Connect storages
    ```
    php artisan storage:link
    ```
    for more information refer to : https://laravel.com/docs/11.x/filesystem
   
7. Run database migrations:

    ```
   php artisan migrate
   ```

8. Start the development server:

    ```
   php artisan serve
    npm run dev
   ```

Visit http://localhost:8000 in your browser to view the application.


## Usage
Check out the online demo of Fakestagram [here](https://fakestagram.fly.dev).
(Note it may not contain newest features)

1. Register for a new account or log in if you already have one.
2. Explore and enjoy the core features of Fakestagram.

### Warning

- **Data Loss Risk**: Be aware that this is a development version. Any data you input into the application, such as photos, comments, or messages, might be subject to loss or changes. Do not use real, sensitive information.

## License

This project is open-source and available under the MIT License.
