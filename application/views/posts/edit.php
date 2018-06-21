<hr>

<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<!-- Extended material form grid -->
<?php echo form_open('posts/update'); ?>

<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
    <!-- Grid row -->
    <div class="form-row">
        <!-- Grid column -->
        <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" placeholder="Title News" name="title" value="<?php echo $post['title']; ?>">
                <label for="title">Title</label>
            </div>
        </div>
        <!-- Grid column -->
    </div>
    <!-- Grid row -->

    <!-- Grid row -->
    <div class="form-row">
        <!-- Grid column -->
        <textarea name="body" type="text" id="editor" class="form-control md-textarea" rows="3" placeholder="Text News"><?php echo $post['body']; ?></textarea>
        <!-- Grid column -->
    </div>
  <!-- Grid row -->
    <button type="submit" class="btn btn-primary btn-md">Update News</button>
</form>
<!-- Extended material form grid -->
</div>
