<div class="container">
<div class="card p-4">
    <form action="<?= newlibrary\app\core\Router::Url("/public/postlogin") ?>" method="POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="Password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<input type="submit" value="LOGIN">

    </form>
</div>
</div>