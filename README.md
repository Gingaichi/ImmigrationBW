# Student and Work Permit Management System 🎓🛂

A full-stack web application designed to streamline the application, verification, and management of student and work permits. The system includes facial recognition for secure identity verification and online payment integration witj Stripe.

Visit website at
https://immigrationbw-main-ssxsqs.laravel.cloud/landing
(database is not hosted yet, so some functionalities are unavailable for now)

## 🚀 Features

- ✅ Registration & login
- 🧾 Online application for student permits and work permits
- 📄 Upload & manage required documents
- 🔄 Application status tracking
- 🧠 Face authentication using webcam + uploaded passport photo
- 🧠 Liveness detection (head movement / facial match)
- 🧠 Image processing (passport photo background color checking)
- 📬 Email notifications and in-app notifications on application updates
- 🔐 Role-based access for Admin, Immigration Officer, and Student
- 📊 Admin dashboard with application statistics
- 🧾 Stripe payment integration (if applicable)
- 📁 Document export / permit PDF generation

## 🧠 Facial Recognition & Liveness

- Uses Python and the `face_recognition` library
- Compares uploaded passport photo with real-time webcam feed
- Adds liveness detection via head movement prompts
- Integrated into Laravel backend through API and Python-Flask microservice

## 🛠 Tech Stack

| Layer        | Technology                     |
|--------------|---------------------------------|
| Frontend     | Blade (Laravel)   |
| Backend      | Laravel                         |
| Face Auth    | Python 3.13 + Flask + OpenCV    |
| Auth         | Laravel Sanctum / Passport      |
| DB           | MySQL             |
| Payment      | Stripe API           |
| PDF Export   | barryvdh/laravel-dompdf         |

## 🔄 System Flow

1. User signs up or logs in
2. Fills either work permit or student permit application form
3. Uploads required documents
4. Proceeds to facial verification (webcam + passport photo)
5. System checks match & liveness
6. Proceeds to payment
7. Receives receipt
8. Application reviewed by officer


## 🖼️ Screenshots

Landing Page
![Screenshot 2025-04-29 095020](https://github.com/user-attachments/assets/eb1d59c7-c269-4935-8f5b-136951d46dde)

Forms

![Screenshot 2025-04-29 100528](https://github.com/user-attachments/assets/35257dcd-ca4e-4478-8fdd-ff815c2fcf94)

Face Authentication Screen

![image](https://github.com/user-attachments/assets/c46d790f-51ac-4a91-9de9-70b1a69d6a78)

Stripe Payment Screen

![Screenshot 2025-04-29 102448](https://github.com/user-attachments/assets/192887c6-f23a-4677-9e9e-a497b5c0cba9)

User Dashboard
![Screenshot 2025-04-29 103102](https://github.com/user-attachments/assets/b9a308ce-4453-4f3b-b3a8-5df9908661c7)

Analytics Page
![Screenshot 2025-04-29 141726](https://github.com/user-attachments/assets/f9970c53-7221-4b5b-a0a4-e58caf8a34ef)



## 🧪 Installation & Setup

### Laravel Setup

clone https://github.com/yourusername/work-permit-system.git
cd work-permit-system
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

### Face Authentication Setup

cd face-auth
pip install -r requirements.txt
python app.py

