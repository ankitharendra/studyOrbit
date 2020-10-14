<?php include_once "header.php";?>
<div class="container">
    <div class="row">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Image</td>
                    <td>Sonu</td>
                    <td>
                    <button type="button" class="btn btn-secondary">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row my-1">
        <button type="button" class="btn btn-outline-primary" id="add_artist" name="add_artist" data-toggle="modal" data-target="#add_artist_modal">Add New</button>
    </div>
    <div class="modal fade" id="add_artist_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">Add Artist</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidder="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <H1>Under Construction...</H1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "footer.php";?>