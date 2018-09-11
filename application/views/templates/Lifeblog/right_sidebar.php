
                            <!-- Sidebar-->
                            <div class="col-xl-4">
                                <div class="sidebar">

                                    <!-- Search widget-->
                                    <aside class="widget widget_search">
                                        <form>
                                            <input class="form-control pr-5" type="search" placeholder="Поиск...">
                                            <button class="search-button" type="submit"><span class="mdi mdi-magnify"></span></button>
                                        </form>
                                    </aside>

                                    <aside class="widget about-widget">
                                        <div class="widget-title">О нас</div>

                                        <div class="text-center">
                                            <img src="<?php echo base_url(); ?>assets/Lifeblog/images/logo_group.png" alt="About Me" class="rounded-circle">

                                            <p>Мы - молодая компания энтузиастов-программистов, которые хотят сделать этот мир чуть-чуть лучше, информативнее и веселее.</p>
                                        </div>

                                    </aside>

                                    <aside class="widget about-widget">
                                        <div class="widget-title">Подпишись</div>

                                        <ul class="socials">
                                            <li><a href="http://facebook.com/"><i class="mdi mdi-facebook"></i></a></li>
                                            <li><a href="http://twitter.com/lifeblogby"><i class="mdi mdi-twitter"></i></a></li>
                                            <li><a href="http://instagram.com/"><i class="mdi mdi-instagram"></i></a></li>
                                            <li><a href="http://pinterest.com/"><i class="mdi mdi-pinterest"></i></a></li>
                                        </ul>

                                    </aside>

                                    <!-- Categories widget-->
                                    <aside class="widget widget_categories">
                                        <div class="widget-title">Категории</div>
                                        <ul>
                                        <?php foreach($categories as $category) : ?>
                                            <li><a href="<?php echo site_url('/categories/posts/'.$category['id']);?>"><?php echo $category['name']; ?></a></li>
                                        <?php endforeach; ?>
                                        </ul>
                                    </aside>

                                    <!-- Recent entries widget-->
                                    <aside class="widget widget_recent_entries_custom">
                                        <div class="widget-title">Закреплённые посты</div>
                                        <ul>
                                            <li class="clearfix">
                                                <div class="wi">
                                                    <a href="#"><img src="<?php echo base_url(); ?>assets/Lifeblog/images/works/img1.jpg" alt="" class="img-fluid"></a>
                                                </div>
                                                <div class="wb"><a href="#">Beautiful Day With Friends..</a> <span class="post-date">Jun 15, 2017</span></div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="wi">
                                                    <a href="#"><img src="<?php echo base_url(); ?>assets/Lifeblog/images/works/img2.jpg" alt="" class="img-fluid"></a>
                                                </div>
                                                <div class="wb"><a href="#">Nature valley with cooling..</a> <span class="post-date">Jun 10, 2017</span></div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="wi">
                                                    <a href="#"><img src="<?php echo base_url(); ?>assets/Lifeblog/images/works/img3.jpg" alt="" class="img-fluid"></a>
                                                </div>
                                                <div class="wb"><a href="#">15 Best Healthy and Easy Salad..</a> <span class="post-date">Jun 8, 2017</span></div>
                                            </li>
                                        </ul>
                                    </aside>

                                    <!-- Text widget-->
                                    <aside class="widget">
                                        <div class="widget-title">текстовый виджет</div>

                                        <p class="text-muted text-widget-des">Простой текстовый виджет с текстом </p>

                                    </aside>

                                    <!-- Archives widget-->
                                    <aside class="widget">
                                        <div class="widget-title">Архивы</div>

                                        <ul>
                                            <li><a href="#">March 2017</a> (40)</li>
                                            <li><a href="#">April 2017</a> (08)</li>
                                            <li><a href="#">May 2017</a> (11)</li>
                                            <li><a href="#">Jun 2017</a> (21)</li>
                                        </ul>

                                    </aside>

                                    <!-- Tags widget-->
                                    <aside class="widget widget_tag_cloud">
                                        <div class="widget-title">Тэги</div>
                                        <div class="tagcloud">
                                            <a href="#">logo</a>
                                            <a href="#">business</a>
                                            <a href="#">corporate</a>
                                            <a href="#">e-commerce</a>
                                            <a href="#">agency</a>
                                            <a href="#">responsive</a>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                            <!-- Sidebar end-->
                        </div>

                    </div>
                    <!-- end container -->
                </section>
            </div>
        </div>
