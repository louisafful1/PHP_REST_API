# REST_API

This is a beginner-friendly PHP REST API that demonstrates how to create an API for retrieving and managing blog posts. I used PHP's Object-Oriented Programming (OOP) approach and interacts with a MySQL database. The README will guide you through the setup, usage, and key components of the project.

## Project Overview
The rest_api project demonstrates the creation of a basic PHP REST API that interacts with a MySQL database. The key components of the project include:

1. Object-Oriented Programming: The project uses PHP's OOP features to structure code into classes, promoting modularity and reusability.
2. Database Interaction: The API connects to a MySQL database using PDO, allowing retrieval of blog post data.
3. JSON Responses: The API returns data in JSON format, making it compatible with various front-end applications.
4. API Endpoints: The project provides an endpoint to retrieve blog posts.
5. Endpoint Testing with Postman: The API has been tested using Postman, a popular tool for API testing and development.


## Requirements
1. PHP 5.4+
2. MySQL database
3. Web server environment (e.g., XAMPP, WAMP, LAMP)

## Installation
1. Clone this repository or download the source code.
2. Place the project folder inside the appropriate directory of your web server (e.g., htdocs for XAMPP, www for wampp).

## Configuration
1. Open includes/config.php and update the following constants with your database credentials.

## Endpoints
Retrieve Blog Posts
- URL: /api/posts/read.php
- HTTP Method: GET
- Headers:
      Access-Control-Allow-Origin: Allows anyone to access without any authentication (CORS).
      Content-Type: Specifies the response content type as JSON.
-Response Format: JSON

## Usage:

To retrieve the list of blog posts, make a GET request to the URL: /restapi/REST_API/api/read.php

Response:
The response will be in JSON format and will contain an array of blog post objects. Each object has attributes such as id, title, body, author, category_id, and category_name.

Contributing
Contributions to this project are welcome! If you find bugs or have suggestions, feel free to create issues or pull requests.






