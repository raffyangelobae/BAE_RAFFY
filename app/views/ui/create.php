<?php
// --- Original PHP logic stays the same ---
// Example placeholder: (Assuming your create.php contains your insert logic)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Student</title>

  <!-- ===== Internal CSS starts here ===== -->
  <style>
    :root {
      --bg-primary: #e5e5e5;
      --bg-secondary: #1e1f23;
      --bg-tertiary: #151618;
      --text-primary: #ffffff;
      --text-secondary: #d1d1d1;
      --text-muted: #a3a3a3;
      --accent-one: #8b5cf6;
      --accent-one-hover: #a855f7;
      --success: #7afaaf;
      --danger: #ef4444;
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
      justify-content: center;
      align-items: center;
    }

    .form-card {
      background: var(--bg-secondary);
      border-radius: 15px;
      box-shadow: var(--shadow-str);
      border: 1px solid var(--border-primary);
      width: 100%;
      max-width: 450px;
      padding: 2rem;
      animation: fadeIn 0.5s ease-in-out;
    }

    .form-header {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .form-header h1 {
      font-size: 1.8rem;
      color: var(--accent-one);
      margin-bottom: 0.5rem;
    }

    .form-header p {
      color: var(--text-muted);
      font-size: 0.9rem;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    label {
      font-weight: 500;
      font-size: 0.9rem;
      color: var(--text-secondary);
      margin-bottom: 0.3rem;
      display: block;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 0.75rem;
      background: var(--bg-tertiary);
      border: 1px solid var(--border-primary);
      border-radius: 8px;
      color: var(--text-primary);
      font-size: 0.9rem;
      transition: all 0.2s ease;
    }

    input:focus {
      border-color: var(--accent-one);
      box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.2);
      outline: none;
    }

    .form-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 1rem;
    }

    button {
      flex: 1;
      padding: 0.75rem 1rem;
      border: none;
      background: var(--accent-one);
      color: white;
      border-radius: 8px;
      font-size: 0.9rem;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.2s ease;
    }

    button:hover {
      background: var(--accent-one-hover);
    }

    a.back-link {
      text-decoration: none;
      color: var(--text-secondary);
      padding: 0.75rem 1rem;
      border: 1px solid var(--border-primary);
      border-radius: 8px;
      margin-left: 0.5rem;
      transition: all 0.2s ease;
      background: var(--bg-tertiary);
    }

    a.back-link:hover {
      background: var(--bg-elevated);
      color: var(--text-primary);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 600px) {
      .form-card {
        margin: 1rem;
        padding: 1.5rem;
      }
      .form-header h1 {
        font-size: 1.5rem;
      }
    }
  </style>
  <!-- ===== Internal CSS ends here ===== -->
</head>

<body>
  <div class="form-card">
    <div class="form-header">
      <h1>Create Student</h1>
      <p>Fill out the form to add a new student</p>
    </div>

    <form method="post" action="/users/create">
      <div class="form-group">
        <label>First Name</label>
        <input type="text" name="first_name" placeholder="Enter first name" required>
      </div>

      <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="last_name" placeholder="Enter last name" required>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter email address" required>
      </div>

      <div class="form-actions">
        <button type="submit">💾 Save</button>
        <a href="/users" class="back-link">⬅ Back</a>
      </div>
    </form>
  </div>
</body>
</html>
