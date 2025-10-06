<?php
// --- Original PHP logic stays the same ---
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Student</title>

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

    /* ==========================
       UPDATE PAGE STYLES (from update.css)
    ========================== */
    #update-container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1rem;
    }

    #update-card {
      width: 100%;
      max-width: 420px;
      background: var(--bg-secondary);
      border: 1px solid var(--border-primary);
      border-radius: 12px;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
      overflow: hidden;
    }

    #update-header {
      background: var(--bg-secondary);
      padding: 1.5rem 1.5rem 1rem;
      text-align: center;
      border-bottom: 1px solid var(--border-primary);
    }

    #update-header h2 {
      color: var(--text-primary);
      font-size: 1.5rem;
      font-weight: 600;
      margin: 0;
    }

    #update-student-form {
      padding: 1.5rem;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    .form-group label {
      display: block;
      color: var(--text-secondary);
      font-size: 0.875rem;
      font-weight: 500;
      margin-bottom: 0.5rem;
    }

    .form-group input {
      width: 100%;
      padding: 0.75rem;
      background: var(--bg-tertiary);
      border: 1px solid var(--border-secondary);
      border-radius: 8px;
      color: var(--text-primary);
      font-size: 0.875rem;
      transition: all 0.2s ease;
      box-sizing: border-box;
    }

    .form-group input:focus {
      outline: none;
      border-color: var(--accent-one);
      box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.1);
    }

    .form-group input::placeholder {
      color: var(--text-disabled);
    }

    .form-actions {
      display: flex;
      gap: 0.75rem;
      margin-top: 1.5rem;
      padding-top: 1rem;
      border-top: 1px solid var(--border-primary);
    }

    #update-submit-btn {
      flex: 1;
      padding: 0.75rem 1rem;
      font-size: 0.875rem;
      font-weight: 600;
      background: var(--accent-one);
      border: none;
      color: white;
      border-radius: 8px;
      transition: all 0.2s ease;
      cursor: pointer;
    }

    #update-submit-btn:hover {
      background: var(--accent-one-hover);
    }

    #back-from-update {
      padding: 0.75rem 1rem;
      background: var(--bg-tertiary);
      border: 1px solid var(--border-secondary);
      color: var(--text-secondary);
      font-weight: 500;
      text-decoration: none;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 8px;
      transition: all 0.2s ease;
      font-size: 0.875rem;
    }

    #back-from-update:hover {
      background: var(--bg-elevated);
      border-color: var(--border-accent);
      color: var(--text-primary);
    }

    .form-group input:invalid:not(:focus):not(:placeholder-shown) {
      border-color: var(--danger);
    }

    .form-group input:valid:not(:focus):not(:placeholder-shown) {
      border-color: var(--success);
    }

    @media (max-width: 640px) {
      #update-container {
        padding: 1rem;
      }

      #update-card {
        margin: 0;
      }

      #update-header h2 {
        font-size: 1.25rem;
      }

      .form-actions {
        flex-direction: column;
      }
    }
  </style>
  <!-- ===== Internal CSS ends here ===== -->
</head>
<body>
  <!-- Your original update form and PHP content here -->
   <h1>Update Student</h1>
<form method="post" action="/users/update/<?= $user['id'] ?>">
  <label>First Name:</label>
  <input type="text" name="first_name" value="<?= $user['first_name'] ?>"><br>
  <label>Last Name:</label>
  <input type="text" name="last_name" value="<?= $user['last_name'] ?>"><br>
  <label>Email:</label>
  <input type="email" name="email" value="<?= $user['email'] ?>"><br>
  <button type="submit">Update</button>
</form>
<a href="/users">⬅ Back</a>
</body>
</html>