<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $system_performance = $_POST['system_performance'];
    $water_quality = $_POST['water_quality'];
    $customer_support = $_POST['customer_support'];
    $difficulty_using = $_POST['difficulty_using'];
    $suggestion = $_POST['suggestion'];

    $sql = "INSERT INTO feedback (name, email, role, system_performance, water_quality, customer_support, difficulty_using, suggestion, submitted_at) 
            VALUES ('$name', '$email', '$role', '$system_performance', '$water_quality', '$customer_support', '$difficulty_using', '$suggestion', NOW())";

    if ($conn->query($sql) === TRUE) {
        $message = "Feedback submitted successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Feedback - Water Purifier CRM</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.95);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
            color: #333;
        }

        h2 {
            text-align: center;
            font-weight: bold;
            color: #007BFF;
            margin-bottom: 20px;
        }

        .form-control {
            padding: 10px;
            font-size: 16px;
            border-radius: 8px;
        }

        .btn-submit {
            background-color: #007BFF;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 8px;
            transition: 0.3s;
            width: 100%;
        }

        .btn-submit:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .message {
            text-align: center;
            font-weight: bold;
            color: green;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Customer Feedback</h2>

        <?php if (isset($message)) { ?>
            <p class="message"><?php echo $message; ?></p>
        <?php } ?>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Your Role</label>
                <select name="role" class="form-control" required>
                    <option value="">Select Role</option>
                    <option value="Customer">Customer</option>
                    <option value="Dealer">Dealer</option>
                    <option value="Technician">Technician</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Water Purifier Performance</label>
                <select name="system_performance" class="form-control" required>
                    <option value="Excellent">Excellent</option>
                    <option value="Good">Good</option>
                    <option value="Average">Average</option>
                    <option value="Poor">Poor</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Water Quality</label>
                <select name="water_quality" class="form-control" required>
                    <option value="Very Clean">Very Clean</option>
                    <option value="Clean">Clean</option>
                    <option value="Satisfactory">Satisfactory</option>
                    <option value="Not Clean">Not Clean</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Customer Support Experience</label>
                <select name="customer_support" class="form-control" required>
                    <option value="Excellent">Excellent</option>
                    <option value="Good">Good</option>
                    <option value="Needs Improvement">Needs Improvement</option>
                    <option value="Poor">Poor</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Did you face any difficulty using the system?</label>
                <select name="difficulty_using" class="form-control" required>
                    <option value="No Issues">No Issues</option>
                    <option value="Some Issues">Some Issues</option>
                    <option value="Difficult to Use">Difficult to Use</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Suggestions for Improvement</label>
                <textarea name="suggestion" class="form-control" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-submit">Submit Feedback</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>