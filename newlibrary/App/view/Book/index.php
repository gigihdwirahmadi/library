<div class="container">
<a href="<?= newlibrary\app\core\Router::Url("/public/addbook") ?>" class="btn btn-success">tambah</a>
    <table class="table table-secondary">
        <tr>
  
            <th>No</th>
            <th>ISBN</th>
            <th>Title</th>
            <th>Synopsis</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Category</th>
            <th>Language</th>
            <th colspan="2" style="text-align: center;">Action</th>
        </tr>
        <?php 
        $no=1;
        foreach ($data as $row) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->isbn ?></td>
                <td><?= $row->title ?></td>
                <td> <?= $row->synopsis ?></td>
                <td><?= $row->author ?></td>
                <td><?= $row->publisher ?></td>
                <td><?= $row->category ?></td>
                <td><?= $row->language ?></td>
                <td style="text-align:right"><a href="<?= newlibrary\app\core\Router::Url("/public/updatebook/$row->id") ?>" class="btn btn-success">update</a></td>
                <td style="text-align: left;"><form action="<?= newlibrary\app\core\Router::Url("/public/deletebook") ?>" method="post">
                <input type="hidden" name="id"value="<?= $row->id ?>"><input type="submit" class="btn btn-dark"  value="delete">
              </form></td>
            </tr>
        <?php } ?>
    </table>
</div>