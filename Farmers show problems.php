<!DOCTYPE html>
<html>
<head>
    <title> Questions</title>
</head>
<body>
    <h1>Reply Questions</h1>

    <!-- List of Questions and Replies -->
    <ul>
        <?php
        // Database connection
        include("connection.php");

        if (!$conn) {
            die('Could not connect: ' . mysqli_error($conn));
        }

        // Fetch questions and their replies from the database
        $sql = "SELECT q.id AS question_id, u.name AS user_name, q.question_text, r.reply_text FROM questions q LEFT JOIN replies r ON q.id = r.question_id INNER JOIN users u ON q.user_id=u.id;";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die('Error: ' . mysqli_error($conn));
        }

        // Display questions and replies
        while ($row = mysqli_fetch_assoc($result)) {
            $questionId = $row['question_id'];
            $farmername = $row['user_name'];
            $questionText = $row['question_text'];
            $replyText = $row['reply_text'];

            echo '<li>';
            echo '<strong>Name:</strong> ' . $farmername . '<br>';
            echo '<strong>Question:</strong> ' . $questionText . '<br>';
            if ($replyText !== null) {
                echo '<strong>Reply:</strong> ' . $replyText . '<br>';
            } else {
                echo '<em>No reply yet.</em><br>';
            }
          
            echo '</li>';
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </ul>

</body>
</html>
