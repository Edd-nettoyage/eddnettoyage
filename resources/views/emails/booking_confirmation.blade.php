<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .logo {
            margin-bottom: 30px;
        }
        .logo img {
            width: 150px;
        }
        .details {
            text-align: left;
            margin-top: 20px;
        }
        .details h2 {
            margin-bottom: 10px;
        }
        .details p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://res.cloudinary.com/dkwbhwkzn/image/upload/v1735581860/dl2vx8jpuyl3fxh9ht74.png" alt="Company Logo">
        </div>

        <h1>Booking Confirmation</h1>
        <p>Thank you for your booking, {{ $booking->name }}!</p>

        <div class="details">
            <h2>Booking Details</h2>
            <p><strong>Email:</strong> {{ $booking->email }}</p>
            <p><strong>Service Location:</strong> {{ $booking->service_location }}</p>
            <p><strong>Service Date:</strong> {{ $booking->service_date }}</p>
            <p><strong>Service Time:</strong> {{ $booking->service_time }}</p>
            <p><strong>Urgency Level:</strong> {{ $booking->urgency }}</p>
            <p><strong>Description:</strong> {{ $booking->service_description }}</p>
        </div>

        <p>If you have any questions, feel free to contact us.</p>
    </div>
</body>
</html>
