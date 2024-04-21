<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .quote-container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="quote-container">
        <?php
            // Array of quotes
            $quotes = [
                "The only way to do great work is to love what you do. - Steve Jobs",
                "Life is what happens when you're busy making other plans. - John Lennon",
                "In the end, it's not the years in your life that count. It's the life in your years. - Abraham Lincoln",
                "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
                "The greatest glory in living lies not in never falling, but in rising every time we fall. - Nelson Mandela"
            ];

            // Get a random quote
            $randomIndex = array_rand($quotes);
            $randomQuote = $quotes[$randomIndex];

            // Output the random quote
            echo "<p>" . $randomQuote . "</p>";
        ?>
    </div>
</body>
</html>