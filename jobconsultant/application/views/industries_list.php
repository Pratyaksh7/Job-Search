<div class="jumbotron" style="background-color:black;">
    <div class="container-fluid ">
        <h1 style="color:white; font-family: Bell MT;">Find the Perfect Jobs</h1>
        <hr style="width:55px; border-top: 6px solid #f2d64d; margin: 0 0 15px;">
        
    </div>
</div>

<div class="container-fluid mx-auto px-5">
    <div class="jumbotron px-5">
        <div class="container-fluid px-5">
        <h2 style="font-family: Bell MT;">Jobs by Industry</h2>
            <div class="jumbotron" style="background-color:white;">
                <!-- <div class="row"> -->
                <ol> <?php foreach($lists2 as $list2):  ?>
                    <!-- <div class="col-md-4 p-4"> -->
                    
                       <li><a href="<?= base_url('opportunity/filter_industry/'.$list2->id); ?>"><?= $list2->industry; ?></a></li>
                       <hr style="background-color:yellow;">
                    <!-- </div> -->
                    
                    <?php endforeach; ?></ol>
                    <br>
                <!-- </div> -->
                        
            </div>
        </div>
    </div>
</div>