<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت پیام ها - پنل ادمین</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --neon-green: #00ff9d;
            --electric-blue: #00aaff;
            --dark-blue: #0a0a12;
            --text-light: #f1f1f1;
            --text-muted: #a0a0b0;
            --background: #151522;
            --sidebar-width: 250px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Vazirmatn', sans-serif;
        }

        body {
            background-color: var(--background);
            color: var(--text-light);
            line-height: 1.6;
            padding: 0;
            margin: 0;
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            background: linear-gradient(145deg, rgba(30, 30, 46, 0.95) 0%, rgba(21, 21, 34, 0.95) 100%);
            backdrop-filter: blur(10px);
            height: 100vh;
            position: fixed;
            right: 0;
            top: 0;
            padding: 1.5rem 1rem;
            box-shadow: 5px 0 15px rgba(0, 0, 0, 0.2);
            border-left: 1px solid rgba(0, 170, 255, 0.15);
            overflow-y: auto;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 1.5rem;
        }

        .sidebar-logo {
            width: 40px;
            height: 40px;
            background: linear-gradient(145deg, var(--dark-blue) 0%, var(--electric-blue) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            margin-left: 10px;
        }

        .sidebar-title {
            color: var(--neon-green);
            font-size: 1.2rem;
        }

        .sidebar-menu {
            list-style: none;
        }

        .menu-item {
            margin-bottom: 0.5rem;
        }

        .menu-link {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            color: var(--text-light);
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .menu-link:hover,
        .menu-link.active {
            background: rgba(0, 170, 255, 0.15);
            color: var(--electric-blue);
        }

        .menu-link i {
            margin-left: 10px;
            font-size: 1.1rem;
            width: 20px;
            text-align: center;
        }

        .badge {
            background: var(--neon-green);
            color: var(--dark-blue);
            border-radius: 20px;
            padding: 3px 8px;
            font-size: 0.75rem;
            font-weight: bold;
            margin-left: auto;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            margin-right: var(--sidebar-width);
            padding: 2rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .page-title {
            color: var(--neon-green);
            font-size: 1.8rem;
        }

        .user-menu {
            display: flex;
            align-items: center;
        }

        .user-info {
            margin-left: 10px;
            text-align: right;
        }

        .user-name {
            font-weight: 500;
        }

        .user-role {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: linear-gradient(145deg, var(--electric-blue) 0%, var(--neon-green) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        /* Stats Cards */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: linear-gradient(145deg, rgba(30, 30, 46, 0.8) 0%, rgba(21, 21, 34, 0.8) 100%);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(0, 170, 255, 0.15);
            display: flex;
            align-items: center;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(145deg, var(--dark-blue) 0%, var(--electric-blue) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-left: 15px;
        }

        .stat-content {
            flex: 1;
        }

        .stat-number {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--neon-green);
            line-height: 1;
            margin-bottom: 5px;
        }

        .stat-label {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        /* Messages Table */
        .messages-card {
            background: linear-gradient(145deg, rgba(30, 30, 46, 0.8) 0%, rgba(21, 21, 34, 0.8) 100%);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(0, 170, 255, 0.15);
            margin-bottom: 2rem;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .card-title {
            color: var(--neon-green);
            font-size: 1.3rem;
        }

        .filters {
            display: flex;
            gap: 10px;
        }

        .filter-btn {
            background: rgba(10, 10, 18, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-light);
            padding: 8px 15px;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: var(--electric-blue);
            color: white;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: right;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        th {
            color: var(--neon-green);
            font-weight: 500;
            cursor: pointer;
        }

        th:hover {
            background: rgba(0, 170, 255, 0.1);
        }

        th i {
            margin-right: 5px;
        }

        tbody tr {
            transition: all 0.3s ease;
        }

        tbody tr:hover {
            background: rgba(0, 170, 255, 0.05);
        }

        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .status-new {
            background: rgba(0, 255, 157, 0.1);
            color: var(--neon-green);
        }

        .status-read {
            background: rgba(0, 170, 255, 0.1);
            color: var(--electric-blue);
        }

        .status-replied {
            background: rgba(160, 100, 255, 0.1);
            color: #a064ff;
        }

        .action-btn {
            background: transparent;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            font-size: 1.1rem;
            margin-left: 10px;
            transition: all 0.3s ease;
        }

        .action-btn:hover {
            color: var(--electric-blue);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            overflow-y: auto;
            padding: 20px;
        }

        .modal-content {
            background: linear-gradient(145deg, rgba(30, 30, 46, 0.95) 0%, rgba(21, 21, 34, 0.95) 100%);
            border-radius: 12px;
            padding: 2rem;
            margin: 2rem auto;
            max-width: 800px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(0, 170, 255, 0.15);
            backdrop-filter: blur(10px);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .modal-title {
            color: var(--neon-green);
            font-size: 1.5rem;
        }

        .close-modal {
            background: transparent;
            border: none;
            color: var(--text-muted);
            font-size: 1.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .close-modal:hover {
            color: #ff4757;
        }

        .message-details {
            margin-bottom: 2rem;
        }

        .detail-row {
            display: flex;
            margin-bottom: 1rem;
        }

        .detail-label {
            width: 100px;
            color: var(--text-muted);
            font-weight: 500;
        }

        .detail-value {
            flex: 1;
        }

        .message-content {
            background: rgba(10, 10, 18, 0.6);
            border-radius: 8px;
            padding: 1.5rem;
            margin: 1.5rem 0;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .response-form textarea {
            width: 100%;
            min-height: 120px;
            padding: 12px 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            background: rgba(10, 10, 18, 0.6);
            color: var(--text-light);
            margin-bottom: 1rem;
            resize: vertical;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(145deg, var(--electric-blue) 0%, var(--neon-green) 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 170, 255, 0.4);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: var(--text-light);
            margin-left: 10px;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 1.5rem;
        }

        .pagination-item {
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 5px;
            border-radius: 6px;
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-light);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .pagination-item:hover,
        .pagination-item.active {
            background: var(--electric-blue);
            color: white;
        }

        /* Responsive Styles */
        @media (max-width: 968px) {
            .sidebar {
                width: 70px;
                padding: 1rem 0.5rem;
            }

            .sidebar-title,
            .menu-text,
            .badge {
                display: none;
            }

            .menu-link {
                justify-content: center;
                padding: 15px 10px;
            }

            .menu-link i {
                margin-left: 0;
            }

            .main-content {
                margin-right: 70px;
                padding: 1.5rem;
            }

            .stats-container {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .user-menu {
                margin-top: 1rem;
            }

            .filters {
                flex-wrap: wrap;
            }

            th,
            td {
                padding: 8px 10px;
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <i class="fas fa-cloud"></i>
            </div>
            <h2 class="sidebar-title">پنل ادمین</h2>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="menu-text">داشبورد</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link active">
                    <i class="fas fa-envelope"></i>
                    <span class="menu-text">پیام ها</span>
                    <span class="badge">۵ جدید</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <i class="fas fa-users"></i>
                    <span class="menu-text">کاربران</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <i class="fas fa-server"></i>
                    <span class="menu-text">سرویس ها</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <i class="fas fa-cog"></i>
                    <span class="menu-text">تنظیمات</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="menu-text">خروج</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <div class="header">
            <h1 class="page-title">مدیریت پیام های تماس</h1>
            <div class="user-menu">
                <div class="user-info">
                    <div class="user-name">مدیر سیستم</div>
                    <div class="user-role">ادمین</div>
                </div>
                <div class="user-avatar">
                    <i class="fas fa-user"></i>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number">۴۸</div>
                    <div class="stat-label">کل پیام ها</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-envelope-open"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number">۳۲</div>
                    <div class="stat-label">پیام های خوانده شده</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-reply"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number">۲۶</div>
                    <div class="stat-label">پاسخ داده شده</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number">۵</div>
                    <div class="stat-label">پیام های جدید</div>
                </div>
            </div>
        </div>

        <!-- Messages Table -->
        <div class="messages-card">
            <div class="card-header">
                <h2 class="card-title">لیست پیام ها</h2>
                <div class="filters">
                    <button class="filter-btn active">همه</button>
                    <button class="filter-btn">جدید</button>
                    <button class="filter-btn">خوانده شده</button>
                    <button class="filter-btn">پاسخ داده شده</button>
                </div>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th><i class="fas fa-user"></i> نام فرستنده</th>
                            <th><i class="fas fa-envelope"></i> ایمیل</th>
                            <th><i class="fas fa-tag"></i> موضوع</th>
                            <th><i class="fas fa-clock"></i> تاریخ</th>
                            <th><i class="fas fa-star"></i> وضعیت</th>
                            <th><i class="fas fa-cog"></i> عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>محمد رضایی</td>
                            <td>mohammad@example.com</td>
                            <td>مشکل در اتصال به VPS</td>
                            <td>۱۴۰۲/۰۵/۲۳</td>
                            <td><span class="status status-new">جدید</span></td>
                            <td>
                                <button class="action-btn view-message" data-id="1"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-reply"></i></button>
                                <button class="action-btn"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>فاطمه محمدی</td>
                            <td>fatemeh@example.com</td>
                            <td>سوال درباره میزبانی ابری</td>
                            <td>۱۴۰۲/۰۵/۲۲</td>
                            <td><span class="status status-replied">پاسخ داده شده</span></td>
                            <td>
                                <button class="action-btn view-message" data-id="2"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-reply"></i></button>
                                <button class="action-btn"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>علی حسینی</td>
                            <td>ali@example.com</td>
                            <td>درخواست پشتیبانی فنی</td>
                            <td>۱۴۰۲/۰۵/۲۱</td>
                            <td><span class="status status-read">خوانده شده</span></td>
                            <td>
                                <button class="action-btn view-message" data-id="3"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-reply"></i></button>
                                <button class="action-btn"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>زهرا کریمی</td>
                            <td>zahra@example.com</td>
                            <td>انتقادات و پیشنهادات</td>
                            <td>۱۴۰۲/۰۵/۲۰</td>
                            <td><span class="status status-replied">پاسخ داده شده</span></td>
                            <td>
                                <button class="action-btn view-message" data-id="4"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-reply"></i></button>
                                <button class="action-btn"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>رضا احمدی</td>
                            <td>reza@example.com</td>
                            <td>مشکل در پرداخت</td>
                            <td>۱۴۰۲/۰۵/۱۹</td>
                            <td><span class="status status-new">جدید</span></td>
                            <td>
                                <button class="action-btn view-message" data-id="5"><i class="fas fa-eye"></i></button>
                                <button class="action-btn"><i class="fas fa-reply"></i></button>
                                <button class="action-btn"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <a href="#" class="pagination-item"><i class="fas fa-chevron-right"></i></a>
                <a href="#" class="pagination-item active">۱</a>
                <a href="#" class="pagination-item">۲</a>
                <a href="#" class="pagination-item">۳</a>
                <a href="#" class="pagination-item"><i class="fas fa-chevron-left"></i></a>
            </div>
        </div>
    </main>

    <!-- Message Detail Modal -->
    <div class="modal" id="messageModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">مشاهده پیام</h2>
                <button class="close-modal">&times;</button>
            </div>

            <div class="message-details">
                <div class="detail-row">
                    <div class="detail-label">فرستنده:</div>
                    <div class="detail-value" id="modal-name">محمد رضایی</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">ایمیل:</div>
                    <div class="detail-value" id="modal-email">mohammad@example.com</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">تلفن:</div>
                    <div class="detail-value" id="modal-phone">۰۹۱۲۱۲۳۴۵۶۷</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">تاریخ:</div>
                    <div class="detail-value" id="modal-date">۱۴۰۲/۰۵/۲۳ - ۱۴:۳۰</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">موضوع:</div>
                    <div class="detail-value" id="modal-subject">مشکل در اتصال به VPS</div>
                </div>
            </div>

            <div class="message-content">
                <p id="modal-message">با سلام، من چند روزی هست که سرویس VPS خریداری کردم اما نمی تونم به درستی بهش متصل
                    بشم. هنگام اتصال خطای timeout می گیرم. لطفا راهنمایی کنید چگونه مشکل را حل کنم.</p>
            </div>

            <div class="response-form">
                <h3>پاسخ به پیام</h3>
                <textarea placeholder="متن پاسخ خود را اینجا بنویسید..."></textarea>
                <div>
                    <button class="btn btn-primary">ارسال پاسخ</button>
                    <button class="btn btn-secondary">علامت به عنوان خوانده شده</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Modal functionality
        const modal = document.getElementById('messageModal');
        const closeModalBtn = document.querySelector('.close-modal');
        const viewMessageBtns = document.querySelectorAll('.view-message');

        // Open modal when view button is clicked
        viewMessageBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // In a real application, you would fetch message details from server
                // based on the data-id attribute
                modal.style.display = 'block';
            });
        });

        // Close modal when close button is clicked
        closeModalBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        // Close modal when clicking outside the modal content
        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });

        // Filter buttons functionality
        const filterBtns = document.querySelectorAll('.filter-btn');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');

                // In a real application, you would filter the table based on the selected filter
            });
        });
    </script>
</body>

</html>