<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Layout</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('layout/user/style.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="user-body">

    <!-- Top Navbar -->
    <nav class="user-navbar">
        <div class="user-nav-container">
            <div class="user-nav-flex">
                <div class="user-left-section">
                    <!-- Logo -->
                    <div class="user-logo">
                        <!-- Image Logo Placeholder -->
                        <img src="{{ asset('images/LIMU logo.png') }}" alt="Logo" style="height: 40px;">
                    </div>
                    <!-- Navigation Links -->
                    <div class="user-nav-links">
                        <a href="{{ url('/') }}" class="user-nav-link">
                            Home
                        </a>
                        <a href="{{ url('/about') }}" class="user-nav-link">
                            About
                        </a>
                        <a href="{{ url('/contact') }}" class="user-nav-link">
                            Contact                                         
                        </a>
                    </div>
                </div>
                <!-- Right Side Icons -->
                <div class="user-right-icons">
                    <!-- Chat Icon -->
                    <button class="user-icon-btn">
                        <span class="sr-only">Messages</span>
                        <svg class="user-icon-svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </button>
                    <!-- Calendar Icon -->
                    <button class="user-icon-btn">
                        <span class="sr-only">Calendar</span>
                        <svg class="user-icon-svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </button>
                    <!-- Notification Icon -->
                    <button class="user-icon-btn">
                        <span class="sr-only">Notifications</span>
                        <svg class="user-icon-svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                    <!-- Profile Dropdown -->
                    <div class="user-profile-dropdown">
                        <div class="d-flex align-items-center gap-2">
                            <span class="fw-medium text-secondary">User Name</span>
                            <button class="user-profile-btn" id="user-menu" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="user-profile-img" src="https://ui-avatars.com/api/?name=User&background=random" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="user-footer">
        <div class="user-footer-container">
            <p class="text-center text-sm text-gray-500">&copy; {{ date('Y') }} MyApp. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
