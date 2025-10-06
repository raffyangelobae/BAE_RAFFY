<?php
// --- Original PHP logic stays the same ---
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deleted Records</title>

  <!-- ===== Internal CSS starts here ===== -->
  <style>
    /* ==========================
       GLOBAL STYLES (from style.css)
    ========================== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --bg-primary: #e5e5e5;
      --bg-secondary: #212327;
      --bg-tertiary: #151618;
      --bg-elevated: #303236;
      --text-primary: #ffffff;
      --text-secondary: #e5e5e5;
      --text-muted: #a3a3a3;
      --text-disabled: #666666;
      --accent-one: #8b5cf6;
      --accent-one-hover: #a855f7;
      --accent-two: #9fffc7;
      --accent-two-hover: #6eebbb;
      --success: #7afaaf;
      --danger: #8b5cf6;
      --warning: #f59e0b;
      --border-primary: #333333;
      --border-secondary: #404040;
      --border-accent: #4a4a4a;
      --radius-lg: 0.3rem;
      --radius-xl: 0.5rem;
      --shadow-str: 1px 1px 10px #000;
    }

    body {
      font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
      background: var(--bg-primary) url('Background.jpg') no-repeat fixed;
      background-size: cover;
      color: var(--text-primary);
      line-height: 1.6;
      min-height: 100vh;
      font-size: 14px;
    }

    .main-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
    }

    .page-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
      padding: 2rem;
      background: var(--bg-secondary);
      border-radius: var(--radius-xl);
      box-shadow: var(--shadow-str);
    }

    .page-title {
      font-size: 1.2rem;
      font-weight: 700;
      color: var(--text-primary);
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      padding: 0.5rem 1rem;
      border-radius: var(--radius-lg);
      font-weight: 600;
      font-size: 0.8rem;
      text-decoration: none;
      border: none;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .btn-primary {
      background: var(--accent-one);
      color: white;
    }

    .btn-primary:hover {
      background: var(--accent-one-hover);
      transform: translateY(-1px);
    }

    .btn-secondary {
      background: transparent;
      color: var(--text-secondary);
      border: 1px solid var(--border-secondary);
    }

    .btn-secondary:hover {
      background: var(--bg-tertiary);
      color: var(--text-primary);
    }

    .data-card {
      background: var(--bg-secondary);
      border-radius: var(--radius-xl);
      box-shadow: var(--shadow-str);
      overflow: hidden;
      padding: 1.5rem;
    }

    .data-table {
      width: 100%;
      border-collapse: collapse;
    }

    .data-table th, .data-table td {
      padding: 0.75rem;
      border-bottom: 1px solid var(--border-secondary);
      text-align: left;
      color: var(--text-secondary);
    }

    .data-table th {
      color: var(--text-primary);
      font-weight: 600;
      border-bottom: 2px solid var(--border-accent);
    }

    .text-success {
      color: var(--success);
    }

    .text-danger {
      color: var(--danger);
    }

    .text-warning {
      color: var(--warning);
    }
  </style>
  <!-- ===== Internal CSS ends here ===== -->
</head>
<body>
  <!-- Your original deleted records PHP content here -->
   <h1>Deleted Students</h1>

<table border="1">
  <tr>
    <th>ID</th><th>First</th><th>Last</th><th>Email</th><th>Action</th>
  </tr>
  <?php foreach ($records as $row): ?>
  <tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['first_name'] ?></td>
    <td><?= $row['last_name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td>
      <a href="/users/restore/<?= $row['id'] ?>">♻ Restore</a>
      <a href="/users/hard-delete/<?= $row['id'] ?>" onclick="return confirm('Delete permanently?')">❌ Hard Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<p><a href="/users">⬅ Back to Active</a></p>
</body>
</html>
