
                <section class="mt-5 pb-5">
                    <div class="container">

                        <div class="row">
                            <!-- Content-->
                            <div class="col-xl-8">
                            <?php foreach ($posts as $post) : ?>
                                <!-- Post-->
                                <article class="post">

                                    <div class="post-header">
                                        <h2 class="post-title"><a href="#"><?php echo $post['title']; ?></a></h2>
                                        <ul class="post-meta">
                                            <li><i class="mdi mdi-calendar"></i> <?php echo $post['created_at']; ?> in <strong><?php echo $post['name'];?></strong></li>
                                            <li><i class="mdi mdi-tag-text-outline"></i> <a href="#">Branding</a>, <a href="#">Design</a></li>
                                            <li><i class="mdi mdi-comment-multiple-outline"></i> <a href="#">3 Comments</a></li>
                                        </ul>
                                    </div>

                                    <div class="post-preview">
                                        <a href="#"><img src="<?php echo site_url(); ?>assets/Lifeblog/images/posts/<?php echo $post['post_image']; ?>" alt="" class="img-fluid rounded"></a>
                                    </div>

                                    <div class="post-content">
                                        <p><?php echo word_limiter($post['prenews'], 50); ?></p>
                                    </div>

                                    <div><a href="<?php echo site_url('/posts/'.$post['slug']); ?>" class="btn btn-outline-custom">Read More <i class="mdi mdi-arrow-right"></i></a></div>

                                </article>
                                <!-- Post end-->
<?php endforeach; ?>
                                <!-- Pagination-->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="pagination">
                                            <li class="next"><a href="#"><i class="mdi mdi-chevron-left"></i></a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li class="prev"><a href="#"><i class="mdi mdi-chevron-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Pagination end-->
                            </div>
                            <!-- Content end-->
