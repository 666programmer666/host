      <h2><?php echo $title; ?></h2>

      <?php echo validation_errors(); ?>

      <!-- Extended material form grid -->
      <?php echo form_open_multipart('posts/create'); ?>
          <!-- Grid row -->
          <div class="form-row">
              <!-- Grid column -->
              <div class="col-md-6">
                  <!-- Material input -->
                  <div class="md-form form-group">
                      <input type="text" class="form-control" id="title" placeholder="Title News" name="title">
                      <label for="title">Title</label>
                  </div>

                    <!-- Material input -->
                    <div class="md-form form-group">

                        <select name="category_id" id="" class="mdb-select colorful-select dropdown-primary">
                        <option value="" disabled selected>Choose your category</option>
                            <?php foreach($categories as $category): ?>

                                <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>

                    <div class="md-form">
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span>Choose file</span>
                                <input type="file" name="userfile">
                            </div>
                            <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload your file">
                            </div>
                        </div>
                    </div>

                    </div>

              <!-- Grid column -->
          </div>

            <!-- Grid row -->
            <div class="form-row">
                <!-- Grid column -->
                <textarea name="body" type="text" id="editor" class="form-control md-textarea" rows="3" placeholder="Text News"></textarea>
                <!-- Grid column -->
            </div>
        <!-- Grid row -->



          <button type="submit" class="btn btn-primary btn-md">Send News</button>
      </form>


   <!-- Extended material form grid -->
      </div>

</div>
