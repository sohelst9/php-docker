<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Using Docker</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f3f4f6;
            color: #333;
        }

        header {
            background: #4CAF50;
            color: white;
            padding: 20px 10px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        header p {
            font-size: 1.2em;
            margin: 5px 0 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 15px;
        }

        .hero {
            text-align: center;
            padding: 50px 15px;
            background: #e8f5e9;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .hero h2 {
            font-size: 2.2em;
            color: #2e7d32;
        }

        .hero p {
            font-size: 1.2em;
            margin: 20px 0;
            color: #555;
        }

        .hero a {
            text-decoration: none;
            background: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 1em;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .hero a:hover {
            background: #45a049;
        }

        .about-us {
            background: #ffffff;
            padding: 40px;
            margin-top: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .about-us h2 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
        }

        .about-us p {
            font-size: 1.2em;
            color: #555;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background: #4CAF50;
            color: white;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Welcome to My Website</h1>
        <p>Simple, Modern, and Responsive Design</p>
    </header>

    <!-- Hero Section -->
    <div class="container">
        <div class="hero">
            <h2>Your Gateway to the Web</h2>
            <p>This is a simple landing page design created in PHP with a clean and modern layout. It's fully responsive and ready to use!</p>
            <a href="contact.php">Contact Us</a>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="container">
        <div class="about-us">
            <h2>About Us</h2>
            <p>We are a team of passionate individuals committed to providing high-quality web solutions. Our mission is to make the web accessible and enjoyable for everyone. Whether you're a small business or a large corporation, we offer the tools and support to help you succeed online.</p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> My Landing Page. All rights reserved.</p>
    </footer>
</body>
</html>
