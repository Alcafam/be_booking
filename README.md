# Event Booking: https://fe-booking-eight.vercel.app/

This project is a Laravel 10 application designed to handle event bookings.

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

## Brief Explanation of Approach

1. **Make It Work First, Then Refactor**:  
   The primary goal during the development was to make the core features functional as quickly as possible. This included implementing event booking, basic authentication, and necessary database interactions. Once the core features were confirmed to be working, refactoring and optimization were done to ensure maintainability and improve performance.

2. Some of the best practices used in this project come from previous roles and experiences with Laravel development

---

## Notes on Incomplete or Additional Features

1. Email Confirmation After Booking  
2. Event Search/Filter by Category or Date  
3. Authentication - HTTPOnly Cookies for Improved Security  

---
