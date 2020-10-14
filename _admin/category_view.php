<?php 
    require_once "header.php";
    require "Controllers/category_controller.php";
?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $iteration = 0;
                foreach($all_category as $row) {
                    $iteration++;
            ?>
                <tr>
                    <td><?= $iteration?></td>
                    <td><?php echo $row['category_name']?></td>
                    <td>
                         <button type="button" id="<?= $row['category_id']?>" name="<?= $row['category_id']?>" class="btn btn-danger btn-sm">Delete</button>
                        <button type="button" id="<?= $row['category_id']?>" name="<?= $row['category_id']?>" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php require_once "footer.php";?>