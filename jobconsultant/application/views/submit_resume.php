<div class="jumbotron" style="background-color:black;">
    <div class="container-fluid ">
        <h1 style="color:white; font-family: Bell MT;">Submit your CV</h1>
        <hr style="width:55px; border-top: 6px solid #f2d64d; margin: 0 0 15px;">
        
    </div>
</div>


<div class="container-fluid">
    <p style="font-family:Segoe UI; font-size:18px; margin:0 95px 50px 95px ;">Only a select few mandates being handled by us are posted on our website and other online platforms.
         A vast majority of jobs aren’t in the public domain. Be a part of our searchable centralized database 
         by sending us your details.</p>
    </div>


<div class="container-fluid">
   
    <div class="row" style=" margin:0 95px 50px 95px ;">
    
        <div class="col-md-7">
        <p>(*) All fields are mandatory</p>    
            <?= form_open_multipart("opportunity/store_resume/{$jobs->job_id}"); ?>
                <fieldset>
                <div class="form-group">
                    <?= form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Name*']); ?>
                    </div>

                    <div class="form-group">
                    <?= form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email ID*']); ?>
                    </div>

                    <div class="form-group">
                    <?= form_input(['name'=>'mobile','class'=>'form-control','placeholder'=>'Mobile No.*']); ?>
                    </div>

                    
                    <div class="form-group">
                    <?= form_input(['name'=>'company','class'=>'form-control','placeholder'=>'Company*']); ?>
                    </div>
                    
                    <div class="form-group">
                    <?= form_input(['name'=>'designation','class'=>'form-control','placeholder'=>'Designation*']); ?>
                    </div>

                    <div class="form-group">

                        <select class="form-control" name="function">

                            <?php 
                                foreach($functions as $function)
                                {
                                    echo '<option value="'.$function->function.'" >'.$function->function.'</option>';
                                }                               
                            ?>
                        </select>

                    </div>

                    <div class="form-group">

                        <select class="form-control" name="industry">

                            <?php 
                                foreach($industries as $industry)
                                {
                                    echo '<option value="'.$industry->industry.'" >'.$industry->industry.'</option>';
                                }                               
                            ?>
                        </select>

                    </div>

                    <div class="form-group">

                        <select class="form-control" name="location">

                            <?php 
                                foreach($locations as $location)
                                {
                                    echo '<option value="'.$location->name.'" '.set_select('location',$location->id,TRUE).'>'.$location->name.'</option>';
                                }                               
                            ?>
                        </select>
                        
                    </div>
                    
                    <div class="form-group">
                    <?= form_input(['name'=>'experience','class'=>'form-control','placeholder'=>'Experience(in years)*']); ?>
                    </div>
                    
                    <div class="form-group">
                    <?= form_input(['name'=>'salary','class'=>'form-control','placeholder'=>'Current/ Last Annual Salary (INR)*']); ?>
                    </div>

                    <div class="form-group">
                        <?php echo form_upload(['name'=>'resume', 'class'=>"form-control"]); ?>
                
                    </div>
                    
                        <?= form_submit(['name'=>'submit','class'=>'btn btn-warning','value'=>'SUBMIT']) ?>
                </fieldset>
            <?= form_close(); ?>
        </div>
    </div>

</div>        

<?php include_once('footer.php'); ?>