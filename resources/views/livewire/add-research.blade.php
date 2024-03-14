<div>
    <div>
        <div>
            <div>
                <div class="col-lg-12">

                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Add research</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3">
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Research Title</label>
                                <input type="email" class="form-control" id="inputEmail4">
                              </div>
                          <div class="col-12">
                            <label for="inputNanme4" class="form-label">Research image</label>
                            <input type="file" class="form-control" id="inputNanme4">
                          </div>
                          <div class="col-12">
                            <label for="inputEmail4" class="form-label">Discription</label>
                            <textarea required="required"  type="text" class="form-control" name="content   " id="editor"></textarea>
                          </div>

                            <div class="row mt-3">
                            <div class="col-md-6">

                            <div class="col-6">
                                            <label for="inputPassword4" class="form-label">Date</label>
                                            <input type="date" class="form-control" id="inputPassword4">
                                        </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-6">
                                    <label for="statusCheckbox" class="form-label">Status</label>
                                    <div id="statusCheckbox">
                                        <input type="checkbox" id="activeCheckbox" name="status" value="active">
                                        <label for="activeCheckbox">Active</label>
                                        <input type="checkbox" id="inactiveCheckbox" name="status" value="inactive">
                                        <label for="inactiveCheckbox">Inactive</label>
                                    </div>
                                </div>

                            </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                          </div>
                        </form><!-- Vertical Form -->

                      </div>
                    </div>
                  </div>
            </div>

        </div>

    </div>

</div>

<script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
        <script type="text/javascript">
        CKEDITOR.replace('editor')
        </script>
