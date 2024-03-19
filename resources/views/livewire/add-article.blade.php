<div>
    <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add articles</h5>

            <!-- Vertical Form -->
            <form class="row g-3" wire:submit.prevent="save_article">
                @csrf
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Title</label>
                <input type="text" class="form-control" wire:model="title" id="inputNanme4">
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="col-12">
                <label for="inputEmail4" class="form-label">Content</label>
                <textarea required="required"  type="text" class="form-control" wire:model="content"  id="editor"></textarea>
                {{-- @error('content')
                <span class="text-danger">{{ $message }}</span>
                 @enderror --}}
              </div>

                <div class="row mt-3">
                <div class="col-md-6">

                <div class="col-6">
                                <label for="inputPassword4" class="form-label">Date</label>
                                <input type="date" class="form-control" wire:model="date" id="inputPassword4">
                                @error('date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                </div>
                <div class="col-md-6">
                    <div class="col-6">
                        <label for="statusCheckbox" class="form-label">Status</label>
                        <div id="statusCheckbox">
                            <input type="checkbox" class="form-check-input me-2"id="activeCheckbox" wire:model="status" value="active">
                            @error('status')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <label for="activeCheckbox" class="form-check-label">Visible / hidden</label>
                        </div>
                    </div>
                </div>
                {{-- <div class="form-group">
                    <label for="inputAddress" class="col-form-label">Laboratory Tests</label>
                    <textarea required="required"  type="text" class="form-control" name="lab_pat_tests" id="editor"></textarea>
            </div> --}}

              <div class="text-end my-3" >
                <button type="reset" class="btn btn-secondary ">Clear</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form><!-- Vertical Form -->

          </div>
        </div>
      </div>
</div>

<script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
        <script type="text/javascript">
        CKEDITOR.replace('editor')
        </script>
