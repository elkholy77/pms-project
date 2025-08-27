<?php include __DIR__ . '/header.php'; ?>
<style>
  .admin-add-container{max-width:920px;margin:22px auto;padding:18px;background:#fff;border-radius:8px;box-shadow:0 6px 20px rgba(16,24,40,0.06)}
  .admin-add-grid{display:grid;grid-template-columns:260px 1fr;gap:18px;align-items:start}
  .image-box{background:#f5f7fb;border:1px dashed #e3e8f0;padding:12px;border-radius:8px;text-align:center}
  .image-box img{max-width:100%;height:160px;object-fit:contain;border-radius:6px;background:#fff;padding:6px}
  .field{display:flex;flex-direction:column;gap:6px;margin-bottom:10px}
  label{font-weight:600;color:#203040;font-size:14px;text-align:right}
  input[type="text"],input[type="number"],textarea{padding:10px;border:1px solid #e6e9ef;border-radius:6px;font-size:14px}
  textarea{min-height:120px}
  .actions{display:flex;gap:10px;justify-content:flex-end;margin-top:8px}
  .btn-primary{background:#0b74de;color:#fff;padding:10px 14px;border-radius:6px;border:0;cursor:pointer}
  .btn-ghost{background:transparent;border:1px solid #d6dbe6;padding:10px 12px;border-radius:6px;color:#333;cursor:pointer}
  @media(max-width:720px){.admin-add-grid{grid-template-columns:1fr}}
</style>

<div class="admin-add-container">
  <h2 style="text-align:right;margin:0 0 12px">Add Item</h2>
  <form method="post" action="../handler/add_items_handler.php" enctype="multipart/form-data"> >
    <div class="admin-add-grid">
      <div class="image-box">
        <div style="font-size:13px;color:#445;">add image</div>
        <div style="margin-top:8px">
          <input type="file" name="image"  style="font-size:13px">
        </div>
      </div>

      <div>
        <div class="field">
          <label>product name</label>
          <input type="text" name="name" >
        </div>

        <div class="field">
          <label>price</label>
          <input type="number" name="price"  >
        </div>

        <div class="field">
          <label>details </label>
          <input type="text" name="details" class="form-control">
        </div>

        <div class="actions">
            <button type="submit" class="btn-primary">add item</button>
        </div>
      </div>
    </div>
  </form>
</div>
