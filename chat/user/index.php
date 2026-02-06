<?php
require "../../server/connection.php";

$messages = [];
$activeConversation = null;

// Get conversation if selected
if (isset($_GET['conversation'])) {
    $cid = (int)$_GET['conversation'];
    $res = mysqli_query(
        $connection,
        "SELECT * FROM chat WHERE conversation_id=$cid ORDER BY created_at ASC"
    );
    while ($row = mysqli_fetch_assoc($res)) {
        $messages[] = $row;
    }
    $activeConversation = $messages[0] ?? null;
}

// Handle user reply (no email/name input)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reply_message'])) {
    $conversation_id = (int)$_POST['conversation_id'];
    $reply = mysqli_real_escape_string($connection, $_POST['reply']);

    if ($reply && $conversation_id) {
        // Get user info from first message in conversation
        $user = mysqli_fetch_assoc(mysqli_query(
            $connection,
            "SELECT name,email FROM chat WHERE conversation_id=$conversation_id  LIMIT 1"
        ));

        $name  = $user['name'] ?? 'User';
        $email = $user['email'] ?? '';

        mysqli_query(
            $connection,
            "INSERT INTO chat (conversation_id, sender, name, email, message)
             VALUES ('$conversation_id', 'user', '$name', '$email', '$reply')"
        );
        header("Location: ?conversation=$conversation_id");
        exit;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body class="bg-[#F5F8FF] min-h-screen flex flex-col">

    <!-- TOP BAR -->
    <div class="bg-white p-4 flex items-center gap-4 shadow border-b border-blue-100 shrink-0">
        <button onclick="history.back()"
            class="px-4 py-2 bg-[#0055FF] hover:bg-[#0046D5] text-white rounded text-sm transition">
            ← Go Back
        </button>
        <h3 class="font-semibold text-lg text-[#0F172A]">Mail inbox</h3>
    </div>

    <!-- MAIN CHAT AREA -->
    <main class="flex-1 flex flex-col bg-white">

        <?php if ($activeConversation): ?>

            <!-- MESSAGES -->
            <div class="flex-1 overflow-y-auto p-4 space-y-3">
                <?php foreach ($messages as $m): ?>
                    <div class="flex <?= $m['sender'] === 'admin' ? 'justify-start' : 'justify-end' ?>">
                        <div
                            class="px-3 py-2 text-sm max-w-[75%] break-words
                            <?= $m['sender'] === 'admin'
                                ? 'bg-[#EEF2FF] text-[#0F172A] rounded-l-xl rounded-tr-xl'
                                : 'bg-[#0055FF] text-white rounded-r-xl rounded-tl-xl' ?>">

                            <p><?= nl2br(htmlspecialchars($m['message'])) ?></p>

                            <span class="text-xs   <?= $m['sender'] === 'admin' ? 'text-black' : 'text-white' ?> block mt-1">
                                <?= date("h:i A", strtotime($m['created_at'])) ?>
                            </span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- REPLY (STICKY BOTTOM) -->
            <div class="border-t border-blue-100 bg-white p-3 sticky bottom-0">
                <form method="POST" class="flex flex-col sm:flex-row gap-2">
                    <input type="hidden" name="reply_message">
                    <input type="hidden" name="conversation_id"
                        value="<?= htmlspecialchars($activeConversation['conversation_id']) ?>">

                    <textarea name="reply" rows="2" placeholder="Type your reply..."
                        class="flex-1 border border-blue-200 focus:border-[#0055FF] focus:ring-2 focus:ring-blue-200 px-3 py-2 rounded outline-none resize-none"
                        required></textarea>

                    <button type="submit"
                        class="px-5 py-2 bg-[#0055FF] hover:bg-[#0046D5] text-white text-sm rounded transition">
                        Send
                    </button>
                </form>
            </div>

        <?php else: ?>
            <div class="flex-1 flex items-center justify-center text-slate-400">
                No conversation selected.
            </div>
        <?php endif; ?>

    </main>

</body>

</html>


