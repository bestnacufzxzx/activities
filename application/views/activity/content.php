<div class="container">
    <h3>บันทึกกิจกรรม</h3><br>
    <div class="">
        <div class="col-ms-12">
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="ขื่อกิจกรรม" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">ค้นหา</button>
                <a href="<?php echo base_url('activity/insert'); ?>" class="btn btn-info" type="button" id="button-addon2">เพิ่มกิจกรรม</a>
            </div>

        </div>
        </div>
    </div>
  
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">ชื่อกิจกรรม</th>
                    <th scope="col">วันที่ทำกิจกรรม</th>
                    <th scope="col">เวลา</th>
                    <th scope="col">สถานที่</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($activity_data as $index => $obj){?>
                    <tr>
                        <th scope="row"><?php echo $index+1 ?></th>
                        <td><?php echo $obj->activity_name; ?></td>
                        <td><?php echo change_date_format($obj->start_date).' - '.change_date_format($obj->end_date) ; ?></td>
                        <td>
                        <a href="<?php echo base_url('activity/update/'.$obj->activity_id); ?>" type="button" class="btn btn-warning">แก้ไข</a>
                        <a href="<?php echo base_url('activity/delete/'.$obj->activity_id); ?>" type="button" class="btn btn-danger"
                             onclick="return confirm('Are you sure you want to deledte this item');">ลบ</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>