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
                <input type="text" class="form-control" placeholder="Заголовок новости" name="title" value="<?php echo $post['title']; ?>">
                <label for="title">Заголовок новости</label>
            </div>

            <!-- Material input -->
            <div class="md-form form-group">

                <select name="category_id" id="" class="mdb-select colorful-select dropdown-primary">
                <option value="" disabled selected>Выберите категорию</option>
                <?php foreach($categories as $category): ?>

                    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                <?php endforeach; ?>

                </select>
            </div>
        </div>
        <!-- Grid column -->
    </div>
    <!-- Grid row -->

    <!-- Grid row -->
    <div class="form-row">
        <!-- Grid column -->
        <textarea name="body" type="text" id="editor" class="form-control md-textarea" rows="3" placeholder="Текст новости"><?php echo $post['body']; ?></textarea>
        <!-- Grid column -->
    </div>
  <!-- Grid row -->
    <button type="submit" class="btn btn-primary btn-md">Обновить новость</button>
</form>
<!-- Extended material form grid -->
</div>
