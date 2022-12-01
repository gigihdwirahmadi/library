<div class="container">
<a href="<?= newlibrary\app\core\Router::Url("/public/addsubscription") ?>" class="btn btn-success">tambah</a>
    <table class="table table-secondary">
   
        <tr>
            <th>No</th>
            <th>title</th>
            <th>Month</th>
            <th>price</th>
            <th>is_active</th>
            <th colspan="3" style="text-align: center;">Option</th>
        </tr>

        <?php 
        $no=1;
        foreach ($data as $row) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->title ?></td>
                <td><?= $row->month ?></td>
                <td> <?= $row->price ?></td>
                <td colspan="2"><?= $row->is_active ?></td>
                <td style="text-align:right"> <a href="<?= newlibrary\app\core\Router::Url("/public/updatesubscription/$row->id") ?>" class="btn btn-success">update</a></td>
                <td style="text-align: left;"><form action="<?= newlibrary\app\core\Router::Url("/public/deletesubscription") ?>" method="post">
                <input type="hidden" name="id"value="<?= $row->id ?>"><input type="submit" class="btn btn-dark"  value="delete">
              </form></td>
            </tr>
        <?php } ?>
    </table>
</div>