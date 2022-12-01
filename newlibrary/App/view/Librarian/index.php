<div class="container">
<a href="<?= newlibrary\app\core\Router::Url("/public/addlibrarian") ?>" class="btn btn-success">tambah</a>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created_at</th>
            <th colspan="2">Option</th>
        </tr>
        <?php 
        $no=1;
        foreach ($data as $row) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->username ?></td>
                <td><?= $row->name ?></td>
                <td> <?= $row->email ?></td>
                <td><?= $row->created_at ?></td>
                <td><a href="<?= newlibrary\app\core\Router::Url("/public/updatelibrarian/$row->id") ?>" class="btn btn-success">update</a></td>
                <td><form action="<?= newlibrary\app\core\Router::Url("/public/deletelibrarian") ?>" method="post">
                <input type="hidden" name="id"value="<?= $row->id ?>"><input type="submit" class="btn btn-dark"  value="delete">
              </form></td>
            </tr>
        <?php } ?>
    </table>
</div>