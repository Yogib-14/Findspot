<div class="modal fade" id="deletetempat<?php echo $row['id_wisata']; ?>">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Delete Tempat Wisata</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h3 class="text-center"><?php echo $row['nama_tempat_wisata']; ?></h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="fa fa-remove"></span> Close</button>
                <a href="deletetempatproses.php?id_wisata=<?php echo $row['id_wisata']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Yes</a>
                </form>
            </div>
        </div>
    </div>
</div>