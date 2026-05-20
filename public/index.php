<?php

$appName = getenv('APP_NAME') ?: 'Concreto Laravel ZIP Demo';

?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($appName, ENT_QUOTES, 'UTF-8'); ?></title>
  <style>
    :root { color-scheme: light; font-family: Arial, sans-serif; }
    body { margin: 0; min-height: 100vh; display: grid; place-items: center; background: #f4f7fb; color: #172033; }
    main { width: min(720px, calc(100% - 32px)); padding: 40px; background: #fff; border: 1px solid #d9e2ef; border-radius: 8px; box-shadow: 0 16px 48px rgba(23, 32, 51, .08); }
    h1 { margin: 0 0 12px; font-size: 32px; }
    p { margin: 0; color: #526173; line-height: 1.6; }
    code { background: #edf2f7; padding: 2px 6px; border-radius: 4px; }
  </style>
</head>
<body>
  <main>
    <h1>Laravel ZIP deploy works</h1>
    <p>This sample was uploaded as a ZIP, committed into the GitOps repo, and served by the Laravel runner from <code>public/index.php</code>.</p>
  </main>
</body>
</html>
