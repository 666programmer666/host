      <h2><?php echo $title; ?></h2>

      <?php echo validation_errors(); ?>

      <!-- Extended material form grid -->
      <?php echo form_open('posts/create'); ?>
          <!-- Grid row -->
          <div class="form-row">
              <!-- Grid column -->
              <div class="col-md-6">
                  <!-- Material input -->
                  <div class="md-form form-group">
                      <input type="text" class="form-control" id="title" placeholder="Title News" name="title">
                      <label for="title">Title</label>
                  </div>
              </div>
              <!-- Grid column -->
          </div>
          <!-- Grid row -->

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
