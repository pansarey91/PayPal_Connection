# Pay Page
#### 1. Setting up the project
```bash
git clone https://github.com/pansarey91/pay.git
```
#### 2. Running the project

1) first start the Xammp server

2) Create database pay

3) Create table products

    CREATE TABLE products (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    qty INT NOT NULL,
    image VARCHAR(255),
    description TEXT
);

4) config the config/config.php file as which database you want to use and its username and password

5)  create your developer.paypal.com account and create a new application.

6)  copy your client id and secret key

7)  paste your client id and secret key in pay.php at line no. 34 at the test word

8)  open the index.php file in your browser and click on pay button