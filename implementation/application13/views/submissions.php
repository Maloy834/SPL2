



<!--<link type="text/css" href="/assets/assets/data4.css">-->
<style>

    .btn:hover
    {
        background-color:#ff00ff;
    }

    .submission_item{
        height: 50px;
        width: 100%;
        background: #6c757d;
        color: white;
    }

</style>

<?php $l=0;$i=0;
$lates = array();


foreach($submissions as $submission){ ?>

    <?php if($submission->date_time <= $due[0]->due){ ?>
    <div class="submission">
        <div class="submission_item" style="padding-left: 1%;padding-right: 1%">

            <div style="float: left; height: 100%; width: 33%;display: table">
              <p style="vertical-align: middle;display: table-cell">  <?php echo $submission->firstName." ".$submission->lastName." hare krishna"?></p>
            </div>

            <div style="float: left; height: 100%; width:33%;text-align: center; color: #9fcdff;display: table;">
                <p style="vertical-align: middle;display: table-cell"><?php $date = date_create($submission->date_time); echo date_format($date,"d-M-Y  g:i:s A "); ?></p>
            </div>

            <div style="float: left; height: 100%; width: 29%;text-align: center;display: table; color: #f6fff1">
                <p style="display: table-cell;vertical-align: middle"> <?php echo $submission->file_name ?> </p>
            </div>

            <div style="float: left;padding-top:1%; height: 100%; width: 4%;text-align: center;display: table; color: #f6fff1">
                <button class="btn glyphicon glyphicon-circle-arrow-down" style="text-align: right;display: table-cell; vertical-align: middle;  outline: none; background: none;border: none"></button>
            </div>


        </div>

    </div>

        <?php } else{ $lates[$l] = $submission;$l++; } ?>


    <div>
        <p>    </p>
    </div>
    <?php $i++; } ?>

    <?php if(sizeof($lates)>0){ ?>

<div class="submission">
    <div class="submission_item" style="padding-left: 1%;padding-right: 1%">
        <div  style="background: #6c757d; float: left; height: 100%; text-align: center; width: 100%;display: table">
            <p style="color: red; vertical-align: middle;display: table-cell">  Late Submissions</p>
        </div>
    </div>
</div>

    <?php }?>

  <p> </p>
    <?php foreach($lates as $submission){ ?>

    <div class="submission">
        <div class="submission_item" style="padding-left: 1%;padding-right: 1%">

            <div style="float: left; height: 100%; width: 33%;display: table">
                <p style="vertical-align: middle;display: table-cell">  <?php echo $submission->firstName." ".$submission->lastName." hare krishna"?></p>
            </div>

            <div style="float: left; height: 100%; width:33%;text-align: center; color: #9fcdff;display: table;">
                <p style="vertical-align: middle;display: table-cell"><?php $date = date_create($submission->date_time); echo date_format($date,"d-M-Y  g:i:s A "); ?></p>
            </div>

            <div style="float: left; height: 100%; width: 29%;text-align: center;display: table; color: #f6fff1">
                <p style="display: table-cell;vertical-align: middle"> <?php echo $submission->file_name ?> </p>
            </div>

            <div style="float: left;padding-top:1%; height: 100%; width: 4%;text-align: center;display: table; color: #f6fff1">
                <button class="btn glyphicon glyphicon-circle-arrow-down" style="text-align: right;display: table-cell; vertical-align: middle;  outline: none; background: none;border: none"></button>
            </div>

        </div>

    </div>

    <div>
        <p>    </p>
    </div>
    <?php } ?>
