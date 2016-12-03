    
     <!-- Start PIC EDIT  -->
    <div id="pic_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title"> تحديث الصورة </h4>
                </div>
                <div class="modal-body">
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="row">
                            
                                
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-4">الصورة الشخصية </label>
                                                <div class="col-md-7">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <span class="btn green btn-file">
                                                            <span class="fileinput-new"> اختر الملف </span>
                                                            <span class="fileinput-exists"> تغيير </span>
                                                            <input required type="file" name="picatt"> </span>
                                                        <span class="fileinput-filename"> </span> &nbsp;
                                                        <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>        
                                    
                        
                     <input type="hidden" name="idforpic" class="form-control" value="<?php echo $rinfo->id ; ?>" />    
                         <input type="hidden" name="idnumber" class="form-control" value="<?php echo $rinfo->idnumber ; ?>" />    
                        
                            <div class="modal-footer">
                                <button type="submit" class="btn green btn-primary" >حفظ </button>
                                <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true"> إلغاء </button>
                            </div>
                                    
                       <!-- <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Submit</button>
                                    <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                </div>
                            </div>
                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- END PIC EDIT  -->
    
    
   <!-- START CV EDIT  -->
    <div id="cv_modal" class="modal fade" role="dialog" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title"> تحديث السيرة الذاتية </h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="row">
                                
                                    
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"> السيرة الذاتية </label>
                                                    <div class="col-md-7">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <span class="btn green btn-file">
                                                                <span class="fileinput-new"> اختر الملف </span>
                                                                <span class="fileinput-exists"> تغيير </span>
                                                                <input required type="file" name="cvatt"> </span>
                                                            <span class="fileinput-filename"> </span> &nbsp;
                                                            <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>        
                                        
                            
                         <input type="hidden" name="idforcv" class="form-control" value="<?php echo  $reducation->id ; ?>" />    
                             <input type="hidden" name="idnumber" class="form-control" value="<?php echo  $reducation->idnumber ; ?>" />    
                            
                                <div class="modal-footer">
                                    <button type="submit" class="btn green btn-primary" >حفظ </button>
                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">إلغاء </button>
                                </div>
                                        
                           <!-- <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">Submit</button>
                                        <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                    </div>
                                </div>
                            </div>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
 <!-- END CV EDIT  -->
 
  <!-- START mail EDIT  -->
    <div id="mail_modal" class="modal fade" role="dialog" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title"> تحديث الإيميل و الجوال </h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">    
                                <div class="form-group">
                                    <label class="control-label col-md-4">الايميل </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="mail" value="<?php echo  $rapp->email ; ?>"  />
                                        <span class="help-block"> </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">الجوال </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="phone" value="<?php echo  $rapp->mobile ; ?>"  />
                                        <span class="help-block"> </span>
                                    </div>
                                </div>
                         <input type="hidden" name="idformail" class="form-control" value="<?php echo  $rapp->id ; ?>" />    
                             <input type="hidden" name="idnumber" class="form-control" value="<?php echo  $rapp->idnumber ; ?>" />    
                            
                                <div class="modal-footer">
                                    <button type="submit" class="btn green btn-primary" >حفظ التغييرات </button>
                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true"> الغاء </button>
                                </div>
                                        
                           <!-- <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">Submit</button>
                                        <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                    </div>
                                </div>
                            </div>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
 <!-- END mail EDIT  -->
 
 <!-- START ID EDIT FORM -->
    <div id="idedit_modal" class="modal fade" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">معلومات الهوية </h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4"> رقم الهوية </label>
                                        <div class="col-md-7">
                                            <input type="text" readonly disabled class="form-control" name="idnumber" value="<?php echo $rid->idnumber ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4"> تاريخ الانتهاء </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" placeholder="DD-MM-YYYY" name="expire" value="<?php echo $rid->expire ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">الجنسية </label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="" class="form-control" name="nationality" value="<?php echo $rid->nationality ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">المدينة </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" placeholder="" name="city" value="<?php echo $rid->city ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label class="control-label col-md-4">الجنس </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="gender" value="<?php echo  $rid->gender ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4"> الحالة الاجتماعية </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="mstatus" value="<?php echo $rid->mstatus ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"> صورة الهوية </label>
                                                    <div class="col-md-7">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <span class="btn green btn-file">
                                                                <span class="fileinput-new"> اختر الملف </span>
                                                                <span class="fileinput-exists"> تغيير </span>
                                                                <input type="file" name="idfile"> </span>
                                                            <span class="fileinput-filename"> </span> &nbsp;
                                                            <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            
                         <input type="hidden" name="idnumber" class="form-control" value="<?php echo $rid->idnumber ; ?>" />    
                            <input type="hidden" name="idforid" class="form-control" value="<?php echo  $rid->id ; ?>" />   
                            
                                <div class="modal-footer">
                                    <button type="submit" class="btn green btn-primary" >حفظ </button>
                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true"> إلغاء </button>
                                </div>
                                        
                           <!-- <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">Submit</button>
                                        <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                    </div>
                                </div>
                            </div>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
 <!-- END ID EDIT FORM -->
 
  <!-- START Address EDIT FORM -->
    <div id="addressedit_modal" class="modal fade" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">العنوان</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                            
                                    <div class="form-group">
                                        <label class="control-label col-md-4">العنوان</label>
                                        <div class="col-md-7">
                                            <textarea type="text" class="form-control" name="address" value="<?php echo $rinfo->address ; ?>"><?php echo $rinfo->address ; ?></textarea>
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                
                                    <div class="form-group">
                                        <label class="control-label col-md-4">الرمز البريدي</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" placeholder="" name="zipcode" value="<?php echo $rinfo->zipcode ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">صندوق البريد</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="" class="form-control" name="pobox" value="<?php echo $rinfo->pobox ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">رابط تويتر</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" placeholder="" name="twitter" value="<?php echo $rinfo->twitter ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>   
                                    <div class="form-group">
                                        <label class="control-label col-md-4">رابط الفيسبوك </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" placeholder="" name="facebook" value="<?php echo $rinfo->facebook ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                     
                            
                         <input type="hidden" name="idnumber" class="form-control" value="<?php echo $rinfo->idnumber ; ?>" />    
                            <input type="hidden" name="idforrinfo" class="form-control" value="<?php echo  $rinfo->id ; ?>" />   
                            
                                <div class="modal-footer">
                                    <button type="submit" class="btn green btn-primary" >حفظ </button>
                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">إلغاء </button>
                                </div>
                                        
                           <!-- <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">Submit</button>
                                        <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                    </div>
                                </div>
                            </div>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
 <!-- END Address EDIT FORM -->
 
   <!-- START EDU EDIT FORM -->
    <div id="edu_modal" class="modal fade" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title"> التعليم </h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4"> اسم الجامعة </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="eduname" value="<?php echo $reducation->eduname ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4"> الشهادة العلمية </label>
                                        <div class="col-md-7">
                                            <select name="degree" id="country_list" class="country_list form-control">
                                                <option value="<?php echo $reducation->degree ; ?>"><?php echo $reducation->degree ; ?></option>
                                                 <option value="Bachelor">Bachelor</option>
                                                 <option value="Master">Master</option>
                                                 <option value="Ph.D.">Ph.D.</option>
                                                 <option value="Other">Other</option>
                                             </select>
                                           <!-- <input type="text" class="form-control" name="degree" value="<?php // echo $reducation->degree ; ?>" />-->
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">التخصص </label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="" class="form-control" name="major" value="<?php echo $reducation->major ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">المعدل </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" placeholder="مثال 3.55 من 4.00 أو 99% " name="grade" value="<?php echo $reducation->grade ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label class="control-label col-md-4"> دولة الجامعة </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="educuntry" value="<?php echo $reducation->educuntry ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">مدينة الجامعة </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="educity" value="<?php echo $reducation->educity ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                               </div>
                            </div>
                             <div class="row">
                                   <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4"> تاريخ التخرج  </label>
                                        <div class="col-md-7">
                                            <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                                <input required type="text" autocomplete="off" class="readonly form-control"  name="edudate" value="<?php echo $reducation->edudate ; ?>" >
                                                <span class="input-group-btn">
                                                    <button class="btn default" type="button">
                                                        <i class="fa fa-calendar"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"> الشهادة </label>
                                                    <div class="col-md-7">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <span class="btn green btn-file">
                                                                <span class="fileinput-new"> اختر الملف </span>
                                                                <span class="fileinput-exists"> تغيير </span>
                                                                <input type="file" name="cefile"> </span>
                                                            <span class="fileinput-filename"> </span> &nbsp;
                                                            <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-4"> السجل الاكاديمي </label>
                                                    <div class="col-md-7">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <span class="btn green btn-file">
                                                                <span class="fileinput-new"> اختر الملف </span>
                                                                <span class="fileinput-exists"> تغيير </span>
                                                                <input type="file" name="trfile"> </span>
                                                            <span class="fileinput-filename"> </span> &nbsp;
                                                            <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            
                         <input type="hidden" name="idnumber" class="form-control" value="<?php echo $reducation->idnumber ; ?>" />    
                            
                            
                                <div class="modal-footer">
                                    <button type="submit" class="btn green btn-primary" > حفظ </button>
                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true"> إلغاء </button>
                                </div>
                                        
                           <!-- <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">Submit</button>
                                        <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                    </div>
                                </div>
                            </div>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
 <!-- END EDU EDIT FORM -->
 

 <!-- START traning ADD FORM -->
    <div id="addtran_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title"> إضافة تدريب جديد </h4>
                </div>
                <div class="modal-body">
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                        
                                <div class="form-group">
                                    <label class="control-label col-md-4">اسم الدورة التدريبية </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="trainname"  />
                                        <span class="help-block"> </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4"> اسم المعهد </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="inname"  />
                                        <span class="help-block"> </span>
                                    </div>
                                </div>
                             
                              <div class="form-group">
                                    <label class="control-label col-md-4"> تاريخ التدريب </label>
                                   
                                     <div class="col-md-7">
                                        <div class="input-group input-large defaultrange_modal" >
                                            <input required name="traindate" type="text" autocomplete="off" class="readonly form-control" >
                                            <span class="input-group-btn">
                                                <button class="btn default date-range-toggle" type="button">
                                                    <i class="fa fa-calendar"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4"> الشهادة </label>
                                    <div class="col-md-7">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <span class="btn green btn-file">
                                                <span class="fileinput-new"> اختر الملف </span>
                                                <span class="fileinput-exists"> تغيير </span>
                                                <input type="file" name="trainfile"> </span>
                                            <span class="fileinput-filename"> </span> &nbsp;
                                            <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                        </div>
                                    </div>
                                </div>
                            
                     <input type="hidden" name="idnumber" class="form-control" value="<?php echo $reducation->idnumber ; ?>" />    
                        
                        
                            <div class="modal-footer">
                                <button type="submit" class="btn green btn-primary" >حفظ </button>
                                <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true"> إلغاء </button>
                            </div>
                                    
                       <!-- <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Submit</button>
                                    <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                </div>
                            </div>
                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- END traning ADD FORM -->

 <!-- START experiences ADD FORM -->
    <div id="adde_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title"> إضافة خبرة جديدة </h4>
                </div>
                <div class="modal-body">
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">إسم الشركة </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="companyname" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                    <label class="control-label col-md-4"> التاريخ</label>
                                   
                                     <div class="col-md-7">
                                       <div class="input-group defaultrange_modal">
                                            <input readonly name="edate" type="text" class="form-control" >
                                            <span class="input-group-btn">
                                                <button class="btn default date-range-toggle" type="button">
                                                    <i class="fa fa-calendar"></i>
                                                </button>
                                            </span></div>
                                        
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4"> المسمى الوظيفي </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="position" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4"> المدينة </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="location" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">حجم الشركة </label>
                                        <div class="col-md-7">
                                            <select name="csize" class="form-control">
                                                <option value=""></option>
                                                <option value="-100 Staff">-100 موظف</option>
                                                <option value="100 to 1000 Staff">100 الى 1000 موظف</option>
                                                <option value="1000 to 2000 Staff">1000 الى 2000 موظف</option>
                                                <option value="2000 to 5000 Staff">2000 الى 5000 موظف</option>
                                                <option value="+5000 Staff">+5000 موظف</option>
                                            </select>
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4"> مجال الشركة </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="cindustry" />
                                            <span class="help-block"> مثال : الصحة أو التعليم</span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                                 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">وصف العمل </label>
                                        <div class="col-md-7">
                                            <textarea type="text" class="form-control" name="workdesc" ></textarea>
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">مرفقات </label>
                                        <div class="col-md-7">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <span class="btn green btn-file">
                                                    <span class="fileinput-new"> اختر الملف </span>
                                                    <span class="fileinput-exists"> تغيير </span>
                                                    <input type="file" name="efile"> </span>
                                                <span class="fileinput-filename"> </span> &nbsp;
                                                <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                               
                               
                            
                     <input type="hidden" name="idnumber" class="form-control" value="<?php echo $reducation->idnumber ; ?>" />     
                        
                        
                            <div class="modal-footer">
                                <button type="submit" class="btn green btn-primary" > حفظ </button>
                                <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true"> إلغاء </button>
                            </div>
                                    
                       <!-- <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Submit</button>
                                    <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                </div>
                            </div>
                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- END experiences ADD FORM -->

 <!-- Start Certification ADD FORM -->
    <div id="cadd_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">الشهادة </h4>
                </div>
                <div class="modal-body">
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-md-4"> اسم الشهادة 
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-7">
                                <input required type="text" placeholder="" class="form-control" name="cname"  />
                                <span class="help-block"> </span>
                            </div>
                        </div>
                        
                         <div class="form-group">
                                                        <label class="control-label col-md-4"> تاريخ الشهادة <span class="required"> * </span></label>
                                                        <div class="col-md-7">
                                                            <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                                                <input required type="text" autocomplete="off" class="readonly form-control"  name="cdate" >
                                                                <span class="input-group-btn">
                                                                    <button class="btn default" type="button">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                            <!-- /input-group -->
                                                            <span class="help-block"> اختر التاريخ </span>
                                                        </div>
                                                    </div>
                        
                     <input type="hidden" name="idnumber" class="form-control" value="<?php echo $rapp->idnumber ; ?>" />    
                        
                                  
                                                                       
                        <div class="form-group">
                            <label class="control-label col-md-4"> صورة الشهادة </label>
                            <div class="col-md-7">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <span class="btn green btn-file">
                                        <span class="fileinput-new"> اختر الملف </span>
                                        <span class="fileinput-exists"> تغيير </span>
                                        <input type="file" name="file"> </span>
                                    <span class="fileinput-filename"> </span> &nbsp;
                                    <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                </div>
                            </div>
                        </div>
                                
                                  
                                
                            <div class="modal-footer">
                                <button type="submit" class="btn green btn-primary" > حفظ </button>
                                <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true"> إلغاء </button>
                            </div>
                              
                               
                                    
                       <!-- <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Submit</button>
                                    <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                </div>
                            </div>
                        </div>-->
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
     <!-- END Certification ADD FORM -->