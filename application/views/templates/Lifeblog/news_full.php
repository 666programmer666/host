<!--Section: Blog v.4-->
<section class="pt-5 mt-4 pb-3">

    <!--Grid row-->
    <div class="row">
        <div class="col-md-12">
            <!--Featured image-->
            <div class="card card-cascade wider reverse">
                <div class="view overlay">
                    <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="Wide sample post image" class="img-fluid">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                
                <!--Post data-->
                <div class="card-body text-center">
                    <h2>
                        <a class="font-weight-bold"><h2><?php echo $post['title']; ?></h2></a>
                    </h2>
                    <p>Автор:
                        <a>Abby Madison</a>, 26/08/2018</p>

                    <!--Social shares-->
                    <div class="social-counters ">

                        <!--Facebook-->
                        <a class="btn btn-fb ">
                            <i class="fa fa-facebook left "></i>
                            <span class="clearfix d-none d-md-inline-block">Facebook</span>
                        </a>
                        <span class="counter ">46</span>

                        <!--Twitter-->
                        <a class="btn btn-tw ">
                            <i class="fa fa-twitter left "></i>
                            <span class="clearfix d-none d-md-inline-block">Twitter</span>
                        </a>
                        <span class="counter ">22</span>

                        <!--Google+-->
                        <a class="btn btn-gplus ">
                            <i class="fa fa-google-plus left "></i>
                            <span class="clearfix d-none d-md-inline-block">Google+</span>
                        </a>
                        <span class="counter ">31</span>

                        <!--Comments-->
                        <a class="btn btn-default ">
                            <i class="fa fa-comments-o left "></i>
                            <span class="clearfix d-none d-md-inline-block">Comments</span>
                        </a>
                        <span class="counter ">18</span>

                    </div>
                    <!--Social shares-->

                </div>
                <!--Post data-->
            </div>

            <!--Excerpt-->
            <div class="excerpt mt-5">
                <?php echo $post['body']; ?>
            </div>
        </div>
    </div>
    <!--Grid row-->

    
    <br>



    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group mr-2" role="group" aria-label="First group">
        <button type="button" class="btn indigo lighten-2"><i class="fa fa-star" aria-hidden="true"></i></button>
        <button type="button" class="btn blue lighten-2"><i class="fa fa-heart" aria-hidden="true"></i></button>
        <button type="button" class="btn light-blue lighten-2"><i class="fa fa-user" aria-hidden="true"></i></button>
        <button type="button" class="btn cyan lighten-2"><i class="fa fa-twitter" aria-hidden="true"></i></button>
    </div>

    <div class="btn-group mr-2" role="group" aria-label="First group">
        <?php echo form_open('/posts/delete/' . $post['id']); ?>
            <button type="submit" class="btn btn-danger lighten-2"><i class="fa fa-delete" aria-hidden="true">Delete</i></button>
        </form>
        <?php echo form_open('/posts/edit/' . $post['slug']); ?>
            <button type="submit" class="btn btn-light-green lighten-2"><i class="fa fa-delete" aria-hidden="true">Edit</i></button>
        </form>
    </div>
</div>
