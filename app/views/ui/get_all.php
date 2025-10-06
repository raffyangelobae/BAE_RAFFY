<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Students List</title>
  <style>
    /* =======================================
       GLOBAL THEME VARIABLES
    ======================================= */
    :root {
      --bg-tertiary: #f9fafb;
      --text-primary: #111827;
      --text-secondary: #374151;
      --text-muted: #9ca3af;
      --border-primary: #d1d5db;
      --border-secondary: #9ca3af;
      --accent-one: #3b82f6;
      --accent-two: #2563eb;
      --danger: #dc2626;
      --space-xs: 0.25rem;
      --space-sm: 0.5rem;
      --space-md: 1rem;
      --space-lg: 1.5rem;
      --space-2xl: 3rem;
      --radius-lg: 8px;
      font-family: Arial, sans-serif;
    }

    body {
      margin: 2rem;
      background-color: #ffffff;
      color: var(--text-primary);
      font-family: Arial, Helvetica, sans-serif;
    }

    h2 {
      color: var(--text-primary);
    }

    a.btn, button {
      background-color: var(--accent-one);
      color: #fff;
      padding: 8px 16px;
      text-decoration: none;
      border-radius: 4px;
      border: none;
      cursor: pointer;
      margin-right: 6px;
      font-size: 14px;
    }

    a.btn:hover, button:hover {
      background-color: var(--accent-two);
    }

    input[type="text"] {
      padding: 6px;
      border-radius: 4px;
      border: 1px solid var(--border-secondary);
      margin-right: 6px;
    }

    /* =======================================
       TABLE STYLES
    ======================================= */
    .data-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1.5rem;
      font-size: 14px;
    }

    .data-table thead {
      background: var(--bg-tertiary);
      border-bottom: 2px solid var(--border-secondary);
    }

    .data-table th {
      padding: var(--space-sm);
      text-align: left;
      font-weight: 600;
      color: var(--text-primary);
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      border-bottom: 1px solid var(--border-primary);
    }

    .data-table tbody tr {
      border-bottom: 1px solid var(--border-primary);
      transition: background 0.2s ease;
    }

    .data-table tbody tr:hover {
      background: var(--bg-tertiary);
    }

    .data-table td {
      padding: var(--space-sm);
      color: var(--text-secondary);
      vertical-align: middle;
    }

    /* =======================================
       TABLE ACTION BUTTONS
    ======================================= */
    .table-actions a {
      background: transparent;
      border: 1px solid var(--border-secondary);
      color: var(--text-secondary);
      font-size: 12px;
      padding: 4px 10px;
      border-radius: 4px;
      text-decoration: none;
      transition: all 0.2s ease-in-out;
    }

    .table-actions a:hover {
      background: var(--accent-one);
      color: white;
      border-color: var(--accent-one);
    }

    .table-actions .danger {
      border-color: var(--danger);
      color: var(--danger);
    }

    .table-actions .danger:hover {
      background: var(--danger);
      color: white;
    }

    /* =======================================
       PAGINATION STYLES
    ======================================= */
    .pagination-nav {
      display: flex;
      justify-content: center;
      margin-top: 1.5rem;
    }

    .pagination-list {
      display: inline-flex;
      gap: 0.5rem;
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .pagination-item {
      margin: 0;
    }

    .pagination-link {
      display: flex;
      justify-content: center;
      align-items: center;
      min-width: 2.5rem;
      height: 2.5rem;
      font-size: 0.875rem;
      font-weight: 500;
      color: #6b7280;
      background-color: #fff;
      border: 1px solid #d1d5db;
      border-radius: 0.375rem;
      text-decoration: none;
      transition: 0.2s ease-in-out;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .pagination-link:hover {
      background-color: #f9fafb;
      color: #374151;
      border-color: #9ca3af;
      transform: translateY(-1px);
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .pagination-item.active .pagination-link {
      background-color: #3b82f6;
      color: #fff;
      border-color: #3b82f6;
      font-weight: 600;
      box-shadow: 0 2px 4px rgba(59, 130, 246, 0.3);
    }

    .pagination-item.disabled .pagination-link {
      background-color: #f8fafc;
      border-color: #e2e8f0;
      color: #cbd5e1;
      cursor: not-allowed;
      pointer-events: none;
    }

    /* =======================================
       RESPONSIVE
    ======================================= */
    @media (max-width: 640px) {
      .data-table,
      .data-table thead,
      .data-table tbody,
      .data-table th,
      .data-table td,
      .data-table tr {
        display: block;
      }

      .data-table tr {
        background: var(--bg-tertiary);
        border-radius: var(--radius-lg);
        margin-bottom: var(--space-md);
        padding: var(--space-md);
        border: 1px solid var(--border-primary);
      }

      .data-table td {
        border: none;
        position: relative;
        padding: var(--space-sm) 0;
        padding-left: 40%;
      }

      .data-table td:before {
        content: attr(data-label) ": ";
        position: absolute;
        left: 0;
        width: 35%;
        font-weight: 600;
        color: var(--text-primary);
        font-size: 11px;
        text-transform: uppercase;
      }

      .table-actions {
        flex-direction: row;
        gap: var(--space-sm);
        margin-top: var(--space-sm);
      }
    }
  </style>
</head>

<body>
  <h2><?= $show_deleted ? 'Deleted Students' : 'Active Students' ?></h2>

  <!-- Action Buttons -->
  <div style="margin-bottom: 1rem;">
    <a href="/users/create" class="btn" id="btn-add-user">➕ Create New Student</a>
    <a href="/users/get-all" class="btn">Show Active</a>
    <a href="/users/get-all?show=deleted" class="btn">Show Deleted</a>
  </div>

  <!-- Search Form -->
  <form method="get" action="/users/get-all" style="margin-top: 1rem;">
    <?php if ($show_deleted): ?>
      <input type="hidden" name="show" value="deleted">
    <?php endif; ?>
    <input type="text" name="search" value="<?= $search ?? '' ?>" placeholder="Search...">
    <button type="submit">Search</button>
  </form>

  <!-- Data Table -->
  <table class="data-table">
    <thead>
      <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($records as $r): ?>
        <tr>
          <td data-label="ID"><?= $r['id'] ?></td>
          <td data-label="Name"><?= $r['first_name'] . ' ' . $r['last_name'] ?></td>
          <td data-label="Email"><?= $r['email'] ?></td>
          <td data-label="Actions" class="table-actions">
            <?php if ($show_deleted): ?>
              <a href="/users/restore/<?= $r['id'] ?>">Restore</a>
              <a href="/users/hard_delete/<?= $r['id'] ?>" class="danger" onclick="return confirm('Hard delete permanently?')">Hard Delete</a>
            <?php else: ?>
              <a href="/users/update/<?= $r['id'] ?>">Edit</a>
              <a href="/users/delete/<?= $r['id'] ?>" class="danger" onclick="return confirm('Soft delete this student?')">Delete</a>
            <?php endif; ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <!-- Pagination -->
  <div class="pagination-nav">
    <?= $pagination_links ?>
  </div>
</body>

</html>
