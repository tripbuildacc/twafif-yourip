<?php
// redirect.php
// Non-cache
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// Redirect via HTTP header (302)
header('Location: https://api.ipify.org/?format=json', true, 302);
exit;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="refresh" content="0;url=https://api.ipify.org/?format=json">
  <title>Redirecting…</title>
  <script>
    // JS fallback
    location.replace('https://api.ipify.org/?format=json');
  </script>
</head>
<body>
  If you are not redirected automatically, <a href="https://api.ipify.org/?format=json">click here</a>.
</body>
</html>