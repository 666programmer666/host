<section class="pb-5">
    <div class="container">

        <div class="row pt-5">
            <div class="col-xl-8">
              <h2><?php echo $title; ?></h2>

              <?php echo validation_errors(); ?>
              <?php echo form_open_multipart('categories/create'); ?>
                <div class="form-group">
                  <label for="category">Add category</label>
                  <input type="text" class="form-control" id="category"  placeholder="Add category" name="category">

                </div>


                <button type="submit" class="btn btn-primary">Create</button>

              </form>

            </div>
