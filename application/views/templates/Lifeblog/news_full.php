

                <section class="pb-5">
                    <div class="container">

                        <div class="row pt-5">
                            <!-- Content-->
                            <div class="col-xl-8">

                                <!-- Post-->
                                <article class="post">
                                    <div class="post-header">
                                        <h2 class="post-title"><a href="#"><h2><?php echo $post['title']; ?></h2></a></h2>
                                        <ul class="post-meta">
                                            <li><i class="mdi mdi-calendar"></i> July 03, 2017</li>
                                            <li><i class="mdi mdi-tag-text-outline"></i> <a href="#">Branding</a>, <a href="#">Design</a></li>
                                            <li><i class="mdi mdi-comment-multiple-outline"></i> <a href="#">3 Comments</a></li>
                                        </ul>
                                    </div>

                                    <div class="post-preview">
                                        <a href="blog-single.html"><img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="" class="img-fluid rounded"></a>
                                    </div>

                                    <div class="blog-detail-description">
                                    <img src="<?php echo site_url(); ?>assets/Lifeblog/images/posts/<?php echo $post['post_image']; ?>" alt="" class="img-fluid rounded">
                                    
                                    <br>
                                        <?php echo $post['body']; ?>

                                         <div class="mt-5">
                                            <h6>Tags:</h6>
                                            <div class="tagcloud">
                                                <a href="#">logo</a>
                                                <a href="#">business</a>
                                                <a href="#">agency</a>
                                            </div>
                                        </div>

                                        <div class="media post-author-box">
                                            <img class="d-flex mr-3 rounded-circle" src="images/user/user-5.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">Michelle Durant</a></h4>
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>

                                                <ul class="socials list-unstyled mb-0 mt-3">
                                                    <li><a href="http://facebook.com/"><i class="mdi mdi-facebook"></i></a></li>
                                                    <li><a href="http://twitter.com/"><i class="mdi mdi-twitter"></i></a></li>
                                                    <li><a href="http://instagram.com/"><i class="mdi mdi-instagram"></i></a></li>
                                                    <li><a href="http://pinterest.com/"><i class="mdi mdi-pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>


                                </article>
                                <!-- Post end-->
                            

                                


