<html>
    <style> body {
        background-color: brown;
        text-align: center;
    }
    </style>
    <body>
        <form name ="takeNumber" method="post" action ="test3.php">
<?php
$randomNumber = rand(1, 100);
$attempts = 0;
$maxAttempts = 5;

echo "Welcome to the Guess the Number game!\n";
echo "I'm thinking of a number between 1 and 100. Can you guess it?\n";

while ($attempts < $maxAttempts) {
    
    $guess = (int) readline("Enter your guess: ");
    if ($guess === $randomNumber) {
        echo "Congratulations! You guessed the correct number: $randomNumber\n";
        break;
    } else if ($guess < $randomNumber) {
        echo "Too low! Try again.\n";
    } else if ($guess > $randomNumber) {
        echo "Too high! Try again.\n";
    }
    else{
        $attempts++;
    }
    
}

if ($attempts === $maxAttempts) {
    echo "Sorry, you've run out of attempts. The number was: $randomNumber\n";
}
?></form>
    </body>
</html>