# Forex Trading Website Template

This is a public Forex trading website template built using HTML, Bootstrap, CSS, JavaScript, and PHP. The template provides a responsive and customizable interface for displaying Forex trading information.

## Features

- Responsive Design using Bootstrap


## Technologies Used

- HTML
- Bootstrap
- CSS
- JavaScript
- PHP

## Getting Started

### Prerequisites

- XAMPP or any other PHP development environment
- Git

### Installation

1. Clone the repository:
    ```sh
    git clone [https://github.com/YashR34/forex_trading_website_template.git](https://github.com/YashR34/forex-trading-website-template.git)
    cd forex_trading_website_template
    ```

2. Move the project files to your XAMPP htdocs directory:
    ```sh
    mv forex_trading_website_template /path/to/xampp/htdocs/forex_trading
    ```

3. Create a database in MySQL:
    - Open phpMyAdmin (http://localhost/phpmyadmin)
    - Create a new database named `forex_trading`

4. Import the `forex_trading.sql` file into the `forex_trading` database:
    - In phpMyAdmin, select the `forex_trading` database
    - Go to the Import tab
    - Choose the `forex_trading.sql` file from the project directory
    - Click Go

5. Update the database configuration in `config.php` file:
    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "forex_trading";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    ```

6. Make sure to create an `uploads` folder inside the `assets` directory for storing uploaded files:
    ```sh
    mkdir -p assets/uploads
    ```

7. Start XAMPP and ensure Apache and MySQL are running.

8. Access the website by navigating to:
    ```
    http://localhost/forex_trading
    ```

## Usage

- Access real-time Forex data and trading information.
- View and analyze historical data charts.

## Contributing

1. Fork the repository.
2. Create your feature branch:
    ```sh
    git checkout -b feature/your-feature
    ```
3. Commit your changes:
    ```sh
    git commit -m 'Add some feature'
    ```
4. Push to the branch:
    ```sh
    git push origin feature/your-feature
    ```
5. Open a pull request.



For any questions or feedback, please contact [YashR34](https://github.com/YashR34).
