<div class="jumbotron" style="background-color:black;">
    <div class="container-fluid ">
        <h1 style="color:white; font-family: Bell MT;">Job Details</h1>
        <hr style="width:55px; border-top: 6px solid #f2d64d; margin: 0 0 15px;">
        
    </div>
</div>

<div class="container">
    <div class="jumbotron">
        <h1 style="font-family: Bell MT;"><?= $jobs->name; ?></h1>
            <div class="row">
                <div class="col-md-6">
                    <p>Industry: <?= $industries->industry; ?> <br>Functional Area: <?= $functions->function; ?></p>
                </div>
                <div class="col-md-6">
                    <?= form_open("opportunity/submit_resumes/{$jobs->job_id}"); ?>
                    <?= form_submit(['name'=>'submit','value'=>'SUBMIT YOUR CV','class'=>'btn btn-warning px-4 offset-7 font-weight-bold']) ?>
                    <?= form_close(); ?>

                   <small class="offset-7 "> QUOTE JOB REF: <?= $jobs->job_id; ?>  </small>
                </div>
            </div>
        
    </div>
</div>

<div class="container">
    <div class="mx-3 pb-5">
        <h3 style="font-family: Bell MT;">Job Description</h3>
        <p><?= $jobs->description; ?></p>

        <h3 style="font-family: Bell MT;">Key Skills</h3>
        <p><?= $jobs->skills; ?></p>

        <h3 style="font-family: Bell MT;">Education</h3>
        <p><?= $jobs->education; ?></p>

        <?= form_open("opportunity/submit_resumes/{$jobs->job_id}"); ?>
         <?= form_submit(['name'=>'submit','value'=>'SUBMIT YOUR CV','class'=>'btn btn-warning px-4 font-weight-bold ']) ?>
         <?= form_close(); ?>
    </div>

    
    
</div>