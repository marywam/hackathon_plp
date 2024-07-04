<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelBuddy</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <h1>TravelBuddy</h1>
        <p>Find your perfect travel companion</p>
    </header>
    <section id="form-section">
        <h2>Register</h2>
        <form action="process.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="interests">Travel Interests:</label>
            <input type="text" id="interests" name="interests" required>
            
            <label for="trip_details">Trip Details:</label>
            <textarea id="trip_details" name="trip_details" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </section>
    <section id="matches-section">
        <h2>Your Matches</h2>
        <?php include 'matches.php'; ?>
    </section>
</body>
</html>
