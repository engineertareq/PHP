<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Sheet</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .highlight {
            background-color: #d1ffd1;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h3>Student Result Sheet</h3>

    <?php
    // Associative array: student name => score
    $students = [
        "Alice" => 85,
        "Bob" => 92,
        "Charlie" => 78,
        "David" => 95,
        "Eva" => 99
    ];

    // Find maximum score and student
    $maxScore = max($students);
    $topStudent = array_search($maxScore, $students);

    // Display table
    echo "<table>";
    echo "<tr><th>Student Name</th><th>Score</th></tr>";

    foreach ($students as $name => $score) {
        if ($score == $maxScore) {
            echo "<tr class='highlight'><td>$name</td><td>$score</td></tr>";
        } else {
            echo "<tr><td>$name</td><td>$score</td></tr>";
        }
    }

    echo "</table>";

    echo "<p><strong>Highest Score:</strong> $maxScore by <strong>$topStudent</strong></p>";
    ?>
</body>
</html>