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
            echo '<a href="#" class="question-link" data-question-id="' . $questionId . '">Reply</a>';
            echo '</li>';
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </ul>

    <!-- Admin Reply Form -->
    <h2>Admin Reply</h2>
    <form action="admin_reply.php" method="post">
      <input type="number" name="question_id" id="question_id" style="display: none;"><br>
        Reply: <textarea name="reply_text"></textarea><br>
        <input type="submit" value="Submit Reply">
    </form>

    <script>
        // Get all question links
        const questionLinks = document.querySelectorAll('.question-link');

        // Add click event listeners to each question link
        questionLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const questionId = this.getAttribute('data-question-id');
                document.getElementById('question_id').value = questionId;
               
            });
        });
    </script>
</body>
</body>
</html>
