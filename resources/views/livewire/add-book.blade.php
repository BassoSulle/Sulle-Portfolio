<div>
    <div>
        <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add books</h5>

                <!-- Vertical Form -->
                <form class="row g-3">
                  <div class="col-12">
                    <label for="inputEmail4" class="form-label">Book Title</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-12">
                    <label for="inputEmail4" class="form-label">Book Cover</label>
                    <input type="file" class="form-control" id="inputEmail4" accept="image/*">
                  </div>
                  <div class="col-12">
                    <label for="inputEmail4" class="form-label">Discription</label>
                    <textarea required="required"  type="text" class="form-control" name="desc   " id="editor"></textarea>
                </div>

                    <div class="row mt-3">
                    <div class="col-md-6">

                    <div class="col-6">
                                    <label for="inputPassword4" class="form-label">Date</label>
                                    <input type="Date" class="form-control" id="inputPassword4">
                                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-6">
                            <label for="statusCheckbox" class="form-label">Status</label>
                            <div id="statusCheckbox">
                                <input type="checkbox" class="form-check-input me-2"id="activeCheckbox" name="status" value="active">
                                <label for="activeCheckbox" class="form-check-label">Visible / hidden</label>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="text-end my-3" >
                        <button type="reset" class="btn btn-secondary ">Clear</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                </form><!-- Vertical Form -->

              </div>
            </div>
          </div>
    </div>

</div>
{{-- Java script for textarea input --}}
<script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
        <script type="text/javascript">
        CKEDITOR.replace('editor')
        </script>
