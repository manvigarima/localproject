<?php 
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
}

global $wpdb; ?>
<div class="bs-docs-example tooltip-demo" style="background-color: #FFFFFF;">
<div style="background:#C3D9FF; margin-bottom:10px; padding-left:10px;">
  <h3><?php _e("Manage Appointments", "appointzilla"); ?></h3>
</div>
<form action="" method="post" name="manage-appointments">
    <table width="100%" border="0" class="table">
        <tr>
            <td>
                <div style="float:left;">
                    <select name="filtername">
                        <option value="All" <?php if(isset($_POST['filtername']) == 'All') echo "selected"; ?>><?php _e("All Appointments", "appointzilla"); ?></option>
                        <option value="pending" <?php if(isset($_POST['filtername']) == 'pending') echo "selected"; ?>><?php _e("Pending Appointments", "appointzilla"); ?></option>
                        <option value="approved" <?php if(isset($_POST['filtername']) == 'approved') echo "selected"; ?>><?php _e("Apporved Appointments", "appointzilla"); ?></option>
                        <option value="cancelled" <?php if(isset($_POST['filtername']) == 'cancelled') echo "selected"; ?>><?php _e("Cancelled Appointments", "appointzilla"); ?></option>
                        <option value="done" <?php if(isset($_POST['filtername']) == 'done') echo "selected"; ?>><?php _e("Completed Appointments", "appointzilla"); ?></option>
                        <option value="today" <?php if(isset($_POST['filtername']) == 'today') echo "selected"; ?>><?php _e("Today's Appointments", "appointzilla"); ?></option>
                    </select>
                </div>&nbsp;<button id="filter" class="btn btn-small btn-info" type="submit" name="filter"><i class="icon-th-list icon-white"></i> <?php _e("Filter Appointments", "appointzilla"); ?></button>&nbsp;<a href="#" rel="tooltip" title="<?php _e("Filter Appointments", "appointzilla"); ?>"><i class="icon-question-sign"></i></a>
            </td>
        </tr>
    </table>
</form>
<?php

    $NoOfRow = 10;
    $Offset = 0;
    $FilterData = 'All';
    $PageNo = 1;
    // pagination start with page no = 1 when filter
    if(!isset($_POST['filter'])) {
        if(!empty($_GET['pageno'])){
            $PageNo = $_GET['pageno'];
            $Offset = ($PageNo-1)*$NoOfRow;
        }
    }

    if(isset($_POST['filter'])) {
        global $wpdb;
        $AppointmentTableName = $wpdb->prefix . "ap_appointments";
        $FilterData = $_POST['filtername'];

        //if filter by service n staff
        $underscore_pos = stripos($FilterData, '-');
        $filter_by = substr($FilterData, 0, $underscore_pos);

      
        if($FilterData =='today') {
            $today_date = date('Y-m-d');  // first time pagination data and total page like 1 2 3 only today
            $AllAppointments = $wpdb->get_results("select * from `$AppointmentTableName` WHERE `date` ='$today_date' ORDER BY `date` DESC limit $Offset, $NoOfRow ");
            $cat=$wpdb->get_results("select *  from `$AppointmentTableName` WHERE `date` ='$today_date' ORDER BY `date` DESC");
        }

        if($FilterData =='pending') {
            $AllAppointments = $wpdb->get_results("select * from `$AppointmentTableName` WHERE `status` ='pending' ORDER BY `date` DESC limit $Offset,$NoOfRow");
            $cat = $wpdb->get_results("select *  from `$AppointmentTableName` WHERE `status` ='pending' ORDER BY `date` DESC");
        }

        if($FilterData =='approved') {
            $AllAppointments = $wpdb->get_results("select * from `$AppointmentTableName` WHERE `status` ='approved' ORDER BY `date` DESC limit $Offset,$NoOfRow");
            $cat = $wpdb->get_results("select *  from `$AppointmentTableName` WHERE `status` ='approved' ORDER BY `date` DESC");
        }

        if($FilterData =='cancelled') {
            $AllAppointments = $wpdb->get_results("select * from `$AppointmentTableName` WHERE `status` ='cancelled' ORDER BY `date` DESC limit $Offset,$NoOfRow");
            $cat = $wpdb->get_results("select *  from `$AppointmentTableName` WHERE `status` ='cancelled' ORDER BY `date` DESC");
        }

        if($FilterData =='done') {
            $AllAppointments = $wpdb->get_results("select * from `$AppointmentTableName` WHERE `status` ='done' ORDER BY `date` DESC limit $Offset,$NoOfRow");
            $cat = $wpdb->get_results("select *  from `$AppointmentTableName` WHERE `status` ='done' ORDER BY `date` DESC");
        }


       if($FilterData =='All') {
            //first time pagination data and total page like 1 2 3 only All appointment filter
            $table_name = $wpdb->prefix . "ap_appointments";
            $AllAppointments = $wpdb->get_results("select * from `$table_name` ORDER BY `date` DESC limit $Offset,$NoOfRow");
            $cat = $wpdb->get_results("select * from `$table_name` ORDER BY `date` DESC");
        }
    } else {

        // filter pagination with get filter
        if(isset($_GET['filtername'])) {
            global $wpdb;
            $AppointmentTableName = $wpdb->prefix . "ap_appointments";
            $FilterData = $_GET['filtername'];

            //if filter by service n staff
            $underscore_pos = stripos($FilterData, '-');
            $filter_by = substr($FilterData, 0, $underscore_pos);

            
            if($FilterData =='today') {
                $today_date = date('Y-m-d');
                $AllAppointments = $wpdb->get_results("select * from `$AppointmentTableName` WHERE `date` ='$today_date' ORDER BY `date` DESC limit $Offset,$NoOfRow");
                $cat = $wpdb->get_results("select *  from `$AppointmentTableName` WHERE `date` ='$today_date' ORDER BY `date` DESC");
            }

            if($FilterData =='pending') {
                $AllAppointments = $wpdb->get_results("select * from `$AppointmentTableName` WHERE `status` ='pending' ORDER BY `date` DESC limit $Offset,$NoOfRow");
                $cat = $wpdb->get_results("select *  from `$AppointmentTableName` WHERE `status` ='pending' ORDER BY `date` DESC");
            }

            if($FilterData =='approved') {
                $AllAppointments = $wpdb->get_results("select * from `$AppointmentTableName` WHERE `status` ='approved' ORDER BY `date` DESC limit $Offset,$NoOfRow");
                $cat = $wpdb->get_results("select *  from `$AppointmentTableName` WHERE `status` ='approved' ORDER BY `date` DESC");
            }

            if($FilterData =='cancelled') {
                $AllAppointments = $wpdb->get_results("select * from `$AppointmentTableName` WHERE `status` ='cancelled' ORDER BY `date` DESC limit $Offset,$NoOfRow");
                $cat = $wpdb->get_results("select *  from `$AppointmentTableName` WHERE `status` ='cancelled' ORDER BY `date` DESC");
            }

            if($FilterData =='done') {
                $AllAppointments = $wpdb->get_results("select * from `$AppointmentTableName` WHERE `status` ='done' ORDER BY `date` DESC limit $Offset,$NoOfRow");
                $cat = $wpdb->get_results("select *  from `$AppointmentTableName` WHERE `status` ='done' ORDER BY `date` DESC");
            }


            //pagination get value
            if($FilterData =='All') {
                $AllAppointments = $wpdb->get_results("select * from `$AppointmentTableName` ORDER BY `date` DESC limit $Offset,$NoOfRow");
                $cat = $wpdb->get_results("select *  from `$AppointmentTableName` ORDER BY `date` DESC");
            }
        } else {
            //all appointment with pagination
            global $wpdb;
            $AppointmentTableName = $wpdb->prefix . "ap_appointments";
            $AllAppointments = $wpdb->get_results("select * from `$AppointmentTableName` ORDER BY `date` DESC limit $Offset, $NoOfRow");
            $cat = $wpdb->get_results("select *  from `$AppointmentTableName` ORDER BY `date` DESC");
        }
    }?>
<form method="post" name="manage-appointments">
    <table width="" border="0" class="table table-hover">
        <tr>
            <th scope="col"><?php _e("No.", "appointzilla"); ?></th>
            <th scope="col"><?php _e("Name", "appointzilla"); ?></th>
            <th scope="col"><?php _e("Date", "appointzilla"); ?></th>
            <th scope="col"><?php _e("Time", "appointzilla"); ?></th>
            <th scope="col"><?php _e("Service", "appointzilla"); ?></th>
            <th scope="col"><?php _e("Status", "appointzilla"); ?></th>
            <th scope="col"><?php _e("Action", "appointzilla"); ?></th>
            <th scope="col" style="text-align: center;"><a data-placement="left" rel="tooltip" title="<?php _e("Select All", "appointzilla"); ?>" ><input type="checkbox" id="checkbox" name="checkbox[]" value="0" /></a></th>
        </tr>
        <?php
        //get all category list
        $i = 1;
        if($AllAppointments) {
            foreach($AllAppointments as $Appointment) { ?>
        <tr>
            <td><em><?php echo $i; ?></em></td>
            <td><em><?php echo ucwords($Appointment->name); ?> <br> (<?php echo $Appointment->email; ?>)</em></td>
            <td>
                <em><?php echo date("d-m-Y", strtotime($Appointment->date)); ?></em>
            </td>
            <td><em><?php echo date("h:ia", strtotime($Appointment->start_time))." - ".date("h:ia", strtotime($Appointment->end_time)); ?></em></td>
            <td>
                <em>
                    <?php
                    $AppId = $Appointment->service_id;
                    $ServiceTable = $wpdb->prefix . "ap_services";
                    $Service = $wpdb->get_row($wpdb->prepare("SELECT * FROM `$ServiceTable` WHERE `id` = %s",$AppId));
                    if(count($Service)) {
                        echo ucfirst($Service->name);
                    }
                    ?>
                </em>
            </td>
            <td><em><?php echo ucfirst($Appointment->status); ?></em></td>
            <td>
                <a href="?page=update-appointment&viewid=<?php if(isset($Appointment->id)) { echo $Appointment->id; } ?>" title="<?php _e("View", "appointzilla"); ?>" rel="tooltip"><i class="icon-eye-open"></i></a>&nbsp;
                <a href="?page=update-appointment&updateid=<?php if(isset($Appointment->id)) { echo $Appointment->id; } ?>" title="<?php _e("Update", "appointzilla"); ?>" rel="tooltip"><i class="icon-pencil"></i></a>&nbsp;
                <a href="?page=manage-appointments&delete=<?php if(isset($Appointment->id)) { echo $Appointment->id; } ?>" rel="tooltip" title="<?php _e("Delete", "appointzilla"); ?>" onclick="return confirm('<?php _e("Do you want to delete this appointment?", "appointzilla"); ?>')"><i class="icon-remove" ></i>
            </td>
            <td style="text-align: center;"><a rel="tooltip" data-placement="left" title="<?php _e("Select", "appointzilla"); ?>"><input type="checkbox" id="checkbox" name="checkbox[]" value="<?php if(isset($Appointment->id)) { echo esc_attr($Appointment->id); } ?>" /></a></td>
        </tr>
        <?php $i++; }   ?>
        <tr>
           
            
             <td colspan="7">
                    <ul id="pagination-flickr" style="border:1px #CCCCCC;">
                        <li><a href="?page=manage-appointments&pageno=1&filtername=<?php echo $FilterData; ?>" style="border:none" ><?php _e('First','appointzilla'); ?> </a> </li>
                        <li>
                            <a href="#" style="border:none"><<</a>
                        </li>
                        <?php // pagination list items
                        if(isset($_GET['pageno'])) { $pgno = $_GET['pageno']; } else { $pgno = 1; }
                        $catrow = count($cat);
                        $page = ceil($catrow/$NoOfRow);
                        for($i=1; $i<=$page; $i++){ ?>
                        
                            <li>
                                <a href="?page=manage-appointments&pageno=<?php echo $i?>&filtername=<?php echo $FilterData; ?>" <?php if($pgno == $i ) echo "class='active'"; else echo "class=''"; ?> ><?php echo $i; ?> </a>
                            </li>
                        <?php } ?>
                        <li>
                            <a href="#" style="border:none">>></a>
                        </li>
                        <li>
                            <a href="?page=manage-appointments&pageno=<?php echo $i-1 ?>&filtername=<?php echo $FilterData; ?>" style="border:none"><?php _e('Last','appointzilla'); ?></a>
                        </li>
                    </ul>
                </td>
            <td style="text-align: center;"><button name="deleteall" class="btn btn-danger" type="submit" id="deleteall" onclick="return confirm('<?php _e("Do you want to delete selected appointments?", "appointzilla"); ?>')"><i class="icon-trash icon-white"></i> <?php _e("Delete", "appointzilla"); ?></button></td>
        </tr>
        <?php } else { ?>
        <tr >
            <td colspan="8" class="alert"><strong><?php _e("Sorry No Appointments", "appointzilla"); ?></strong></td>
        </tr>
        <?php } ?>
    </table>
</form>
<style type="text/css">
.error{  color:#FF0000; }
#pagination-flickr a{
    font-size: 14px;
    font-weight: bold;
}
ul{border:0; margin:0; padding:0;}

#pagination-flickr li{
    border:0; margin:0; padding:0;
    font-size:11px;
    list-style:none;
}
#pagination-flickr a{
    border:solid 1px #C3D9FF;
    margin-right:5px;
}
#pagination-flickr .previous-off,
#pagination-flickr .next-off {
    color:#666666;
    display:block;
    float:left;
    font-weight:bold;
    padding:3px 4px;
}
#pagination-flickr .next a,
#pagination-flickr .previous a {
    font-weight:bold;
    border:solid 1px #FFFFFF;
}
#pagination-flickr .active{
    color:#ff0084;
    background:#C3D9FF;
    font-weight:bold;
    display:block;
    float:left;
    padding:4px 6px;
}
#pagination-flickr a:link,
#pagination-flickr a:visited {
    color:#0063e3;
    display:block;
    float:left;
    padding:3px 6px;
    text-decoration:none;
}
#pagination-flickr a:hover{
    border:solid 1px #666666;
}


/*#pagination-flickr li :first-child {
  border: none;
}
#pagination-flickr li :last-child {
  border: none;
}*/

#pagination-digg {
    background:#FFFFFF;
    color:#2e6ab1;
    font-weight:bold;
    padding:6px;
    width:auto;
    border: 0px solid #6699FF;
}

#pagination-digg .page_link  {
    border:solid 1px #2e6ab1;
    color:#888888;
    font-weight:bold;
    margin-right:2px;
    padding:3px 4px;
}
</style>

<script type="text/javascript">
jQuery(document).ready(function (){
    jQuery('#checkbox').click(function(){
        if(jQuery('#checkbox').is(':checked')) {
            jQuery(":checkbox").prop("checked", true);
        } else {
            jQuery(":checkbox").prop("checked", false);
        }
    });
});
</script>

<?php
//delete appointment
if(isset($_GET['delete'])) {
    $DeleteId = intval( $_GET['delete'] );
    if($DeleteId){
        $AppointmentTable = $wpdb->prefix . "ap_appointments";
        $wpdb->query($wpdb->prepare("DELETE FROM `$AppointmentTable` WHERE `id` = %s;",$DeleteId));
		
        echo "<script>alert('". __('Appointment deleted.', 'appointzilla') ."')</script>";
        echo "<script>location.href='?page=manage-appointments';</script>";
    }
}

// delete all selected appointment with checkbox
if(isset($_POST['deleteall'])) {
    if(isset($_POST['checkbox'])) {
        $AppointmentTable = $wpdb->prefix . "ap_appointments";
        for($i=0; $i<=count($_POST['checkbox'])-1; $i++) {
            $DeleteId = intval( $_POST['checkbox'][$i] );
            $wpdb->query($wpdb->prepare("DELETE FROM `$AppointmentTable` WHERE `id` = %s;",$DeleteId));
        }
        echo "<script>alert('". __('Selected appointments successfully deleted.', 'appointzilla') ."')</script>";
        echo "<script>location.href='?page=manage-appointments';</script>";
    } else {
        echo "<script>alert('". __('Please select any appointment.', 'appointzilla') ."')</script>";
    }
}
?>
</div>