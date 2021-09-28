<div class="modal fade" id="addtempat">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambahkan Tempat Wisata Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="addtempatproses.php" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:1%;">
                                <label class="control-label">Nama Tempat Wisata:</label>
                            </div>
                            <div class="col-md-9">
                                <input style = "margin-top: 7%;" type="text" class="form-control" name="namatempat" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Kota:</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control" name="kota">
                                    <?php
                                        $sql="SELECT * FROM tabel_kota ORDER BY id_kota ASC";
                                        $query=$connection->query($sql);
                                        while($row=$query->fetch_array()){
                                            ?>
                                            <option value="<?php echo $row['id_kota']; ?>"><?php echo $row['nama_kota']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Kategori:</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control" name="kategori">
                                    <?php
                                        $sql="SELECT * FROM tabel_kategori ORDER BY id_kategori ASC";
                                        $query=$connection->query($sql);
                                        while($row=$query->fetch_array()){
                                            ?>
                                            <option value="<?php echo $row['id_kategori']; ?>"><?php echo $row['nama_kategori']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:1%;">
                                <label class="control-label">Link Maps:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="maps" required>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="fa fa-remove"></span> Close</button>
                <button type="submit" class="btn btn-primary"><span class="fa fa-floppy-o"></span> Save</button>
                </form>
            </div>
        </div>

    </div>

</div>
