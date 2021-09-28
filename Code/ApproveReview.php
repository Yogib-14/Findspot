<div class="modal fade" id="approvereview<?php echo $row['id_review']; ?>">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Approve Review</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h3 class="text-center"><?php echo "Nama Tempat Wisata: "; echo $row['nama_tempat_wisata']; ?></h3>
            </div>
            <div class="modal-body">
                <h3 class="text-center"><?php echo "Kebersihan: "; echo $row['kebersihan']; ?></h3>
            </div>
            <div class="modal-body">
                <h3 class="text-center"><?php echo "Harga: "; echo $row['harga']; ?></h3>
            </div>
            <div class="modal-body">
                <h3 class="text-center"><?php echo "Tempat Makan: "; echo $row['tempat_makan']; ?></h3>
            </div>
            <div class="modal-body">
                <h3 class="text-center"><?php echo "Akomodasi Transportasi: "; echo $row['akomodasi_transportasi']; ?></h3>
            </div>
            <div class="modal-body">
                <h3 class="text-center"><?php echo "Sightseeing: "; echo $row['sightseeing']; ?></h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="fa fa-remove"></span> Close</button>
                <a href="ApproveReviewProses.php?id_review=<?php echo $row['id_review']; ?>" class="btn btn-success"> Yes</a>
                </form>
            </div>
        </div>
    </div>
</div>