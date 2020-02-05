<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package B2W
 */

?>

	

<?php wp_footer(); ?>

        <!-- Sign Up Section -->
        <section id="signup" data-type="background" data-speed="4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <h2>Are you ready to take your skills to the <strong>next level</strong>?</h2>
                        <p><a href="#" class="btn btn-success btn-lg btn-block" style="color: white;">Yes, sign me up!</a></p>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <p><a href="#"><img src="<?php bloginfo('stylesheet_directory')?>/images/logo.png" alt="Bootstrap To WordPress"></a></p>
                    </div>

                    <div class="col-sm-6">
                        <nav>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#">Home</a></li>
                                <li class="list-inline-item"><a href="#">Blog</a></li>
                                <li class="list-inline-item"><a href="#">Resources</a></li>
                                <li class="list-inline-item"><a href="#">Contact</a></li>
                                <li class="signup-link list-inline-item"><a href="#">Sign up now</a></li>
                            </ul>
                        </nav>
                    </div>
                    
                    <div class="col-sm-3">
                        <p class="pull-right">&copy; 2020 Fırat Yıldız</p>
                    </div>
                </div>               
            </div>

            <div class="container-fluid">
                <div class="row special-thanks">
                    <div class="col-sm-12">
                        <p>
                            Special thanks to Brad Hussey for the Bootstrap Theme Development Course!
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our mailing list!</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>                    
                    </div>
                    <div class="modal-body">
                        <p>Aliquam a tortor pretium, eleifend ex at, accumsan arcu. Pellentesque habitant morbi tristique 
                            senectus et netus et malesuada fames ac <em>turpis egestas.</em></p>
                        <form class="form-inline" role="form">
                            <div class="form-group">
                                <label class="sr-only" for="subscribe-name">Your first name</label>
                                <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="subscribe-email">and your email</label>
                                <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
                            </div> 
                            <div class="form-group">   
                                <input type="submit" class="btn btn-danger" value="Subscribe!">      
                            </div>                     
                        </form>                          
                        <hr>
                        <p>
                            <small>Aliquam erat tellus, rhoncus at blandit nec, ullamcorper vitae est. Ut ac tempor mauris, 
                                sit amet suscipit justo. <br>Proin varius lectus sapien, eu volutpat risus venenatis ac. </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>

		<!-- Scripts
        placed at the end to load the page faster -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="<?php bloginfo('template_directory')?>/js/jquery-3.4.1.min.js"></script>
        <script src="<?php bloginfo('template_directory')?>/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_directory')?>/js/main.js"></script>

</body>
</html>
