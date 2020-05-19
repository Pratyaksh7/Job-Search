<div class="jumbotron" style="background-color:black;">
    <div class="container-fluid ">
        <h1 style="color:white; font-family: Bell MT;">Job Listing</h1>
        <hr style="width:55px; border-top: 6px solid #f2d64d; margin: 0 0 15px;">
        
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="container pl-5">
            <h1 style="font-family: Bell MT;" class=" pt-5">Filter Search Results</h1>
                
            <?php echo form_open("opportunity/search_filter"); ?>
            <div class="row">
                    <div>
                    <b><a href="#collapse1" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse1" class="btn btn-link">Function</a></b>
                    </div>
                </div>

                <?php foreach($functions as $function): ?>
                <div class="row mx-5">    
                    <div id="collapse1">
                        <?= form_checkbox('search1[id]',"$function->id"); ?>
                         <?= $function->function; ?>                 
                    </div>
                </div>
                <?php endforeach; ?>

                <div class="row">
                    <div>
                    <b><a href="#collapse2" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse2" class="btn btn-link">Industry</a></b>
                    </div>
                </div>

                <?php foreach($industries as $industry): ?>
                <div class="row mx-5">    
                    <div id="collapse2">
                        <?= form_checkbox('search2[id]',"$industry->id"); ?>
                         <?= $industry->industry; ?>                 
                    </div>
                </div>
                <?php endforeach; ?>

                <div class="p-5">
                    <b><?= form_submit(['name'=>'filter','value'=>'SEARCH','class'=>'btn btn-warning px-4 py-2 font-weight-bold']) ?> </b>
                </div>
                <?= form_close(); ?>
        </div>
    </div>
    <div class="col-md-8 pt-5">
        <div class="container">
                   
            <?php foreach( $filtered_jobs as $filtered_job ):   ?>   
            <h4><?= anchor('opportunity/job_id/'.$filtered_job->job_id, $filtered_job->name,['class'=>' btn-link', 'style'=>'color: #428bca; font-family: Bell MT;']); ?></h4>

            <?= form_open("opportunity/submit_resumes/{$filtered_job->job_id}"); ?>
            <?= form_submit(['name'=>'submit','value'=>'APPLY NOW','class'=>'btn btn-warning']) ?>
            <!-- <button type="button" class="btn btn-warning">APPLY NOW</button> -->
            <?= form_close(); ?>
            <hr class="mr-5">
            <?php endforeach; ?>
                 
        </div>
    </div>
</div>