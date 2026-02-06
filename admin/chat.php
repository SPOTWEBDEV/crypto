<?php
require "../server/connection.php";
require "../mailer/index.php";

if (!isset($_SESSION['admin_login_']) && $_SESSION['admin_login_'] != true) echo "<script> window.location.href = 'login.php' </script>"; 


$formName  = "Proteus Chain Support Team";
$siteemail = "support@proteuschain.com";

/* -------------------------
   HELPER: 12-DIGIT ID
-------------------------- */
function generateConversationId()
{
  return random_int(100000000000, 999999999999);
}






/* -------------------------
   SEND MESSAGE (ADMIN)
-------------------------- */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send_message'])) {

  $name    = mysqli_real_escape_string($connection, $_POST['name']);
  $email   = mysqli_real_escape_string($connection, $_POST['email']);
  $subject = mysqli_real_escape_string($connection, $_POST['subject'] ?? '');
  $message = mysqli_real_escape_string($connection, $_POST['message']);


  $useDescription = $_POST['use_description'] ?? '1';
  $userDescription = trim($_POST['description'] ?? '');





  if ($name && $email && $message && $subject) {

    // check if conversation already exists for this email
    $check = mysqli_query(
      $connection,
      "SELECT conversation_id FROM chat WHERE email='$email' LIMIT 1"
    );

    if (mysqli_num_rows($check)) {
      $row = mysqli_fetch_assoc($check);
      $conversation_id = $row['conversation_id'];
    } else {
      $conversation_id = generateConversationId();
    }

    $verify_link = $domain . "chat/user/?conversation=" . $conversation_id;

    $customDescription = '
<p style="margin:0 0 14px 0; color:#374151; font-size:15px; line-height:1.7;">
  We are writing to inform you that you have received a new message concerning your
  <span style="color:#f59e0b; font-weight:500;">' . $sitename . '</span> account.
  Please log in to your account through our official website or follow the secure link provided below.
</p>

<p>Please verify your account by clicking the button below:</p>
                        <a href=" ' . $verify_link . ' "
				       style="background:#00c853; color:#fff; padding:10px 20px; border-radius:6px; text-decoration:none;">
				       Verify My Account
				    </a>
</p>

<p>Used the link incase the button is not working :</p>
                        <a href=" ' . $verify_link . ' "
				       style="color:#00c853;">
				       '. $verify_link .'
				    </a>
</p>

<p style="margin:10px 0 14px 0; color:#374151; font-size:15px; line-height:1.7;">
  For your safety, please always verify that emails claiming to be from us are sent from our official company email address before clicking any links or providing any information. We will never ask for your password or sensitive details via email. If you notice anything unusual or have concerns about the authenticity of this message, please contact our support team directly through our official
</p>
';

    if ($useDescription === '0' && !empty($userDescription)) {
      // user typed their own description
      $finalDescription = nl2br(htmlspecialchars($userDescription));
    } else {
      // use default system description
      $finalDescription = $customDescription;
    }

    mysqli_query(
      $connection,
      "INSERT INTO chat
      (conversation_id, sender, name, email, subject, message)
      VALUES
      ('$conversation_id','admin','$name','$email','$subject','$message')"
    );




    $body = '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome to ' . $sitename . '</title>
</head>

<body style="margin:0; padding:0; background-color:#f5f6fa; font-family: Arial, Helvetica, sans-serif;">

  <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f5f6fa; padding:20px 0;">
    <tr>
      <td align="center">

        <!-- Main Card -->
        <table width="100%" cellpadding="0" cellspacing="0" style="max-width:600px; background:#ffffff; border-radius:14px; overflow:hidden; box-shadow:0 10px 25px rgba(0,0,0,0.08);">

          <!-- Header -->
          <tr>
            <td style="background:#111827; padding:22px 24px;">

              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td>
                    <img src="https://proteuschain.com/assets/img/logo/blacklogo.jpeg" alt="Logo" width="80" height="60" style="display:block;" />
                  </td>
                  <td align="right" style="color:#facc15; font-size:18px; font-weight:600;">
                    ' . $sitename . '
                    <div style="color:#c7c9d3; font-size:13px;">Powered by ' . $sitename . ' Networks</div>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          <!-- Body -->
          <tr>
            <td style="padding:30px 26px 10px 26px;">

              <h1 style="margin:0; font-size:24px; color:#1f2937; font-weight:600;">
                Welcome to ' . $sitename . '
              </h1>

              <div style="width:100%; height:1px; background:#e5e7eb; margin:16px 0 24px 0;"></div>

              <p style="margin:0 0 14px 0; color:#374151; font-size:15px; line-height:1.7;">
                Dear <strong>' . $name . '</strong>,
              </p>


               ' . $finalDescription . '

              <p style="margin:0 0 14px 0; color:#374151; font-size:15px; line-height:1.7;">
                Thank you for signing up to 
                <span style="color:#f59e0b; font-weight:500;">' . $sitename . '</span>.
              </p>

             

              <p style="margin:0; color:#374151; font-size:15px; line-height:1.7;">
                If you have any questions or concerns, simply follow the link to get back at us.
                 <a href="http://proteuschain.com/">http://proteuschain.com/</a>
              </p>

              <p style="margin:0; color:#374151; font-size:15px; line-height:1.7;">
                If you have any questions or concerns, simply follow the link to get back at us.
              </p>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="padding:18px 24px; border-top:1px solid #e5e7eb; background-color:#fafafa;">

              <p style="margin:0; font-size:13px; color:#6b7280; text-align:center;">
                Sincerely, ' . $sitename . ' Support Team ❤️
              </p>

              <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:14px;">
                <tr>
                  <td style="font-size:13px; color:#6d28d9;">🌐 ' . $sitename . '</td>
                  
                </tr>
              </table>

            </td>
          </tr>

        </table>

      </td>
    </tr>
  </table>

</body>
</html>';

    smtpmailer($email, $siteemail, $formName, $subject, $body);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
  }
}

/* -------------------------
   REPLY (ADMIN)
-------------------------- */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reply_message'])) {

  $conversation_id = (int)$_POST['conversation_id'];
  $reply           = mysqli_real_escape_string($connection, $_POST['reply']);

  $parent = mysqli_fetch_assoc(
    mysqli_query(
      $connection,
      "SELECT name,email FROM chat WHERE conversation_id=$conversation_id LIMIT 1"
    )
  );

  if ($parent && $reply) {

    mysqli_query(
      $connection,
      "INSERT INTO chat
      (conversation_id, sender, name, email, message)
      VALUES
      ('$conversation_id','admin','Support','{$parent['email']}','$reply')"
    );

    smtpmailer(
      $parent['email'],
      $siteemail,
      $formName,
      "Support Reply",
      nl2br($reply)
    );

    header("Location: ?conversation=$conversation_id");
    exit;
  }
}

/* -------------------------
   INBOX (LAST MESSAGE ONLY)
-------------------------- */
$inbox = mysqli_query(
  $connection,
  "SELECT c.*
   FROM chat c
   INNER JOIN (
     SELECT conversation_id, MAX(id) last_id
     FROM chat
     GROUP BY conversation_id
   ) x ON c.id = x.last_id
   ORDER BY c.created_at DESC"
);

/* -------------------------
   SINGLE CONVERSATION
-------------------------- */
$messages = [];
$activeConversation = null;

if (isset($_GET['conversation'])) {
  $cid = (int)$_GET['conversation'];

  $res = mysqli_query(
    $connection,
    "SELECT * FROM chat
     WHERE conversation_id=$cid
     ORDER BY created_at ASC"
  );

  while ($row = mysqli_fetch_assoc($res)) {
    $messages[] = $row;
  }

  $activeConversation = $messages[0] ?? null;
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Mail Inbox</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    body {
      font-family: "Poppins", sans-serif;
    }
  </style>
</head>

<body class="bg-gray-100 overflow-x-hidden">

  <!-- TOP BAR -->
  <div class="bg-white p-4 flex gap-4 shadow-sm">
    <button onclick="history.back()" style="background:#0055FF;" class="px-4 py-2  text-white rounded text-sm">← Go Back</button>
    <select class="border rounded px-3 py-2 text-sm">
      <option>Select Action</option>
      <option>All</option>
      <option>Unread</option>
    </select>
  </div>

  <div class="flex h-[calc(100vh-72px)]">
    <main class="flex-1 min-w-0 bg-white">

      <!-- HEADER -->
      <div class="p-5 border-b flex flex-col-reverse sm:flex-row justify-between gap-3">
        <h3 class="font-semibold text-lg">Mail inbox</h3>

        <div class="flex gap-3 flex-wrap">
          <input class="border rounded px-4 py-2 text-sm w-64" placeholder="Search User Chat ...">
          <button onclick="openSendModal()" style="background:#0055FF;" class="px-4 py-2  text-white text-sm rounded">Send Message</button>
        </div>
      </div>

      <!-- INBOX -->
      <?php while ($row = mysqli_fetch_assoc($inbox)): ?>
        <div onclick="location.href='?conversation=<?= $row['conversation_id'] ?>'"
          class="flex items-center p-4 hover:bg-gray-50 cursor-pointer">

          <div class="flex-1 min-w-0">
            <p class="font-medium truncate">
              <?= htmlspecialchars($row['name']) ?>
              <span class="text-xs text-gray-400">(<?= $row['sender'] ?>)</span>
            </p>
            <p class="text-sm text-gray-500 truncate"><?= htmlspecialchars($row['message']) ?></p>
          </div>

          <span class="text-xs text-gray-400 ml-3 whitespace-nowrap">
            <?= date("h:i A", strtotime($row['created_at'])) ?>
          </span>
        </div>
      <?php endwhile; ?>

    </main>
  </div>

  <!-- SEND MODAL -->
  <div id="sendModal" class="hidden fixed inset-0 bg-black/40 flex items-center justify-center">
    <form method="POST" class="bg-white w-[95%] sm:w-[400px] rounded-lg p-6">
      <input type="hidden" name="send_message">

      <h3 class="font-semibold mb-4">Send Message</h3>

      <input name="name" class="w-full border rounded px-4 py-2 mb-2 text-sm" placeholder="Name" required>
      <input name="email" class="w-full border rounded px-4 py-2 mb-2 text-sm" placeholder="Email" required>

      <input type="checkbox" id="useDescription" checked>
      <span class="text-sm">Use Default Description</span>

      <input type="hidden" name="use_description" id="use_description" value="1">

      <textarea
        id="DescriptionInput"
        name="description"
        class="w-full border rounded px-4 py-2 mb-2 text-sm hidden"
        placeholder="Type your custom description here..."></textarea>


      <input id="subjectInput" name="subject" autocomplete="false" type="text" class="w-full border rounded px-4 py-2 mb-2 text-sm " placeholder="Email Subject">

      <textarea name="message" class="w-full border rounded px-4 py-2 text-sm" rows="4" placeholder="Message" required></textarea>

      <div class="flex justify-end gap-3 mt-4">
        <button type="button" onclick="closeSendModal()" class="text-sm">Cancel</button>
        <button class="px-4 py-2 bg-gray-900 text-white text-sm rounded">Send</button>
      </div>
    </form>
  </div>

  <!-- CHAT MODAL -->
  <?php if ($activeConversation): ?>
    <div class="fixed inset-0 bg-black/40 flex items-center justify-center">
      <div class="bg-white w-[95%] sm:w-[500px] rounded-lg p-6">

        <h3 class="font-semibold"><?= htmlspecialchars($activeConversation['name']) ?></h3>
        <p class="text-xs text-gray-400 mb-4">
          Conversation ID: <?= $activeConversation['conversation_id'] ?>
        </p>

        <div class="space-y-3 max-h-64 overflow-y-auto mb-4">
          <?php foreach ($messages as $m): ?>
            <div class="<?= $m['sender'] === 'admin' ? 'text-right' : '' ?>">
              <div class="inline-block bg-gray-100 rounded px-3 py-2 text-sm">
                <?= nl2br(htmlspecialchars($m['message'])) ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <form method="POST">
          <input type="hidden" name="reply_message">
          <input type="hidden" name="conversation_id" value="<?= $activeConversation['conversation_id'] ?>">

          <textarea name="reply" class="w-full border rounded px-4 py-2 text-sm" rows="3" placeholder="Type reply..." required></textarea>

          <div class="flex justify-end mt-3">
            <button  style="background:#0055FF;" class="px-4 py-2  text-white text-sm rounded">Reply</button>
          </div>
        </form>

      </div>
    </div>
  <?php endif; ?>

  <script>
    function openSendModal() {
      sendModal.classList.remove('hidden')
    }

    function closeSendModal() {
      sendModal.classList.add('hidden')
    }
  </script>

  <script>
    const useDescription = document.getElementById('useDescription');
    const DescriptionInput = document.getElementById('DescriptionInput');
    const useDescriptionField = document.getElementById('use_description');

    useDescription.addEventListener('change', () => {
      if (useDescription.checked) {
        DescriptionInput.classList.add('hidden');
        useDescriptionField.value = "1"; // use default
      } else {
        DescriptionInput.classList.remove('hidden');
        useDescriptionField.value = "0"; // use custom
      }
    });
  </script>


</body>

</html>