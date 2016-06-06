<?php
/**
 * Statistic output
 *
 * @var $outputs
 * @var $bSum
 * @var $bAnswer
 */
?>
<!-- _statisticsoutput_header -->
<div class="col-lg-6 sol-sm-12">
<table class='statisticstable table table-bordered'>
    <thead>
        <tr class='success'>
            <th colspan='4' align='center' style='text-align: center; '>
                <strong>
                    <?php echo sprintf(gT("Field summary for %s"),$outputs['qtitle']); ?>
                </strong>
            </th>
        </tr>
        <tr>
            <th colspan='4' align='center' style='text-align: center; '>
                <!-- question title -->
                <strong>
                    <?php echo $outputs['qquestion'];?>
                </strong>
            </th>
        </tr>
        <!-- width depend on how much items... -->
        <tr>
            <th width='' align='center' >
                <strong>
                    <?php eT("Answer");?>
                </strong>
            </th>

            <?php if ($bShowCount  = true): ?>
                <th width='' align='center' >
                    <strong><?php eT("Count"); ?></strong>
                </th>
            <?php endif;?>

            <?php if ($bShowPercentage  = true): ?>
                <th width='' align='center' >
                    <strong><?php eT("Percentage");?></strong>
                </th>
            <?php endif;?>

            <?php if($bSum): ?>
                <th width='' align='center' >
                    <strong>
                        <?php eT("Sum");?>
                    </strong>
                </th>
            <?php endif; ?>
        </tr>
    </thead>
<!-- end of _statisticsoutput_header -->
