<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planner</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #333;
            color: #fff;
            padding: 15px 0;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo {
            font-size: 24px;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-right: 20px;
        }

        .nav-links li a {
            text-decoration: none;
            color: #fff;
        }

        .menu-toggle {
            display: none;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 10px;
            }
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                background-color: #333;
                width: 100%;
                padding: 10px;
                box-sizing: border-box;
            }
            .nav-links.active {
                display: flex;
            }
            .nav-links li {
                margin: 5px 0;
            }
            .menu-toggle {
                display: block;
            }
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-content p {
            margin: 0;
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="container">
        <div class="logo">Event Planner</div>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="">Create Your Events</a></li>
            <li><a href="">Venue</a></li>
            <li><a href="">Vendors</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <div class="menu-toggle">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</nav>
<!-- Main Contents -->
<section class="content">
    <div class="container-fluid">
        @yield('contents')
    </div>
</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
    <div class="footer-content">
        <p>&copy; <?php echo date("Y"); ?> Event Planner. All rights reserved.</p>
        <p>Contact us at: contact@eventplanner.com</p>
    </div>
</footer>

<script>
    document.querySelector('.menu-toggle').addEventListener('click', function() {
        document.querySelector('.nav-links').classList.toggle('active');
    });
</script>
</body>
</html>

