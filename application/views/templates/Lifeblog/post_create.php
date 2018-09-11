                <section class="pb-5">
                    <div class="container">

                        <div class="row pt-5">
                            <div class="col-xl-8">
                              <h2><?php echo $title; ?></h2>

                              <?php echo validation_errors(); ?>
                                    <?php echo form_open_multipart('posts/create'); ?>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Заголовок новости</label>
                                  <input type="text" class="form-control" id="title"  placeholder="Заголовок" name="title">
                                  <small id="title" class="form-text text-muted">Введите название новости</small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Выберите категорию</label>
                                    <select name="category_id" class="form-control">
                                      <option value="" disabled selected>Выберите категорию из списка</option>
                                      <?php foreach($categories as $category): ?>

                                      <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                      <?php endforeach; ?>
                                    </select>
                                  </div>

                                <div class="form-group">
                                  <label for="exampleFormControlFile1">Выберите превью-изображение для новости</label>
                                  <input type="file" name="userfile" class="form-control-file" >

                                </div>


                                <div class="form-group">
                                    <label>Ваш текст в поле ниже</label>
                                    <textarea name="body" if="editor" class="form-control"  rows="3"></textarea>
                                  </div>

                                <button type="submit" class="btn btn-primary">Отправить новость</button>

                              </form>

                            </div>
