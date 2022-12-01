<div class="container">
<div class="card p-4">
    <form action="<?= newlibrary\app\core\Router::Url("/public/postupdatesubscription") ?>" method="POST">
    <input type="hidden" name="id" value="<?= $data->id ?>">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">title</label>
  <input type="text" name="title" class="form-control" id="exampleFormControlInput1" value="<?= $data->title ?>" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">month</label>
  <input type="text" name="month" class="form-control" id="exampleFormControlInput1" value="<?= $data->month ?>" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">price</label>
  <input type="text" name="price" class="form-control" id="exampleFormControlInput1" value="<?= $data->price ?>" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">is_active</label>
  <input type="text" name="is_active" class="form-control" id="exampleFormControlInput1" value="<?= $data->is_active ?>" placeholder="name@example.com">
</div>
<input type="submit" value="SUBMIT">

    </form>