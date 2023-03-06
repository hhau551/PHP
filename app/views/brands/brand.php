<?php
  include_once('../app/views/shares/header.php')
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Brand name</th>
      <th scope="col">Xoa</th>
      <th scope="col">Sua</th>
    </tr>
  </thead>
<tbody>
    <?php foreach ($danhSachBrand as $brand): ?>
      <tr>
        <td>
          <?= $brand['BrandID'] ?>
        </td>
        <td>
          <?= $brand['BrandName'] ?>
        </td>
        <td>
          <a href="?route=delete&brandid=<?= $brand['BrandID']?>"> Xóa </a>
        </td>
        <td>
          <a href="?route=edit&brandid=<?= $brand['BrandID']?>">Sửa</a>
        </td>
      </tr>
    <?php endforeach ?>
</tbody>
</table>
<?php
  include_once('../app/views/shares/footer.php')
?>
