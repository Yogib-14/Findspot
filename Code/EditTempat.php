<div class="modal fade" id="edittempat<?php echo $row['id_wisata']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit Tempat Wisata</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="edittempatproses.php?idwisata=<?php echo $row['id_wisata']; ?>" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label">Nama Tempat Wisata:</label>
                            </div>
                            <div class="col-md-9">
                                <input style = "margin-top:15px; " type="text" class="form-control" value="<?php echo $row['nama_tempat_wisata']; ?>" name="namatempat">
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
                                    <option value="<?php echo $row['id_kota']; ?>"><?php echo $row['nama_kota']; ?></option>
                                    <?php
                                        $sql="SELECT * FROM tabel_kota WHERE id_kota != '".$row['id_kota']."'";
                                        $cquery=$connection->query($sql);

                                        while($crow=$cquery->fetch_array()){
                                            ?>
                                            <option value="<?php echo $crow['id_kota']; ?>"><?php echo $crow['nama_kota']; ?></option>
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
                                    <option value="<?php echo $row['id_kategori']; ?>"><?php echo $row['nama_kategori']; ?></option>
                                    <?php
                                        $sql="SELECT * FROM tabel_kategori WHERE id_kategori != '".$row['id_kategori']."'";
                                        $cquery=$connection->query($sql);

                                        while($crow=$cquery->fetch_array()){
                                            ?>
                                            <option value="<?php echo $crow['id_kategori']; ?>"><?php echo $crow['nama_kategori']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label style = "margin-top: 15px;" class="control-label">Link Maps:</label>
                            </div>
                            <div class="col-md-9">
                                <input style = "margin-top:15px; " type="text" class="form-control" value="<?php echo $row['gmaps']; ?>" name="maps">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="fa fa-remove"></span> Close</button>
                <button type="submit" class="btn btn-success"><span class="fa fa-edit"></span> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>