<?php
include 'config.php';

$sql = "SELECT * FROM feedback ORDER BY submitted_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Feedback - Water Purifier CRM</title>
    
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <!-- Custom CSS -->
    <style>
        /* Background Gradient */
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }

        /* Main Container */
        .container {
            max-width: 1000px;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.95);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
            color: #333;
        }

        /* Title Styling */
        h2 {
            text-align: center;
            font-weight: bold;
            color: #007BFF;
            margin-bottom: 20px;
        }

        /* Table Styling */
        .table {
            border-radius: 10px;
            overflow: hidden;
        }

        .table thead {
            background: #007BFF;
            color: white;
        }

        .table tbody tr:hover {
            background: #e0f7ff;
            transition: 0.3s;
        }

        .table th, .table td {
            padding: 12px;
            text-align: center;
            vertical-align: middle;
            font-size: 16px;
        }

        /* Back Button Styling */
        .btn-back {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #007BFF;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Customer Feedback - Water Purifier CRM</h2>
        
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Water Purifier Performance</th>
                    <th>Water Quality</th>
                    <th>Customer Support</th>
                    <th>Any Difficulty in Using the System?</th>
                    <th>Suggestion</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['role']); ?></td>
                        <td><?php echo htmlspecialchars($row['system_performance']); ?></td>
                        <td><?php echo htmlspecialchars($row['water_quality']); ?></td>
                        <td><?php echo htmlspecialchars($row['customer_support']); ?></td>
                        <td><?php echo htmlspecialchars($row['difficulty_using']); ?></td>
                        <td><?php echo htmlspecialchars($row['suggestion']); ?></td>
                        <td><?php echo htmlspecialchars($row['submitted_at']); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="btn-back">
            <a href="dashboard.php" class="btn btn-primary">Back to Dashboard</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>