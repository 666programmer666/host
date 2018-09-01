<section class="pb-5">
    <div class="container">

        <div class="row pt-5">
            <div class="col-xl-8">
              <h2><?php echo $title; ?></h2>

              <ul class="list-group list-group-flush">
                <?php foreach($categories as $category) : ?>
                <li class="list-group-item"><a href="<?php echo site_url('/categories/posts/'.$category['id']);?>"><?php echo $category['name']; ?></a></li>
                <?php endforeach; ?>

              </ul>

            </div>
