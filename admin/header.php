<?php 
include '../core/functions.php';
session_start();
?>
<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>admin</title>
  <style>
    :root{--accent:#0b74de;--muted:#666}
    body{font-family: Tahoma, Arial, sans-serif;direction:rtl;background:#f7f7f7;color:#222;margin:0;padding:0}
    .site-header{background:#fff;border-bottom:1px solid #eee}
    .container{max-width:1100px;margin:18px auto;padding:16px}
    h1{font-size:20px;text-align:right;margin:0 0 12px}
    .note{color:var(--muted);text-align:right;margin-bottom:8px}
    table{width:100%;border-collapse:collapse;margin-top:12px;background:#fff}
    th,td{border:1px solid #e9e9e9;padding:10px;text-align:right;font-size:14px}
    th{background:#fafafa}
    .items{background:#fcfcfc;padding:10px;border-radius:6px}
    .items div{padding:6px 0;border-bottom:1px dashed #eee}
    .items div:last-child{border-bottom:0}
    a.btn{display:inline-block;background:var(--accent);color:#fff;padding:8px 12px;border-radius:4px;text-decoration:none}
  </style>
</head>
<body>
  <header class="admin-header" style="background:#fff;border-bottom:1px solid #eee;padding:10px 0">
  <div style="max-width:1100px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;direction:rtl">
    <div style="display:flex;align-items:center;gap:12px">
    </div>
    <nav style="display:flex;gap:14px;align-items:center">
      <a href="order_data.php" style="color:#0b74de;text-decoration:none;font-weight:600">Saved Orders</a>
      <a href="add_items.php" style="color:#0b74de;text-decoration:none;font-weight:600">Add Items</a>
      <a href="../handler/logout_handler.php" style="color:#dc3545;text-decoration:none;font-weight:600">Logout</a>
    </nav>
  </div>
</header>
<?php  showmessage() ?>
