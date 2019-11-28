<div class="container">
    <h3>แก้ไขบันทึกกิจกรรม</h3><br>

    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo base_url('activity/save') ; ?>" method="POST">
                <input type="hidden" name="activity_id" value="<?php echo $activity_data->activity_id ; ?>">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>ชื่อกิจกรรม</label>
                        <input type="text" class="form-control" name="activity_name" placeholder="ชื่อกิจกรรม" value = "<?php echo $activity_data->activity_name ; ?>">
                    </div>   
                    <div class="col-md-3 form-group">
                        <label>วันที่เริ่มกิจกรรม</label>
                        <input type="text"  class="form-control" name="start_date" placeholder="วันที่เริ่มกิจกรรม" value = "<?php echo $activity_data->start_date ; ?>">
                    </div> 
                    <div class="col-md-3 form-group">
                        <label>วันที่สิ้นสุด</label>
                        <input type="text" class="form-control" name="end_date"  placeholder="วันที่สิ้นสุด" value = "<?php echo $activity_data->end_date ; ?>">
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">บันทึก</button>
                        <button type="button" class="btn btn-secondary">ยกเลิก</button>
                    </div>
                </div>
            </form> 
        </div>
    </div>
    