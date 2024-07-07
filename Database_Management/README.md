# Database Management with MySQL
# By. Xavier Alers
# July 6th, 2024

This project demonstrates my skills in managing and optimizing MySQL databases.

It includes creating and managing database schemas, writing complex SQL queries, and optimizing database performance.

## Table of Contents
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Setup Instructions](#setup-instructions)
- [Project Structure](#project-structure)
- [Usage](#usage)
- [Optimization](#optimization)
- [Future Enhancements](#future-enhancements)

## Features
- Create and manage databse schemas
- Insert, update, and delete data
- Write complex SEL queries
-Optimize database performance

## Technologies Used
- PHP
- MySQL
- phpMyAdmin
- XAMPP (Local Development)

## Setup Instructions
### Prerequisites
- XAMPP (or any othe PHP and MySQL development environment)

### Steps
1. **Clone the repository**:
    ```bash
    git clone https://github.com/CrunchyTaconess/database_management.git
    ```

2. **Move the project to the XAMPP `htdocs` directory**:
    ```bash
    mv api_project /path/to/xampp/htdocs/
    Example: "C:\xampp\htdocs\PHP_Interview_Projects\Database_Management
    ```

3. **Start Apache and MySQL in XAMPP**.

4. **Create the database and tables**
    - Open phpMyAdmin and create a new database named `db_management`.
    - Run the SQL scripts in `scripts/create_tables.php` to create the tables.

5. **Insert, update, delete, and query data**:
    - Navigate to the `scripts` directory in your browser to run the respective scripts.

## Project Structure
database_management/
|--includes/
|  --db.php
|--scripts/
|  --create_tables.php
|  --insert_data.php
|  --update_data.php
|  --delete_data.php
|  --query_data.php
|__index.php

## Usage
### Create Tables
- Navigate to `http://localhost/Database_Management/scripts/create_tables.php` to create the tables.

### Insert Data
- Navigate to `http://localhost/Database_Management/scripts/insert_data.php` to insert data.

### Update Data
- Navigate to `http://localhost/Database_Management/scripts/update_data.php` to update data.

### Delete Data
- Navigate to `http://localhost/Database_Management/scripts/delete_data.php` to delete data.

### Query Data
- Navigate to `http://localhost/Database_Management/scripts/query_data.php` to query data.

## Optimization
### Possible Optimizations
- **Indexes**: Indexes are created on `user_id` and `post_id` to optimize queries.
    ```sql
    CREATE INDEX idx_user_id ON posts(user_id);
    CREATE INDEX idx_post_id ON comments(post_id);
    ```

- **Query Analysis**: Use `EXPLAIN` to analyze and improve query performance.

## Future Enhancements
- Implement stored procedureds for complex operations.
- Use triggers to automate specific tasks.
- Implement database partitioning for large datasets.
- Integrate caching mechanisms for frequently accessed data.

---

This project showcases my ability to manage and optimize MySQL databases, including creating schemas, writing complex queries, and optimizing performance. Feel free to reach out with any questions or feedback.