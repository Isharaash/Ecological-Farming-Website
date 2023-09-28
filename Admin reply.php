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
        $sql = "SELECT q.id AS question_id, q.question_text, r.reply_text FROM questions q LEFT JOIN replies r ON q.id = r.question_id";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die('Error: ' . mysqli_error($conn));
        }

        // Display questions and replies
        while ($row = mysqli_fetch_assoc($result)) {
            $questionId = $row['question_id'];
            $questionText = $row['question_text'];
            $replyText = $row['reply_text'];

            echo '<li>';
            echo '<strong>Question:</strong> ' . $questionText . '<br>';
            if ($replyText !== null) {
                echo '<strong>Reply:</strong> ' . $replyText . '<br>';
            } else {
                echo '<em>No reply yet.</em><br>';
            }
            echo '<a href="#" class="question-link" data-question-id="' . $questionId . '">Select</a>';
            echo '</li>';
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </ul>

    <!-- Admin Reply Form -->
    <h2>Admin Reply</h2>
    <form action="admin_reply.php" method="post">
        Question ID: <input type="number" name="question_id" id="question_id"><br>
        Reply: <textarea name="reply_text"></textarea><br>
        <input type="submit" value="Submit Reply">
    </form>

    <!-- JavaScript to handle question click -->
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
</html>
