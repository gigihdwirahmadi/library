<div class="container">
<div class="card p-4">
    <form action="<?= newlibrary\app\core\Router::Url("/public/postaddlibrarian") ?>" method="POST">
    <input type="hidden" name="id" value="<?= $data->id ?>">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Username</label>
  <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="text" name="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Avatar</label>
  <input type="text" name="avatar" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<input type="submit" value="SUBMIT" class="btn btn-success">

    </form>