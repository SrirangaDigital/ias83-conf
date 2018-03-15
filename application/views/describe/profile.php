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
            <p class="affiliation"><?=$data->speaker->affiliation?></p>
            
            <div class="row">
                <div class="col-md-9 col-xs-12 clear-paddings">
                    <p class="biodata"><?=$data->speaker->biodata?></p>
                </div>
                <div class="col-md-3 col-xs-12 clear-paddings">
                    <img src="<?=$data->speaker->photoUrl?>" class="profile-thumb img-responsive" alt="<?= $data->speaker->name ?>" />
                </div>
            </div>
            <div class="talk">
                <p class="type"><?=$data->talk->session?></p>
                <p class="affiliation"><?=$data->talk->chairperson?></p>
                <p class="title">
                    <?= $data->talk->title ?>
<?php if(isset($data->externalLink->presentation)) { ?>
                    <span class="presentation">
                        <a target="_blank" title="Click here to see the presentation" href="<?=$data->externalLink->presentation?>"><i class="fa fa-paperclip"></i> View Presentation</a>
                    </span>
<?php } ?>
                </p>
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
