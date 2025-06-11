## FYENEST
## ======= ADMIN =======

- Admin roles, permission
- Product manager
- Banner manager
- Order management
- Category (parent, child) management
- Brand management
- User Management
- Coupon Management
- Reviews Management
- Profile Settings
## ======= USER DASHBOARD =======

- Order management
- Reviews Management
- Profile Settings

### Set up :

1. Clone the repo and cd into it
2. In your terminal ```composer install```
3. Rename or copy ```.env.example``` file to ``.env``
4. php artisan key:generate
5. Set your database credentials in your ```.env``` file
6. Set your Braintree credentials in your ```.env``` file if you want to use PayPal
7. Import db file(```database/FYENEST.sql```) into your database (```mysql,sql```)
8. ```npm install```
9. ```npm run watch```
10. run command[laravel file manager]:-  ```php artisan storage:link```
11. Edit ```.env``` file :- remove APP_URL
10. ```php artisan serve``` or use virtual host
11. Visit ```localhost:8000``` in your browser
12. Visit /admin if you want to access the admin panel. Admin Email/Password: ```admin@gmail.com```/```1111```. User Email/Password: ```user@gmail.com```/```1111```

<p style="text-align:center">Thank You so much for your time !!!</p>
