<h2><?=$title;?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create'); ?>
        <div class="form-row">
              <!-- Grid column -->
            <div class="col-md-6">
                  <!-- Material input -->
                <div class="md-form form-group">
                    <input type="text" class="form-control" id="category" placeholder="Add category" name="category">
                    <label for="category">Add Category</label>
                </div>
             </div>    
        </div>  
        <div class="text">
            <button class="btn btn-primary btn-sm">Submit</button>
        </div>  
</form>        