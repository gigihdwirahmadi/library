<div class="container">
<div class="card p-4">

    <form action="<?= newlibrary\app\core\Router::Url("/public/postaddsubscription") ?>" method="POST">
    <input type="hidden" name="id" value="<?= $data->id ?>">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Month</label>
  <input type="text" name="month" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Price</label>
  <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Avatar</label>
  <select class="form-select form-select mb-3" name="is_active" aria-label="form-select-lg example">
  <option selected>Open this select menu</option>
  <option value="1" >Active</option>
  <option value="0">Inactive</option>
</select></div>
<input type="submit" value="SUBMIT" class="btn btn-success">

    </form>