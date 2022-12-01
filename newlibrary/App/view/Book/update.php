<div class="container">
<div class="card p-4">
    <form action="<?= newlibrary\app\core\Router::Url("/public/postupdatebook") ?>" method="POST">
    <input type="hidden" name="id" value="<?= $data->id ?>">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">ISBN</label>
  <input type="text" name="isbn" value="<?= $data->isbn ?>" class="form-control" id="exampleFormControlInput1" placeholder="ISBN">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="text" name="title" class="form-control" value="<?= $data->title ?>"  id="exampleFormControlInput1" placeholder="Title">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Synopsis</label>
  <input type="text" name="synopsis" class="form-control" value="<?= $data->synopsis ?>" id="exampleFormControlInput1" placeholder="Synopsis">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Author</label>
  <input type="text" name="author" class="form-control" id="exampleFormControlInput1" value="<?= $data->author ?>" placeholder="Author">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Publisher</label>
  <input type="text" name="publisher" class="form-control" id="exampleFormControlInput1" value="<?= $data->publisher ?>" placeholder="Publisher">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Category</label>
  <input type="text" name="category" class="form-control" id="exampleFormControlInput1" value="<?= $data->category ?>" placeholder="Category">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Language</label>
  <input type="text" name="language" class="form-control" id="exampleFormControlInput1" value="<?= $data->language ?>" placeholder="Language">
</div>
<input type="submit" value="Submit">

    </form>