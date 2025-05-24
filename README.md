# Event Booking: https://fe-booking-eight.vercel.app/

This project is a Laravel 10 application designed to handle event bookings.
**Deployed @ Render**

### Api Testing Postman Workspace
https://app.getpostman.com/join-team?invite_code=d874e88cdd5ae159ffff271a1f44e43d6bb2cb1170660e91a318720e0c28dbfe&target_code=701bf6da2095c0f89f024395e6e0e98c

## Setup Instructions

Follow these steps to set up the project on your local machine:

### Prerequisites

- PHP 8.1+ 
- Composer
- MySQL (development) and PostgreSQL (production)
- Laravel 10.x

### Installation Steps

1. **Clone the repository**:
   ```bash
   git clone https://github.com/Alcafam/be_booking.git
   cd be_booking
   ```

2. **Install PHP dependencies**:
   Run the following command to install PHP dependencies via Composer:
   ```bash
   composer install
   ```

3. **Set up environment variables**:
   ```bash
   cp .env.example .env
   ```
   Then, configure your database and other necessary environment variables in the `.env` file (e.g., database connection, mail settings).

5. **Generate the application key**:
   ```bash
   php artisan key:generate
   ```

6. **Run database migrations**:
   ```bash
   php artisan migrate
   ```

7. **Run Seeder**:
   ```bash
   php artisan db:seed
   ```

8. **Run the application**:
   ```bash
   php artisan serve
   ```

   Visit `http://127.0.0.1:8000` in your browser to view the project.
---

## Notes on Incomplete or Additional Features

1. Email Confirmation After Booking  
2. Event Search/Filter by Category or Date  
3. Authentication - HTTPOnly Cookies for Improved Security  

---

## Credentials that you can use
**Admin**
email : alice.johnson@example.com
password: password

email : alice.johnson@example.com
password: password

**Users**
email : bob.smith@example.com
password: password

email : john.doe@example.com
password: password

email : sarah.miller@example.com
password: password

email : james.williams@example.com
password: password
