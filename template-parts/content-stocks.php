<?php
    $stocks_feature_image = get_field('stocks_feature_image');
    $stocks_section_title = get_field('stocks_section_title');
    $stocks_section_desc = get_field('stocks_section_description');
    $reason_1_title = get_field('reason_1_title');
    $reason_1_desc = get_field('reason_1_description');
    $reason_2_title = get_field('reason_2_title');
    $reason_2_desc = get_field('reason_2_description');
?>

<!-- Stocks Section -->
<section id="stocks">
            <div class="container">
                <div class="section-header">
                    <!-- check if feature image exists -->
                    <?php if(!empty($stocks_feature_image)) : ?>
                        <img src="<?php echo $stocks_feature_image['url']; ?>" alt="<?php echo $stocks_feature_image['alt']; ?>">
                    <?php endif;?>               
                    <h2><?php echo $stocks_section_title; ?></h2>
                </div>
                    <p class="lead"><?php echo $stocks_section_desc ?></p>
                <div class="row">
                    <div class="col-sm-6">
                        <h3><?php echo $reason_1_title ?></h3>
                        <p><?php echo $reason_1_desc ?></p>
                    </div>
                    <div class="col-sm-6">
                        <h3><?php echo $reason_2_title ?></h3>
                        <p><?php echo $reason_2_desc ?></p>
                    </div>
                </div>
            </div>
        </section>
