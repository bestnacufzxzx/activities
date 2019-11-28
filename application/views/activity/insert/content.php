<div class="container">
    <h3>เพิ่มกิจกรรม</h3><br>
    <div class="row">
        <div class="col-md-12">
            <?php echo validation_errors();?>
            <?php echo form_open('activity/save',  'method= "POST"') ; ?>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>ชื่อกิจกรรม</label>
                    <input type="text" class="form-control" name="activity_name" placeholder="ชื่อกิจกรรม" value="<?php echo set_value('activity_name') ; ?>">
                </div>   
                <div class="col-md-3 form-group">
                    <label>วันที่เริ่มกิจกรรม</label>
                    <input type="text" id="start_date" class="form-control" name="start_date" placeholder="วันที่เริ่มกิจกรรม"  value="<?php echo set_value('start_date') ; ?>" required>
                </div> 
                <div class="col-md-3 form-group">
                    <label>วันที่สิ้นสุด</label>
                    <input type="text" id="end_date" class="form-control" name="end_date" placeholder="วันที่สิ้นสุด" value="<?php echo set_value('end_date') ; ?>" required>
                </div>                    
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">บันทึก</button>
                    <button type="button" class="btn btn-secondary">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
    