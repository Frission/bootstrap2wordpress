<?php 
    $subscribe_text = get_post_meta(8, 'subscribe_text', true);
    $subscribe_button_text = get_post_meta(8, 'subscribe_button_text', true);
?>

<!-- Opt In Section -->
<section id="optin">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <p class="lead">
                        <?php echo $subscribe_text;?>
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $subscribe_button_text;?></button>
                    </div>
                </div>
            </div>
        </section>