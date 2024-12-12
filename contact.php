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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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
            flex: 1;
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

        .contact-form {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form h2 {
            font-size: 2em;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-form label {
            font-size: 1.1em;
            margin-bottom: 10px;
            display: block;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        .contact-form button {
            background: #4CAF50;
            color: white;
            padding: 12px 20px;
            font-size: 1.1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .contact-form button:hover {
            background: #45a049;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background: #4CAF50;
            color: white;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Welcome to My Landing Page</h1>
        <p>Simple, Modern, and Responsive Design</p>
    </header>

    <!-- Hero Section -->
    <div class="container">
        <div class="hero">
            <h2>Your Gateway to the Web</h2>
            <p>This is a simple landing page design created in PHP with a clean and modern layout. It's fully responsive and ready to use!</p>
            <a href="/">Home</a>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div id="contact-form" class="container">
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form method="POST" action="contact.php">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> My Landing Page. All rights reserved.</p>
    </footer>
</body>
</html>
