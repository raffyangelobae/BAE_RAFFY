<?php
// --- Original PHP logic stays the same ---
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deleted Students</title>

  <style>
    :root {
      --bg-primary: #e5e5e5;
      --bg-secondary: #1e1f23;
      --bg-tertiary: #151618;
      --text-primary: #ffffff;
      --text-secondary: #d1d1d1;
      --accent-one: #8b5cf6;
      --accent-one-hover: #a855f7;
      --success: #7afaaf;
      --danger: #ef4444;
      --warning: #f59e0b;
      --border-primary: #333;
      --shadow-str: 0 6px 20px rgba(0, 0, 0, 0.5);
    }

    body {
      font-family: "Inter", sans-serif;
      background: var(--bg-primary) url('Background.jpg') no-repeat center center fixed;
      background-size: cover;
      color: var(--text-primary);
      margin: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 2rem;
    }

    .page-header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .page-header h1 {
      font-size: 2rem;
      color: var(--accent-one);
      margin-bottom: 0.5rem;
    }

    .page-header p {
      color: var(--text-muted);
      font-size: 0.9rem;
    }

    .data-card {
      background: var(--bg-secondary);
      border-radius: 15px;
      box-shadow: var(--shadow-str);
      border: 1px solid var(--border-primary);
      padding: 1.5rem;
      width: 100%;
      max-width: 900px;
      overflow-x: auto;
      animation: fadeIn 0.5s ease-in-out;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 0.9rem 1rem;
      text-align: left;
      color: var(--text-secondary);
      border-bottom: 1px solid var(--border-primary);
    }

    th {
      color: var(--text-primary);
      font-weight: 600;
      background: var(--bg-tertiary);
    }

    tr:hover {
      background: rgba(139, 92, 246, 0.08);
    }

    a.btn {
      text-decoration: none;
      padding: 0.5rem 0.9rem;
      border-radius: 8px;
      font-size: 0.85rem;
      font-weight: 600;
      transition: all 0.2s ease;
      display: inline-block;
      text-align: center;
    }

    a.restore-btn {
      background: var(--success);
      color: #000;
    }

    a.restore-btn:hover {
      opacity: 0.8;
    }

    a.delete-btn {
      background: var(--danger);
      color: white;
    }

    a.delete-btn:hover {
      background: #dc2626;
    }

    .back-link {
      display: inline-block;
      margin-top: 2rem;
      text-decoration: none;
      background: var(--bg-tertiary);
      border: 1px solid var(--border-primary);
      padding: 0.75rem 1rem;
      color: var(--text-secondary);
      border-radius: 8px;
      transition: all 0.2s ease;
    }

    .back-link:hover {
      background: var(--bg-elevated);
      color: var(--text-primary);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 700px) {
      th, td {
        padding: 0.7rem;
        font-size: 0.85rem;
      }
    }
  </style>
</head>

<body>
  <div class="page-header">
    <h1>Deleted Students</h1>
    <p>View and manage soft-deleted student records</p>
  </div>

  <div class="data-card">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($records as $row): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['first_name'] ?></td>
          <td><?= $row['last_name'] ?></td>
          <td><?= $row['email'] ?></td>
          <td>
            <a href="/users/restore/<?= $row['id'] ?>" class="btn restore-btn">♻ Restore</a>
            <a href="/users/hard-delete/<?= $row['id'] ?>" class="btn delete-btn" onclick="return confirm('Delete permanently?')">❌ Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <a href="/users" class="back-link">⬅ Back to Active Students</a>
</body>
</html>
