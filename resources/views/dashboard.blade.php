<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل مدیریت - سرویس ابری</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css">
    <style>
        :root {
            --primary-black: #0a0a12;
            --secondary-black: #151522;
            --dark-blue: #0d3e9c;
            --medium-blue: #1a56db;
            --light-blue: #3b82f6;
            --electric-blue: #00aaff;
            --neon-green: #00ff9d;
            --accent-green: #00cc7a;
            --text-light: #e2e8f0;
            --text-muted: #a0aec0;
            --card-bg: rgba(30, 30, 46, 0.6);
            --hover-bg: rgba(255, 255, 255, 0.05);
            --border-color: rgba(0, 170, 255, 0.2);
            --shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }

        .light-theme {
            --primary-black: #f0f2f5;
            --secondary-black: #ffffff;
            --dark-blue: #1a56db;
            --medium-blue: #3b82f6;
            --light-blue: #60a5fa;
            --electric-blue: #00aaff;
            --neon-green: #00cc7a;
            --accent-green: #00aa66;
            --text-light: #1f2937;
            --text-muted: #6b7280;
            --card-bg: rgba(255, 255, 255, 0.8);
            --hover-bg: rgba(0, 0, 0, 0.05);
            --border-color: rgba(0, 170, 255, 0.3);
            --shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Vazirmatn', 'Segoe UI', Tahoma, sans-serif;
            transition: background-color 0.3s, color 0.3s;
        }

        body {
            background: linear-gradient(135deg, var(--primary-black) 0%, var(--secondary-black) 100%);
            color: var(--text-light);
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* Dashboard Layout */
        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 260px;
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            padding: 1.5rem 1rem;
            border-left: 1px solid var(--border-color);
            box-shadow: var(--shadow);
            display: flex;
            flex-direction: column;
            z-index: 100;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border-color);
        }

        .sidebar-header img {
            width: 40px;
            height: 40px;
            margin-left: 10px;
        }

        .sidebar-header h2 {
            font-size: 1.2rem;
            color: var(--text-light);
        }

        .user-section {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding: 1rem;
            background: var(--hover-bg);
            border-radius: 8px;
        }

        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(145deg, var(--electric-blue) 0%, var(--neon-green) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            margin-left: 10px;
        }

        .user-info h4 {
            color: var(--text-light);
            margin-bottom: 5px;
        }

        .user-info p {
            color: var(--text-muted);
            font-size: 0.85rem;
        }

        .nav-menu {
            list-style: none;
            flex-grow: 1;
        }

        .nav-menu li {
            margin-bottom: 5px;
        }

        .nav-menu a {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            color: var(--text-light);
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            background: var(--hover-bg);
            color: var(--neon-green);
        }

        .nav-menu i {
            margin-left: 10px;
            width: 20px;
            text-align: center;
        }

        .theme-switcher {
            margin-top: 2rem;
            padding: 1rem;
            background: var(--hover-bg);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .theme-switcher span {
            color: var(--text-light);
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--dark-blue);
            transition: .4s;
            border-radius: 24px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: var(--neon-green);
        }

        input:checked+.slider:before {
            transform: translateX(26px);
        }

        /* Main Content */
        .main-content {
            flex-grow: 1;
            padding: 2rem;
            overflow-y: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border-color);
        }

        .header h1 {
            font-size: 1.8rem;
            color: var(--text-light);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            padding: 10px 15px 10px 40px;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            background: var(--card-bg);
            color: var(--text-light);
            width: 250px;
        }

        .search-box i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
        }

        .notification-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--card-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
            text-decoration: none;
            position: relative;
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            left: -5px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: var(--neon-green);
            color: var(--primary-black);
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        /* Dashboard Widgets */
        .dashboard-widgets {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 2rem;
        }

        .widget {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
        }

        .widget-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .widget-header h3 {
            font-size: 1.1rem;
            color: var(--text-light);
        }

        .widget-header i {
            color: var(--neon-green);
            font-size: 1.2rem;
        }

        .widget-content h2 {
            font-size: 2.2rem;
            color: var(--text-light);
            margin-bottom: 0.5rem;
        }

        .widget-content p {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .progress-bar {
            height: 8px;
            background: var(--hover-bg);
            border-radius: 4px;
            margin-top: 1rem;
            overflow: hidden;
        }

        .progress {
            height: 100%;
            background: linear-gradient(90deg, var(--electric-blue) 0%, var(--neon-green) 100%);
            border-radius: 4px;
        }

        /* Server Status */
        .server-status {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
            margin-bottom: 2rem;
        }

        .server-status-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .server-status-header h2 {
            font-size: 1.3rem;
            color: var(--text-light);
        }

        .server-card {
            display: flex;
            align-items: center;
            padding: 1rem;
            background: var(--hover-bg);
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .server-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(145deg, var(--electric-blue) 0%, var(--neon-green) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            margin-left: 15px;
        }

        .server-info {
            flex-grow: 1;
        }

        .server-info h4 {
            color: var(--text-light);
            margin-bottom: 5px;
        }

        .server-info p {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .server-status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .status-online {
            background: rgba(0, 255, 157, 0.2);
            color: var(--neon-green);
        }

        .status-offline {
            background: rgba(255, 77, 79, 0.2);
            color: #ff4d4f;
        }

        /* Tickets Section */
        .tickets-section {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
            margin-bottom: 2rem;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .section-header h2 {
            font-size: 1.3rem;
            color: var(--text-light);
        }

        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            border: none;
        }

        .btn-primary {
            background: linear-gradient(90deg, var(--neon-green) 0%, var(--electric-blue) 100%);
            color: var(--primary-black);
        }

        .btn-primary:hover {
            box-shadow: 0 0 15px rgba(0, 255, 157, 0.5);
        }

        .tickets-list {
            list-style: none;
        }

        .ticket-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            border-bottom: 1px solid var(--border-color);
        }

        .ticket-item:last-child {
            border-bottom: none;
        }

        .ticket-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--hover-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 15px;
            color: var(--electric-blue);
        }

        .ticket-info {
            flex-grow: 1;
        }

        .ticket-info h4 {
            color: var(--text-light);
            margin-bottom: 5px;
        }

        .ticket-info p {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .ticket-status {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .status-open {
            background: rgba(0, 170, 255, 0.2);
            color: var(--electric-blue);
        }

        .status-pending {
            background: rgba(255, 193, 7, 0.2);
            color: #ffc107;
        }

        .status-resolved {
            background: rgba(0, 255, 157, 0.2);
            color: var(--neon-green);
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .dashboard-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                border-left: none;
                border-bottom: 1px solid var(--border-color);
            }

            .search-box input {
                width: 200px;
            }
        }

        @media (max-width: 768px) {
            .dashboard-widgets {
                grid-template-columns: 1fr;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .header-actions {
                width: 100%;
                justify-content: space-between;
            }

            .search-box input {
                width: 100%;
            }
        }

        /* Tabs for Admin/Client View */
        .view-tabs {
            display: flex;
            background: var(--card-bg);
            border-radius: 8px;
            padding: 5px;
            margin-bottom: 2rem;
            border: 1px solid var(--border-color);
        }

        .tab-btn {
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            flex-grow: 1;
            text-align: center;
            color: var(--text-muted);
            font-weight: 500;
        }

        .tab-btn.active {
            background: linear-gradient(90deg, var(--neon-green) 0%, var(--electric-blue) 100%);
            color: var(--primary-black);
            box-shadow: 0 0 10px rgba(0, 255, 157, 0.3);
        }

        /* Hidden content for different views */
        .admin-content,
        .client-content {
            display: none;
        }

        .admin-content.active,
        .client-content.active {
            display: block;
        }
    </style>
</head>

<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1MTIgNTEyIj48cGF0aCBmaWxsPSIjMDBmZjk5IiBkPSJNNjQgMzJDNjQgMTQuMzMgNzguMzMgMCA5NiAwSDQxNkM0MzMuNyAwIDQ0OCAxNC4zMyA0NDggMzJWNDgwQzQ0OCA0OTcuNyA0MzMuNyA1MTIgNDE2IDUxMkg5NkM3OC4zMyA1MTIgNjQgNDk3LjcgNjQgNDgwVjMyem0yODAgMjU2YzAgNDQuMiAzNS44IDgwIDgwIDgwczgwLTM1LjggODAtODBzLTM1LjgtODAtODAtODBzLTgwIDM1LjgtODAgODB6TTQ4IDY0QzQ4IDU1LjE2IDU1LjE2IDQ4IDY0IDQ4SDQ0OEM0NTYuOCA0OCA0NjQgNTUuMTYgNDY0IDY0VjE5MkM0MjYuOCAyMTQuNyAzODQgMjI0IDM1MiAyMjRjLTczLjMgMC0xMjctMjcuMi0xNjQtNjRINDhWNjR6TTI1NiAyODhDMjU2IDI2OS40IDI2OS40IDI1NiAyODggMjU2SDQ0OEM0NjYuNiAyNTYgNDgwIDI2OS40IDQ4MCAyODhWNDE2QzQ4MCA0MzQuNiA0NjYuNiA0NDggNDQ4IDQ0OEgyODhDMjY5LjQgNDQ4IDI1NiA0MzQuNiAyNTYgNDE2VjI4OHoiLz48L3N2Zz4="
                    alt="Logo">
                <h2>سرویس ابری</h2>
            </div>

            <div class="user-section">
                <div class="user-avatar">م.ر</div>
                <div class="user-info">
                    <h4>محمد رضایی</h4>
                    <p>مدیر سیستم</p>
                </div>
            </div>

            <ul class="nav-menu">
                <li><a href="#" class="active"><i class="fas fa-home"></i> پیشخوان</a></li>
                <li><a href="#"><i class="fas fa-server"></i> سرورها</a></li>
                <li><a href="#"><i class="fas fa-users"></i> کاربران</a></li>
                <li><a href="#"><i class="fas fa-ticket-alt"></i> تیکت ها</a></li>
                <li><a href="#"><i class="fas fa-credit-card"></i> پرداخت ها</a></li>
                <li><a href="#"><i class="fas fa-chart-bar"></i> گزارشات</a></li>
                <li><a href="#"><i class="fas fa-cog"></i> تنظیمات</a></li>
            </ul>

            <div class="theme-switcher">
                <span>حالت شب</span>
                <label class="switch">
                    <input type="checkbox" id="theme-switch" checked>
                    <span class="slider"></span>
                </label>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="header">
                <h1>پنل مدیریت سرویس ابری</h1>
                <div class="header-actions">
                    <div class="search-box">
                        <input type="text" placeholder="جستجو...">
                        <i class="fas fa-search"></i>
                    </div>
                    <a href="#" class="notification-btn">
                        <i class="fas fa-bell"></i>
                        <span class="notification-badge">3</span>
                    </a>
                    <a href="{{ route('logout') }}" class="btn btn-primary"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">خروج از
                        سیستم</a>
                </div>
            </div>

            <!-- View Tabs -->
            <div class="view-tabs">
                <div class="tab-btn active" data-tab="admin">پنل مدیریت</div>
                <div class="tab-btn" data-tab="client">پنل کاربری</div>
            </div>

            <!-- Admin Dashboard -->
            <div class="admin-content active">
                <!-- Dashboard Widgets -->
                <div class="dashboard-widgets">
                    <div class="widget">
                        <div class="widget-header">
                            <h3>کاربران فعال</h3>
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="widget-content">
                            <h2>۱,۲۴۸</h2>
                            <p>۲۳ کاربر جدید امروز</p>
                            <div class="progress-bar">
                                <div class="progress" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-header">
                            <h3>سرورهای فعال</h3>
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="widget-content">
                            <h2>۳۷۶</h2>
                            <p>۹۳% سرورها آنلاین</p>
                            <div class="progress-bar">
                                <div class="progress" style="width: 93%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-header">
                            <h3>درآمد ماهانه</h3>
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="widget-content">
                            <h2>۱۲,۵۸۰,۰۰۰ تومان</h2>
                            <p>۱۵% افزایش نسبت به ماه گذشته</p>
                            <div class="progress-bar">
                                <div class="progress" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Server Status -->
                <div class="server-status">
                    <div class="server-status-header">
                        <h2>وضعیت سرورها</h2>
                        <a href="#" class="btn btn-primary">مدیریت سرورها</a>
                    </div>

                    <div class="server-card">
                        <div class="server-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="server-info">
                            <h4>سرور مجازی #VPS-245</h4>
                            <p>۴ هسته CPU - ۸GB RAM - ۱۶۰GB SSD</p>
                        </div>
                        <span class="server-status-badge status-online">آنلاین</span>
                    </div>

                    <div class="server-card">
                        <div class="server-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="server-info">
                            <h4>سرور مجازی #VPS-112</h4>
                            <p>۲ هسته CPU - ۴GB RAM - ۸۰GB SSD</p>
                        </div>
                        <span class="server-status-badge status-online">آنلاین</span>
                    </div>

                    <div class="server-card">
                        <div class="server-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="server-info">
                            <h4>سرور مجازی #VPS-087</h4>
                            <p>۸ هسته CPU - ۱۶GB RAM - ۳۲۰GB SSD</p>
                        </div>
                        <span class="server-status-badge status-offline">آفلاین</span>
                    </div>
                </div>

                <!-- Tickets Section -->
                <div class="tickets-section">
                    <div class="section-header">
                        <h2>آخرین تیکت ها</h2>
                        <a href="#" class="btn btn-primary">تیکت جدید</a>
                    </div>

                    <ul class="tickets-list">
                        <li class="ticket-item">
                            <div class="ticket-icon">
                                <i class="fas fa-question-circle"></i>
                            </div>
                            <div class="ticket-info">
                                <h4>مشکل در اتصال به دیتابیس</h4>
                                <p>ارسال شده توسط: علی محمدی - ۲ ساعت پیش</p>
                            </div>
                            <span class="ticket-status status-open">باز</span>
                        </li>

                        <li class="ticket-item">
                            <div class="ticket-icon">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="ticket-info">
                                <h4>درخواست افزایش منابع سرور</h4>
                                <p>ارسال شده توسط: فاطمه احمدی - ۵ ساعت پیش</p>
                            </div>
                            <span class="ticket-status status-pending">در حال بررسی</span>
                        </li>

                        <li class="ticket-item">
                            <div class="ticket-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="ticket-info">
                                <h4>مشکل در نصب SSL</h4>
                                <p>ارسال شده توسط: رضا حسینی - ۱ روز پیش</p>
                            </div>
                            <span class="ticket-status status-resolved">حل شده</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Client Dashboard -->
            <div class="client-content">
                <!-- Client Dashboard Widgets -->
                <div class="dashboard-widgets">
                    <div class="widget">
                        <div class="widget-header">
                            <h3>سرورهای من</h3>
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="widget-content">
                            <h2>۳</h2>
                            <p>همه سرورها آنلاین هستند</p>
                            <div class="progress-bar">
                                <div class="progress" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-header">
                            <h3>صورتحساب بعدی</h3>
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="widget-content">
                            <h2>۲۴۵,۰۰۰ تومان</h2>
                            <p>سررسید: ۱۴۰۲/۰۵/۱۵</p>
                            <div class="progress-bar">
                                <div class="progress" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-header">
                            <h3>پهنای باند استفاده شده</h3>
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <div class="widget-content">
                            <h2>۴۵۰GB/1TB</h2>
                            <p>۴۵% استفاده شده</p>
                            <div class="progress-bar">
                                <div class="progress" style="width: 45%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Client Server Status -->
                <div class="server-status">
                    <div class="server-status-header">
                        <h2>سرورهای من</h2>
                        <a href="#" class="btn btn-primary">سرویس جدید</a>
                    </div>

                    <div class="server-card">
                        <div class="server-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="server-info">
                            <h4>سرور مجازی #VPS-245</h4>
                            <p>۴ هسته CPU - ۸GB RAM - ۱۶۰GB SSD</p>
                        </div>
                        <span class="server-status-badge status-online">آنلاین</span>
                    </div>

                    <div class="server-card">
                        <div class="server-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="server-info">
                            <h4>سرور مجازی #VPS-112</h4>
                            <p>۲ هسته CPU - ۴GB RAM - ۸۰GB SSD</p>
                        </div>
                        <span class="server-status-badge status-online">آنلاین</span>
                    </div>

                    <div class="server-card">
                        <div class="server-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="server-info">
                            <h4>سرور مجازی #VPS-087</h4>
                            <p>۸ هسته CPU - ۱۶GB RAM - ۳۲۰GB SSD</p>
                        </div>
                        <span class="server-status-badge status-online">آنلاین</span>
                    </div>
                </div>

                <!-- Client Tickets Section -->
                <div class="tickets-section">
                    <div class="section-header">
                        <h2>تیکت های من</h2>
                        <a href="#" class="btn btn-primary">تیکت جدید</a>
                    </div>

                    <ul class="tickets-list">
                        <li class="ticket-item">
                            <div class="ticket-icon">
                                <i class="fas fa-question-circle"></i>
                            </div>
                            <div class="ticket-info">
                                <h4>مشکل در اتصال به دیتابیس</h4>
                                <p>ارسال شده: ۲ ساعت پیش - پاسخ داده شده: ۱ ساعت پیش</p>
                            </div>
                            <span class="ticket-status status-resolved">حل شده</span>
                        </li>

                        <li class="ticket-item">
                            <div class="ticket-icon">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="ticket-info">
                                <h4>درخواست افزایش منابع سرور</h4>
                                <p>ارسال شده: ۵ ساعت پیش - پاسخ داده شده: ۲ ساعت پیش</p>
                            </div>
                            <span class="ticket-status status-pending">در حال بررسی</span>
                        </li>

                        <li class="ticket-item">
                            <div class="ticket-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="ticket-info">
                                <h4>مشکل در نصب SSL</h4>
                                <p>ارسال شده: ۱ روز پیش - پاسخ داده شده: ۱۲ ساعت پیش</p>
                            </div>
                            <span class="ticket-status status-resolved">حل شده</span>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Theme Switching
        const themeSwitch = document.getElementById('theme-switch');

        themeSwitch.addEventListener('change', function() {
            if (this.checked) {
                document.body.classList.remove('light-theme');
                localStorage.setItem('theme', 'dark');
            } else {
                document.body.classList.add('light-theme');
                localStorage.setItem('theme', 'light');
            }
        });

        // Check for saved theme preference
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'light') {
            document.body.classList.add('light-theme');
            themeSwitch.checked = false;
        } else {
            document.body.classList.remove('light-theme');
            themeSwitch.checked = true;
        }

        // Tab Switching
        const tabButtons = document.querySelectorAll('.tab-btn');
        const adminContent = document.querySelector('.admin-content');
        const clientContent = document.querySelector('.client-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                tabButtons.forEach(btn => btn.classList.remove('active'));

                // Add active class to clicked button
                this.classList.add('active');

                // Show corresponding content
                const tab = this.getAttribute('data-tab');
                if (tab === 'admin') {
                    adminContent.classList.add('active');
                    clientContent.classList.remove('active');
                } else if (tab === 'client') {
                    adminContent.classList.remove('active');
                    clientContent.classList.add('active');
                }
            });
        });

        // Simulate loading data
        document.addEventListener('DOMContentLoaded', function() {
            // Simulate loading delay for server status
            setTimeout(() => {
                const serverStatusElements = document.querySelectorAll('.server-status-badge');
                serverStatusElements.forEach(element => {
                    if (element.classList.contains('status-offline')) {
                        element.textContent = 'آفلاین';
                    } else {
                        element.textContent = 'آنلاین';
                    }
                });
            }, 1000);
        });
    </script>

    <!-- Hidden Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>

</html>