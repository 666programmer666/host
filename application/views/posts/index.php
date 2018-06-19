<h2>The Posts</h2>
<?php foreach ($posts as $post) : ?>
<div class="row">


    <!--Grid column-->
    <div class="col-lg-5 col-xl-4 mb-4">
        <!--Featured image-->
        <div class="view overlay rounded z-depth-1-half">
            <img src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" class="img-fluid" alt="First sample image">
            <a>
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
        <h3 class="mb-3 font-weight-bold dark-grey-text">
            <strong><?php echo $post['title']; ?></strong>
        </h3>
        <p class="grey-text"><?php echo $post['prenews']; ?></p>
        <p>Posted by
            <a class="font-weight-bold dark-grey-text">Jessica Clark</a>, at <?php echo $post['created_at']; ?></p>
        <a class="btn btn-primary btn-md" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read more</a>
    </div>
    <!--Grid column-->

</div>
<?php endforeach; ?>
