<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<h3>thêm thư mục</h3>
<form class="row g-3" method="Post" action="<?php echo route('categorie.add');?>">

<div class="col-auto">
  <label for="inputtext2" class="visually-hidden" name="category_name">text</label>
  <input type="text" class="form-control" id="inputtext2" placeholder="text">
  <?php echo csrf_field();?>
  <!-- <input type="hidden" name="_token" value="<?php echo csrf_token();?>"> -->
</div>
<div class="col-auto">
  <button type="submit" class="btn btn-primary mb-3">xem</button>
</div>
</form>