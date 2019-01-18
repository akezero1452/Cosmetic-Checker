<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['cosid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <center><h4 class="modal-title" id="myModalLabel">ลบข้อมูล</h4></center>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from llegalcosmetic where cosid='".$row['cosid']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>ชื่อผลิตภัณฑ์: <strong><?php echo $drow['cosname']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="icon-remove"></span> ยกเลิก</button>
                    <a href="delete.php?id=<?php echo $row['cosid']; ?>" class="btn btn-danger"><span class="icon-trash"></span> ลบ</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['cosid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   
                    <center><h4 class="modal-title" id="myModalLabel">แก้ไขข้อมูล</h4></center>
					 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from llegalcosmetic where cosid='".$row['cosid']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				
			
				<form method="POST" action="edit.php?id=<?php echo $erow['cosid']; ?>" enctype="multipart/form-data" >
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">ชื่อผลิตผลิตภัณฑ์:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="cosname" class="form-control" value="<?php echo $erow['cosname']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">ผู้ผลิต:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="cosmanufactured" class="form-control" value="<?php echo $erow['cosmanufactured']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">สารอันตราย:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="cosdetail" class="form-control" value="<?php echo $erow['cosdetail']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">ประเภท:</label>
						</div>
						<div class="col-lg-10">
							<select name="costype" id="type" class="btn btn-light">
								<option value="สั่งห้ามซื้อ">สั่งห้ามซื้อ</option>
								<option value="มีสารอันตรายต้องห้าม">มีสารอันตรายต้องห้าม</option>
							</select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">ตราโลโก้:</label>
						</div>
						<div class="col-lg-10">
							<input type="file" name="image" id="image" accept="image/*">
						</div>
						</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="icon-remove"></span> ยกเลิก</button>
                    <button type="submit" class="btn btn-warning"><span class="icon-save"></span> บันทึก</button>
                </div>
				</form>
				
            </div>
        </div>
    </div>
<!-- /.modal -->