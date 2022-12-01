<div class="container">
<a href="<?= newlibrary\app\core\Router::Url("/public/addmember") ?>" class="btn btn-success">tambah</a>
    <table class="table table-secondary">
        <tr>
  
            <th>No</th>
            <th>NIK</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Born place</th>
            <th>Born date</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Nationality</th>
            <th>is_active</th>
            <th colspan="2">Action</th>
        </tr>
        <?php 
        $no=1;
        foreach ($data as $row) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->nik ?></td>
                <td><?= $row->full_name ?></td>
                <td> <?= $row->addres ?></td>
                <td><?= $row->born_place ?></td>
                <td><?= $row->born_date ?></td>
                <td><?= $row->gender ?></td>
                <td><?= $row->country ?></td>
                <td><?= $row->nationality ?></td>
                <td><?= $row->is_active ?></td>
                <td><a href="<?= newlibrary\app\core\Router::Url("/public/updatemember/$row->id") ?>" class="btn btn-success">update</a></td>
                <td><form action="<?= newlibrary\app\core\Router::Url("/public/deletemember") ?>" method="post">
                <input type="hidden" name="id"value="<?= $row->id ?>"><input type="submit" class="btn btn-dark"  value="delete">
              </form></td>
            </tr>
        <?php } ?>
    </table>
</div>