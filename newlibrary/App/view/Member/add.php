<div class="container">
<div class="card p-4">
    <form action="<?= newlibrary\app\core\Router::Url("/public/postaddmember") ?>" method="POST">
    nik, fullname, phone, addres, born_place, born_date, gender, country, nationality, is_active
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">NIK</label>
  <input type="text" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="ISBN">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Address</label>
  <input type="text" name="addres" class="form-control" id="exampleFormControlInput1" placeholder="Title">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Fullname</label>
  <input type="text" name="fullname" class="form-control" id="exampleFormControlInput1" placeholder="Title">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Phone</label>
  <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="Synopsis">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Born Place</label>
  <input type="text" name="born_place" class="form-control" id="exampleFormControlInput1" placeholder="Synopsis">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Born Date</label>
  <input type="date" name="born_date" class="form-control" id="exampleFormControlInput1" placeholder="Author">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Gender</label>
  <select class="form-select form-select mb-3" name="gender" aria-label=".form-select-lg example">
  <option selected>Open this select menu</option>
  <option value="L">Male</option>
  <option value="P">Female</option>
</select>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Country</label>
  <input type="text" name="country" class="form-control" id="exampleFormControlInput1" placeholder="Category">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nationality</label>
  <input type="text" name="nationality" class="form-control" id="exampleFormControlInput1" placeholder="Language">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">IS_ACTIVE</label>
  <select class="form-select form-select mb-3" name="is_active" aria-label=".form-select-lg example">
  <option selected>Open this select menu</option>
  <option value="1" >Active</option>
  <option value="0">Inactive</option>
</select>
</div>
<input type="submit" value="Submit">

    </form>