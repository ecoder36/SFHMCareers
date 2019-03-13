
<?php

require_once('log/adminlogsession.php');

if($_SESSION['user_info_2'] != false  )
{

@require_once ('log/logsession.php'); 
@require_once('require/api/db.php');
@require_once('require/api/infoAPI.php');
@require_once('require/api/usersAPI.php');
$userinfo = users_get_by_id(@$_SESSION['user_info_2']->id);

   if(isset($_POST['site'])){

            $requestchek = info_get_by_region_zone_site($_POST['region'],$_POST['zone'],$_POST['site']);

            tinyf_db_close();
             $ucount = @count($requestchek) ;
           //  echo $ucount ;
          
                         
            if ($ucount != 0)
                   {
                       
                       
                       $ptype=$_POST['ptype'];$site=$_POST['site'];
                       $name=$_POST['name'];
                       $problem=$_POST['problem'];
                       $region=$_POST['region'];
                       $zone=$_POST['zone'];
                       
                       header("Location: ?error=123&id=$requestchek->id&site=$site&ptype=$ptype&name=$name&problem=$problem&region=$region&zone=$zone");
            		}  else 
            		
            		{

                @$name1 = $_FILES['file']['name']; @$tmp_name = $_FILES['file']['tmp_name']; @$type = $_FILES['file']['type']; @$size = $_FILES['file']['size']; $ext = pathinfo($name1, PATHINFO_EXTENSION);@$error = $_FILES['file']['error']; $uniqid = uniqid(); $file_name = $uniqid.'.'.$ext  ;
                if(move_uploaded_file($tmp_name, "file/".$file_name)){ $file = $file_name; } else {  $file = 'null' ; }
                
                 @$name2 = $_FILES['file2']['name']; @$tmp_name = $_FILES['file2']['tmp_name']; @$type = $_FILES['file2']['type']; @$size = $_FILES['file2']['size']; $ext2 = pathinfo($name2, PATHINFO_EXTENSION);@$error = $_FILES['file2']['error']; $uniqid = uniqid(); $file_name2 = $uniqid.'.'.$ext2  ;
                if(move_uploaded_file($tmp_name, "file/".$file_name2)){ $file2 = $file_name2; } else {  $file2 = 'null' ; }
                
                @$name3 = $_FILES['file3']['name']; @$tmp_name = $_FILES['file3']['tmp_name']; @$type = $_FILES['file3']['type']; @$size = $_FILES['file3']['size']; $ext3 = pathinfo($name3, PATHINFO_EXTENSION);@$error = $_FILES['file3']['error']; $uniqid = uniqid(); $file_name3 = $uniqid.'.'.$ext3  ;
                if(move_uploaded_file($tmp_name, "file/".$file_name3)){ $file3 = $file_name3; } else {  $file3 = 'null' ; }
                
                @$name4 = $_FILES['file4']['name']; @$tmp_name = $_FILES['file4']['tmp_name']; @$type = $_FILES['file4']['type']; @$size = $_FILES['file4']['size']; $ext4 = pathinfo($name4, PATHINFO_EXTENSION);@$error = $_FILES['file4']['error']; $uniqid = uniqid(); $file_name4 = $uniqid.'.'.$ext4  ;
                if(move_uploaded_file($tmp_name, "file/".$file_name4)){ $file4 = $file_name4; } else {  $file4 = 'null' ; }
                
                @$name5 = $_FILES['file5']['name']; @$tmp_name = $_FILES['file5']['tmp_name']; @$type = $_FILES['file5']['type']; @$size = $_FILES['file5']['size']; $ext5 = pathinfo($name5, PATHINFO_EXTENSION);@$error = $_FILES['file5']['error']; $uniqid = uniqid(); $file_name5 = $uniqid.'.'.$ext5  ;
                if(move_uploaded_file($tmp_name, "file/".$file_name5)){ $file5 = $file_name5; } else {  $file5 = 'null' ; }
                
                @$name6 = $_FILES['file6']['name']; @$tmp_name = $_FILES['file6']['tmp_name']; @$type = $_FILES['file6']['type']; @$size = $_FILES['file6']['size']; $ext6 = pathinfo($name6, PATHINFO_EXTENSION);@$error = $_FILES['file6']['error']; $uniqid = uniqid(); $file_name6 = $uniqid.'.'.$ext6  ;
                if(move_uploaded_file($tmp_name, "file/".$file_name6)){ $file6 = $file_name6; } else {  $file6 = 'null' ; }
                
                @$name7 = $_FILES['file7']['name']; @$tmp_name = $_FILES['file7']['tmp_name']; @$type = $_FILES['file7']['type']; @$size = $_FILES['file7']['size']; $ext7 = pathinfo($name7, PATHINFO_EXTENSION);@$error = $_FILES['file7']['error']; $uniqid = uniqid(); $file_name7 = $uniqid.'.'.$name7  ;
                if(move_uploaded_file($tmp_name, "file/".$file_name7)){ $file7 = $file_name7; } else {  $file7 = 'null' ; }
                
                @$name8 = $_FILES['file8']['name']; @$tmp_name = $_FILES['file8']['tmp_name']; @$type = $_FILES['file8']['type']; @$size = $_FILES['file8']['size']; $ext8 = pathinfo($name8, PATHINFO_EXTENSION);@$error = $_FILES['file8']['error']; $uniqid = uniqid(); $file_name8 = $uniqid.'.'.$ext8  ;
                if(move_uploaded_file($tmp_name, "file/".$file_name8)){ $file8 = $file_name8; } else {  $file8 = 'null' ; }
                
                @$name9 = $_FILES['file9']['name']; @$tmp_name = $_FILES['file9']['tmp_name']; @$type = $_FILES['file9']['type']; @$size = $_FILES['file9']['size']; $ext9 = pathinfo($name9, PATHINFO_EXTENSION);@$error = $_FILES['file9']['error']; $uniqid = uniqid(); $file_name9 = $uniqid.'.'.$ext9  ;
                if(move_uploaded_file($tmp_name, "file/".$file_name9)){ $file9 = $file_name9; } else {  $file9 = 'null' ; }
                
                @$name10 = $_FILES['file10']['name']; @$tmp_name = $_FILES['file10']['tmp_name']; @$type = $_FILES['file10']['type']; @$size = $_FILES['file10']['size']; $ext = pathinfo($name10, PATHINFO_EXTENSION); @$error = $_FILES['file10']['error']; $uniqid = uniqid(); $file_name10 = $uniqid.'.'.$ext10  ;
                if(move_uploaded_file($tmp_name, "file/".$file_name10)){ $file10 = $file_name10; } else {  $file10 = 'null' ; }
                
                
                
                
                
                
		       $result =  info_add($_POST['region'],$_POST['zone'],$_POST['site'],$_POST['letternumber'],$_POST['letterdate'],$_POST['sitename'],$_POST['btype'],$_POST['ficameras'],$_POST['micameras'],$_POST['fecameras'],$_POST['mecameras'],$_POST['dvr'],$_POST['nvr'],$_POST['pc'],$_POST['controld'],$_POST['screens'],$_POST['switch'],$_POST['ups'],$_POST['note'],$_POST['ename'],$file,$file2,$file3,$file4,$file5,$file6,$file7,$file8,$file9,$file10);
		       

		     //    echo mysql_insert_id();
		         $LastId = mysql_insert_id();
		        // echo $LastId;

		       //   die();
		       
                  //  die ($result);
                    if($result){
                        
                         file_add($LastId,$name1,$file).file_add($LastId,$name2,$file2).file_add($LastId,$name3,$file3).file_add($LastId,$name4,$file4).file_add($LastId,$name5,$file5).file_add($LastId,$name6,$file6).file_add($LastId,$name7,$file7).file_add($LastId,$name8,$file8).file_add($LastId,$name9,$file9).file_add($LastId,$name10,$file10);
                        
                    
                      
                      
                         header("Location: ?done=123");
                    }else{
                         header("Location: ?error2=123");
                    }
                     
             
            		}
   }
   
   
   
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT DISTINCT eregion FROM regions";
$results = $db_handle->runQuery($query);


?>

<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Form</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        
        <script src="require/js/jquery.min.js"></script>
        
        <!-- END PAGE LEVEL PLUGINS -->


<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "get_state.php",
	data:'country_id='+val,
	success: function(data){
		$("#state-list").html(data);
	}
	});
}

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>
<?php $arlink = "../../ar/cssystem/form.php" ?>
        <?php $newreq="active" ?>
        <?php require_once ("require/bheader.php") ; ?>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1 class="font-blue-dark"> <i class="icon-user"></i> <?php echo $_SESSION['user_info_2']->name ?>
                                <small></small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                             <!-- BEGIN THEME PANEL -->
                               <?php  // require_once ("require/themepanel.php") ; ?>
                            <!-- END THEME PANEL -->
                        </div>
                        <!-- END PAGE TOOLBAR -->
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                       
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN VALIDATION STATES-->
                                    <div class="portlet light portlet-fit portlet-form ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-settings font-dark"></i>
                                                <span class="caption-subject font-dark sbold uppercase">Request Form</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                             
                                            <!-- BEGIN FORM-->
                                            <form method="post" id="form_sample_3" class="form-horizontal" enctype="multipart/form-data">
                                                <div class="form-body">
                                                    <div class="alert alert-danger display-hide">
                                                        <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                                     <?php  if(isset($_GET['done'])){echo ' <div class="alert alert-success ">
                                                <button class="close" data-close="alert"></button><strong>Success! </strong> The request has been added successfully! </div>';}?>
                                                     <?php if(isset($_GET['error'])) {
                                            		echo '<div class="alert alert-danger"><button class="close" data-close="alert"></button><strong>There is error : This information on '.@$_GET['region'].'  '.@$_GET['zone'].'  '.@$_GET['site'].' is added before </strong></div>';
                                            		} ?>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Region
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <select class="form-control select2me basic" id="country-list" onChange="getState(this.value);" data-live-search="true" name="region">
                                                                
                                                                <option value="">Select Region</option>
                                                                <?php
foreach($results as $country) {
?>
<option value="<?php echo $country["eregion"]; ?>"><?php echo $country["eregion"]; ?></option>
<?php
}
?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                   

                                                    <div class="form-group select2">
                                                        <label class="control-label col-md-3">City&nbsp;&nbsp;<span class="required"> * </span></label>
                                                        <div class="col-md-4">
                                                            <select class="form-control select2me" id="state-list" name="zone">
                                                                <option value="">Select State</option>
                                                                
                                                                
                                                            </select>
                                                         
                                                        </div> 
                                                    </div>
                                                     
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Site<span class="required"> * </span></label>
                                                        <div class="col-md-4">
                                                            <input name="site" type="text" class="form-control" value="<?php echo @$_GET['site'] ?>" />
                                                            <span class="help-block">Example : ...  </span>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Letter Number<span class="required"> * </span></label>
                                                        <div class="col-md-4">
                                                            <input name="letternumber" type="text" class="form-control" value="<?php echo @$_GET['letternumber'] ?>" />
                                                            <span class="help-block"> </span>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Letter Date<span class="required"> * </span></label>
                                                        <div class="col-md-4">
                                                            <input name="letterdate" id="mask_date" placeholder="DD/MM/YYYY" type="text" class="form-control" value="<?php echo @$_GET['letterdate'] ?>" />
                                                            <span class="help-block">e.g 02/05/1438</span>
                                                            </div>
                                                    </div>
                                                    
                             
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Site Name<span class="required"> * </span></label>
                                                        <div class="col-md-4">
                                                            <input name="sitename" type="text" class="form-control" value="<?php echo @$_GET['sitename'] ?>" />
                                                            <span class="help-block"></span>
                                                            </div>
                                                    </div>
                                                    
                                                    
                                                   
                                                  
                                                    <div class="form-group form-md-radios">
                                                        <label class="col-md-3 control-label font-dark" for="form_control_1">Building Type<span class="required"> * </span></label>
                                                        <div class="col-md-9">
                                                            <div class="md-radio-inline">
                                                                <div class="md-radio">
                                                                    <input type="radio" id="checkbox1_8" name="btype" value="Governmental" class="md-radiobtn">
                                                                    <label for="checkbox1_8">
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span> Governmental </label>
                                                                </div>
                                                                <div class="md-radio">
                                                                    <input type="radio" id="checkbox1_9" name="btype" value="Rented" class="md-radiobtn">
                                                                    <label for="checkbox1_9">
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span> Rented </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Fixed Internal Cameras<span class="required"> * </span></label>
                                                        <div class="col-md-3">
                                                            <input name="ficameras" type="text" class="mask_number form-control" value="<?php echo @$_GET['ficameras'] ?>" />
                                                        </div>
                                                    </div>
                                     
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Moving Internal Cameras<span class="required"> * </span></label>
                                                        <div class="col-md-3">
                                                            <input name="micameras" type="text" id="mask_number2" class="form-control" value="<?php echo @$_GET['micameras'] ?>" /> </div>
                                                    </div>
                                               
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Fixed External Cameras<span class="required"> * </span></label>
                                                        <div class="col-md-3">
                                                            <input name="fecameras" type="text" class="mask_number form-control" value="<?php echo @$_GET['fecameras'] ?>" /> </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Moving External Cameras<span class="required"> * </span></label>
                                                        <div class="col-md-3">
                                                            <input name="mecameras" type="text" class="mask_number form-control" value="<?php echo @$_GET['mecameras'] ?>" /> </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="control-label col-md-3">DVR<span class="required"> * </span></label>
                                                        <div class="col-md-3">
                                                            <input name="dvr" type="text" class="mask_number form-control" value="<?php echo @$_GET['dvr'] ?>" /> </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="control-label col-md-3">NVR<span class="required"> * </span></label>
                                                        <div class="col-md-3">
                                                            <input name="nvr" type="text" class="mask_number form-control" value="<?php echo @$_GET['nvr'] ?>" /> </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="control-label col-md-3">PC<span class="required"> * </span></label>
                                                        <div class="col-md-3">
                                                            <input name="pc" type="text" class="mask_number form-control" value="<?php echo @$_GET['pc'] ?>" /> </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Workstation<span class="required"> * </span></label>
                                                        <div class="col-md-3">
                                                            <input name="controld" type="text" class="mask_number form-control" value="<?php echo @$_GET['controld'] ?>" /> </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Screens<span class="required"> * </span></label>
                                                        <div class="col-md-3">
                                                            <input name="screens" type="text" class="mask_number form-control" value="<?php echo @$_GET['screens'] ?>" /> </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Switch<span class="required"> * </span></label>
                                                        <div class="col-md-3">
                                                            <input name="switch" type="text" class="mask_number form-control" value="<?php echo @$_GET['switch'] ?>" /> </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">UPS<span class="required"> * </span></label>
                                                        <div class="col-md-3">
                                                            <input name="ups" type="text" class="mask_number form-control" value="<?php echo @$_GET['ups'] ?>" /> </div>
                                                    </div>
                                                    <script>
$(document).ready(function(){
     $("#add2").click(function(){
    	$("#input2").show();
        $("#add3").show();
         $("#add2").hide();
    });
    $("#add3").click(function(){
    	$("#input2").show();
        $("#input3").show();
        $("#add4").show();
       
        $("#add3").hide();$("#add2").hide();
    });
     $("#add4").click(function(){
        $("#input2").show();
        $("#input3").show();
        $("#input4").show();
        $("#add5").show();
         
        $("#add4").hide(); $("#add3").hide();$("#add2").hide();
    });
    $("#add5").click(function(){
        $("#input2").show();
        $("#input3").show();
        $("#input4").show();
        $("#input5").show();
        $("#add6").show();
         
        $("#add5").hide(); $("#add4").hide(); $("#add3").hide();$("#add2").hide();
    });
    $("#add6").click(function(){
        $("#input2").show();
        $("#input3").show();
        $("#input4").show();
        $("#input5").show();
        $("#input6").show();
        $("#add7").show();
         
         $("#add6").hide(); $("#add5").hide(); $("#add4").hide(); $("#add3").hide();$("#add2").hide();
    });
    $("#add7").click(function(){
        $("#input2").show();
        $("#input3").show();
        $("#input4").show();
        $("#input5").show();
        $("#input6").show();
        $("#input7").show();
        $("#add8").show();
         
        $("#add7").hide(); $("#add6").hide(); $("#add5").hide(); $("#add4").hide(); $("#add3").hide();$("#add2").hide();
    });
    
    
    
    
    $("#add8").click(function(){
        $("#input2").show();
        $("#input3").show();
        $("#input4").show();
        $("#input5").show();
        $("#input6").show();
        $("#input7").show();
        $("#input8").show();
        $("#add9").show();
     
         
         $("#add8").hide(); $("#add7").hide(); $("#add6").hide(); $("#add5").hide(); $("#add4").hide(); $("#add3").hide();$("#add2").hide();
    });
    
    $("#add9").click(function(){
        $("#input2").show();
        $("#input3").show();
        $("#input4").show();
        $("#input5").show();
        $("#input6").show();
        $("#input7").show();
        $("#input8").show();
        $("#input9").show();
        $("#add10").show();
         
        $("#add9").hide(); $("#add8").hide(); $("#add7").hide(); $("#add6").hide(); $("#add5").hide(); $("#add4").hide(); $("#add3").hide();$("#add2").hide();
    });
    
    $("#add10").click(function(){
        $("#input2").show();
        $("#input3").show();
        $("#input4").show();
        $("#input5").show();
        $("#input6").show();
        $("#input7").show();
        $("#input8").show();
        $("#input9").show();
        $("#input10").show();
      //  $("#limit").show();
         
        $("#add10").hide(); $("#add9").hide(); $("#add8").hide(); $("#add7").hide(); $("#add6").hide(); $("#add5").hide(); $("#add4").hide(); $("#add3").hide();$("#add2").hide();
    });
});
</script>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Attachment</label>
                                                        
                                                            
                                                        <div class="col-md-4">
                                                            <div class=" col-md-4 fileinput fileinput-new" data-provides="fileinput">
                                                                <span class="btn green btn-file">
                                                                    <span class="fileinput-new"> Select file </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="file"> </span>
                                                                <span class="fileinput-filename"> </span> &nbsp;
                                                                <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                            </div>
                                                            <div class="col-md-4 fileinput fileinput-new" data-provides="fileinput" id="input2" style="display: none;">
                                                                <span class="btn green btn-file">
                                                                    <span class="fileinput-new"> Select file </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="file2"> </span>
                                                                <span class="fileinput-filename"> </span> &nbsp;
                                                                <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                            </div>
                                                            <div class="col-md-4 fileinput fileinput-new" data-provides="fileinput" id="input3" style="display: none;">
                                                                <span class="btn green btn-file">
                                                                    <span class="fileinput-new"> Select file </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="file3"> </span>
                                                                <span class="fileinput-filename"> </span> &nbsp;
                                                                <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                            </div>
                                                            <div class="col-md-4 fileinput fileinput-new" data-provides="fileinput" id="input4" style="display: none;">
                                                                <span class="btn green btn-file">
                                                                    <span class="fileinput-new"> Select file </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="file4"> </span>
                                                                <span class="fileinput-filename"> </span> &nbsp;
                                                                <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                            </div>
                                                            <div class="col-md-4 fileinput fileinput-new" data-provides="fileinput" id="input5" style="display: none;">
                                                                <span class="btn green btn-file">
                                                                    <span class="fileinput-new"> Select file </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="file5"> </span>
                                                                <span class="fileinput-filename"> </span> &nbsp;
                                                                <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                            </div>
                                                            <div class="col-md-4 fileinput fileinput-new" data-provides="fileinput" id="input6" style="display: none;">
                                                                <span class="btn green btn-file">
                                                                    <span class="fileinput-new"> Select file </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="file6"> </span>
                                                                <span class="fileinput-filename"> </span> &nbsp;
                                                                <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                            </div>
                                                            <div class="col-md-4 fileinput fileinput-new" data-provides="fileinput" id="input7" style="display: none;">
                                                                <span class="btn green btn-file">
                                                                    <span class="fileinput-new"> Select file </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="file7"> </span>
                                                                <span class="fileinput-filename"> </span> &nbsp;
                                                                <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                            </div>
                                                            <div class="col-md-4 fileinput fileinput-new" data-provides="fileinput" id="input8" style="display: none;">
                                                                <span class="btn green btn-file">
                                                                    <span class="fileinput-new"> Select file </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="file8"> </span>
                                                                <span class="fileinput-filename"> </span> &nbsp;
                                                                <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                            </div>
                                                            <div class="col-md-4 fileinput fileinput-new" data-provides="fileinput" id="input9" style="display: none;">
                                                                <span class="btn green btn-file">
                                                                    <span class="fileinput-new"> Select file </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="file9"> </span>
                                                                <span class="fileinput-filename"> </span> &nbsp;
                                                                <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                            </div>
                                                            <div class="col-md-4 fileinput fileinput-new" data-provides="fileinput" id="input10" style="display: none;">
                                                                <span class="btn green btn-file">
                                                                    <span class="fileinput-new"> Select file </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="file10"> </span>
                                                                <span class="fileinput-filename"> </span> &nbsp;
                                                                <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                            </div>
                                                            
                                                             
                                                            
                                                            
                                                             <!--<p id="limit" hidden>7 input limit</p>-->
                                                        </div>
                                                        <div class="col-md-4">
                                                            
                                                            <button class="col-md-4 btn green" id="add2" type="button">add more <i class="fa fa-plus"></i></button> 
                                                            <button class="col-md-4 btn green" id="add3" type="button" style="display: none;">add more <i class="fa fa-plus"></i></button> 
                                                            <button class="col-md-4 btn green" id="add4" type="button" style="display: none;">add more <i class="fa fa-plus"></i></button> 
                                                            <button class="col-md-4 btn green" id="add5" type="button" style="display: none;">add more <i class="fa fa-plus"></i></button> 
                                                            <button class="col-md-4 btn green" id="add6" type="button" style="display: none;">add more <i class="fa fa-plus"></i></button> 
                                                            <button class="col-md-4 btn green" id="add7" type="button" style="display: none;">add more <i class="fa fa-plus"></i></button>
                                                            <button class="col-md-4 btn green" id="add8" type="button" style="display: none;">add more <i class="fa fa-plus"></i></button> 
                                                            <button class="col-md-4 btn green" id="add9" type="button" style="display: none;">add more <i class="fa fa-plus"></i></button> 
                                                            <button class="col-md-4 btn green" id="add10" type="button" style="display: none;">add more <i class="fa fa-plus"></i></button>
                                                        </div>
   
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="control-label col-md-3">Note<span class="required">  </span></label>
                                                        <div class="col-md-3">
                                                            <textarea placeholder="note:This textarea has a limit of 225 characters." maxlength="225" type="text" rows="5" name="note" class="form-control" ></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                 
                                                    <input type="hidden" name="ename" data-required="1" class="form-control" value="<?php echo $userinfo->id ?>" />
                                                    
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn yellow">Submit</button>
                                                            <button type="reset" class="btn help" value="Reset" onclick="return window.location.href = 'form.php'">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END FORM-->
                                        </div>
                                        <!-- END VALIDATION STATES-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <?php require_once ("require/footer.php") ; ?>
        <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
           
        <script src="require/js/jquery.inputmask.bundle.js" type="text/javascript"></script>
        
 
        
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="./../assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="require/js/form.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>

<?php }
if($_SESSION['user_info_2'] == false ){
	header("Location: login.php?error=r");
}
?>