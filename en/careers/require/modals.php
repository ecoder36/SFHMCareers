    
     <!-- Start PIC EDIT  -->
    <div id="pic_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title"> Pic update</h4>
                </div>
                <div class="modal-body">
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="row">
                            
                                
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-4">pic</label>
                                                <div class="col-md-7">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <span class="btn green btn-file">
                                                            <span class="fileinput-new"> Select file </span>
                                                            <span class="fileinput-exists"> Change </span>
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
                                <button type="submit" class="btn green btn-primary" >Save changes</button>
                                <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
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
                        <h4 class="modal-title"> CV update</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="row">
                                
                                    
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">CV</label>
                                                    <div class="col-md-7">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <span class="btn green btn-file">
                                                                <span class="fileinput-new"> Select file </span>
                                                                <span class="fileinput-exists"> Change </span>
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
                                    <button type="submit" class="btn green btn-primary" >Save changes</button>
                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
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
                        <h4 class="modal-title"> Mail & Phone update</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">    
                                <div class="form-group">
                                    <label class="control-label col-md-4">Mail</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="mail" value="<?php echo  $rapp->email ; ?>"  />
                                        <span class="help-block"> </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Phone</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="phone" value="<?php echo  $rapp->mobile ; ?>"  />
                                        <span class="help-block"> </span>
                                    </div>
                                </div>
                         <input type="hidden" name="idformail" class="form-control" value="<?php echo  $rapp->id ; ?>" />    
                             <input type="hidden" name="idnumber" class="form-control" value="<?php echo  $rapp->idnumber ; ?>" />    
                            
                                <div class="modal-footer">
                                    <button type="submit" class="btn green btn-primary" >Save changes</button>
                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
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
                        <h4 class="modal-title">ID Info</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">idnumber</label>
                                        <div class="col-md-7">
                                            <input type="text" readonly disabled class="form-control" name="idnumber" value="<?php echo $rid->idnumber ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">expire date</label>
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
                                        <label class="control-label col-md-4">nationality</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="" class="form-control" name="nationality" value="<?php echo $rid->nationality ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">city</label>
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
                                        <label class="control-label col-md-4">gender</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="gender" value="<?php echo  $rid->gender ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">mstatus</label>
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
                                                    <label class="control-label col-md-4">ID </label>
                                                    <div class="col-md-7">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <span class="btn green btn-file">
                                                                <span class="fileinput-new"> Select file </span>
                                                                <span class="fileinput-exists"> Change </span>
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
                                    <button type="submit" class="btn green btn-primary" >Save changes</button>
                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
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
                        <h4 class="modal-title">Address Info</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                            
                                    <div class="form-group">
                                        <label class="control-label col-md-4">address</label>
                                        <div class="col-md-7">
                                            <textarea type="text" class="form-control" name="address" value="<?php echo $rinfo->address ; ?>"><?php echo $rinfo->address ; ?></textarea>
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                
                                    <div class="form-group">
                                        <label class="control-label col-md-4">zipcode</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" placeholder="zipcode" name="zipcode" value="<?php echo $rinfo->zipcode ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">pobox</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="pobox" class="form-control" name="pobox" value="<?php echo $rinfo->pobox ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">twitter</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" placeholder="twitter link" name="twitter" value="<?php echo $rinfo->twitter ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>   
                                    <div class="form-group">
                                        <label class="control-label col-md-4">facebook</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" placeholder="facebook link" name="facebook" value="<?php echo $rinfo->facebook ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                     
                            
                         <input type="hidden" name="idnumber" class="form-control" value="<?php echo $rinfo->idnumber ; ?>" />    
                            <input type="hidden" name="idforrinfo" class="form-control" value="<?php echo  $rinfo->id ; ?>" />   
                            
                                <div class="modal-footer">
                                    <button type="submit" class="btn green btn-primary" >Save changes</button>
                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
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
                        <h4 class="modal-title">Education </h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">University Name</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="eduname" value="<?php echo $reducation->eduname ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">degree</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="degree" value="<?php echo $reducation->degree ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Major</label>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="" class="form-control" name="major" value="<?php echo $reducation->major ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">University Grade</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" placeholder="e.g 3.55 outof 5 OR 2.79 outof 4.00 OR 85.45%" name="grade" value="<?php echo $reducation->grade ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label class="control-label col-md-4">University Country</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="educuntry" value="<?php echo $reducation->educuntry ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">University City</label>
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
                                        <label class="control-label col-md-4">Graduation Date </label>
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
                                                    <label class="control-label col-md-4">Certification</label>
                                                    <div class="col-md-7">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <span class="btn green btn-file">
                                                                <span class="fileinput-new"> Select file </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="file" name="cefile"> </span>
                                                            <span class="fileinput-filename"> </span> &nbsp;
                                                            <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-4">BS transcript</label>
                                                    <div class="col-md-7">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <span class="btn green btn-file">
                                                                <span class="fileinput-new"> Select file </span>
                                                                <span class="fileinput-exists"> Change </span>
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
                                    <button type="submit" class="btn green btn-primary" >Save changes</button>
                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
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
                    <h4 class="modal-title">Add New traning</h4>
                </div>
                <div class="modal-body">
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                        
                                <div class="form-group">
                                    <label class="control-label col-md-4">Course Name</label>
                                    <div class="col-md-7">
                                        <input required type="text" class="form-control" name="trainname"  />
                                        <span class="help-block"> </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Institute Name</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="inname"  />
                                        <span class="help-block"> </span>
                                    </div>
                                </div>
                             
                                <div class="form-group">
                                    <label class="control-label col-md-4">traning Date </label>
                                   
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
                                    <label class="control-label col-md-4">Certification</label>
                                    <div class="col-md-7">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <span class="btn green btn-file">
                                                <span class="fileinput-new"> Select file </span>
                                                <span class="fileinput-exists"> Change </span>
                                                <input type="file" name="trainfile"> </span>
                                            <span class="fileinput-filename"> </span> &nbsp;
                                            <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                        </div>
                                    </div>
                                </div>
                            
                     <input type="hidden" name="idnumber" class="form-control" value="<?php echo $reducation->idnumber ; ?>" />    
                        
                        
                            <div class="modal-footer">
                                <button type="submit" class="btn green btn-primary" >Save changes</button>
                                <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
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
                    <h4 class="modal-title">Add New experience</h4>
                </div>
                <div class="modal-body">
                    <form action="" id="form_sample_3" class="form-horizontal" method="post" enctype="multipart/form-data">
                        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Company Name</label>
                                        <div class="col-md-7">
                                            <input required type="text" class="form-control" name="companyname" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                    <label class="control-label col-md-4">Date</label>
                                   
                                     <div class="col-md-7">
                                       <div class="input-group defaultrange_modal">
                                            <input required  name="edate" type="text" autocomplete="off" class="readonly form-control" >
                                            
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
                                        <label class="control-label col-md-4">position</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="position" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Company location</label>
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
                                        <label class="control-label col-md-4">Company size</label>
                                        <div class="col-md-7">
                                            
                                            <select name="csize" class="form-control">
                                                <option value=""></option>
                                                <option value="-100 Staff">-100 Staff</option>
                                                <option value="100 to 1000 Staff">100 to 1000 Staff</option>
                                                <option value="1000 to 2000 Staff">1000 to 2000 Staff</option>
                                                <option value="2000 to 5000 Staff">2000 to 5000 Staff</option>
                                                <option value="+5000 Staff">+5000 Staff</option>
                                            </select>
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Company Industry</label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="cindustry" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                                 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Work description</label>
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
                                        <label class="control-label col-md-4">Attachment</label>
                                        <div class="col-md-7">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <span class="btn green btn-file">
                                                    <span class="fileinput-new"> Select file </span>
                                                    <span class="fileinput-exists"> Change </span>
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
                                <button type="submit" class="btn green btn-primary" >Save changes</button>
                                <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
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
                    <h4 class="modal-title">Certification</h4>
                </div>
                <div class="modal-body">
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-md-4">Name
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-7">
                                <input required type="text" placeholder="Certification Name" class="form-control" name="cname"  />
                                <span class="help-block"> </span>
                            </div>
                        </div>
                       
                                                    <div class="form-group">
                                                        <label class="control-label col-md-4">Certification Date<span class="required"> * </span></label>
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
                                                            <span class="help-block"> select a date </span>
                                                        </div>
                                                    </div>
                        
                     <input type="hidden" name="idnumber" class="form-control" value="<?php echo $rapp->idnumber ; ?>" />    
                        
                                  
                                                                       
                        <div class="form-group">
                            <label class="control-label col-md-4">Certification Attachment</label>
                            <div class="col-md-7">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <span class="btn green btn-file">
                                        <span class="fileinput-new"> Select file </span>
                                        <span class="fileinput-exists"> Change </span>
                                        <input type="file" name="file"> </span>
                                    <span class="fileinput-filename"> </span> &nbsp;
                                    <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                </div>
                            </div>
                        </div>
                                
                            <div class="modal-footer">
                                <button type="submit" class="btn green btn-primary" >Save changes</button>
                                <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
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