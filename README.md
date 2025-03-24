# 📰 Tech Blog - Powered by NewsAPI

Welcome to **Tech Blog**, a dark-themed blog platform that pulls the latest news from the tech world using the **NewsAPI**. This application gives users access to the most recent articles and updates in the field of technology, directly from various sources. The blog is designed with a sleek **dark mode** interface for an enhanced reading experience.

---

## 🎨 Project Overview

**Tech Blog** is built with **Laravel 12**, integrating the **NewsAPI** to display the latest tech news in real-time. The application has a **dark mode** interface that emphasizes the content while being easy on the eyes. Users can view the most recent articles, explore different categories, and keep up-to-date with the latest trends in the tech industry.

📌 **Main Features**:  
- 📰 **Latest Tech News** – Stay updated with the most recent articles from top tech sources.  
- 🌑 **Dark Mode** – A dark-themed interface designed for a sleek, modern user experience.  
- 🔍 **Search Articles** – Search for specific news articles by keywords.  
- 📂 **Categories** – Browse news by different categories related to technology.  
- 💬 **Real-Time Updates** – The news is updated in real-time via **NewsAPI** integration.

---

## 🛠️ Technologies Used

✔️ **Laravel 12** – Backend framework for handling data and requests.  
✔️ **NewsAPI** – API used to fetch the latest tech news and articles from various sources.  
✔️ **PHP** – Server-side scripting.  
✔️ **HTML5 & CSS3** – Structuring and styling pages.  
✔️ **Bootstrap 5** – Responsive UI components for smooth, modern design.  
✔️ **JavaScript** – Enhancing interactivity and dynamic content.  

---

## 📥 Installation & Setup

Follow these steps to set up and run the project locally:

### 1️⃣ Clone the Repository  
```bash
git clone https://github.com/MaDGiiRL/Tech-Blog.git
cd Tech-Blog
```  

### 2️⃣ Install Dependencies  
```bash
composer install
npm install
```  

### 3️⃣ Configure Environment  
Rename `.env.example` to `.env` and set up your database credentials:  
```env
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```  

Set your **NewsAPI** credentials in `.env`:
```env
NEWSAPI_KEY=your_newsapi_key
```  

### 4️⃣ Run Migrations & Seed Database  
```bash
php artisan migrate --seed
```  

### 5️⃣ Start the Development Server  
```bash
php artisan serve
```  

Now open **http://127.0.0.1:8000/** in your browser to explore the site.

---

## 🚀 Features in Detail

- **Latest Tech News**: Access the most up-to-date articles from leading tech sources.  
- **Search for Articles**: Use the search feature to find specific news articles.  
- **Categories**: Filter news based on different technology categories.  
- **Real-Time Updates**: Enjoy real-time news updates powered by **NewsAPI**.

---

## 💡 Contributions & Improvements

Have suggestions? Want to contribute? Feel free to **submit a pull request** or open an **issue**! 🚀

---

📌 **Author:** Sofia  
📅 **Last Updated:** March 2025  
