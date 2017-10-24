<div class="container">
    <div class="row">
        <!-- Column 1 -->
        <div class="col-md-12 text-center">
            <p>&nbsp;</p>    
        </div>
    </div>
</div>
<div id="grid" class="container gap-above">
    <div class="row">
        <div class="col-md-9 main">
            <h1><?= $data->speaker->name ?></h1>
            <img src="<?=$data->speaker->photoUrl?>" class="profile-thumb" alt="<?= $data->speaker->name ?>" />
            <p class="affiliation">
               <?= $data->speaker->affiliation ?>     
            </p>
            <p>
                <?= $data->speaker->biodata ?>
            </p>
            <div class="talk">
                <p class="type"><?=$data->talk->session?></p>
                <p class="affiliation"><?=$data->talk->chairperson?></p>
                <p class="title"><?= $data->talk->title ?></p>
                <p class="abstract">
                    <?= $data->talk->abstract ?>
                </p>
            </div>
        </div>
        <div class="col-md-3 sidebar">
<?php require_once('application/views/generalSidebar.php');?>
        </div>
    </div>
</div>
