<div>
    <div>
        <div>
            <div>
                <div class="col-lg-12">

                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">{{$editMode==true ? ' Edit research': 'Add research'}}</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3"wire:submit.prevent='addResearch'>
                        @csrf
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Research Title</label>
                                <input type="text" wire:model="title" class="form-control" id="inputEmail4">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                          <div class="col-12">
                            <label for="inputEmail4" class="form-label">Discription</label>
                            <input type="text" wire:model="research_desc" class="form-control" id="inputEmail4">
                            @error('research_desc')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="col-12">
                            <label for="inputNanme4" class="form-label">Research image</label>
                            <input type="file" wire:model="research_image" class="form-control" id="inputNanme4">
                            @error('research_image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                            <div class="row mt-3">
                            <div class="col-md-6">

                            <div class="col-6">
                                            <label for="inputPassword4" class="form-label">Date</label>
                                            <input type="date" wire:model= "date" class="form-control" id="inputPassword4">
                                            @error('date')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-6">
                                    <label for="statusCheckbox" class="form-label">Status</label>
                                    <div id="statusCheckbox">
                                        <input type="checkbox" class="form-check-input me-2"id="activeCheckbox" wire:model="status" value="visible">
                                        <label for="activeCheckbox" class="form-check-label">Visible / hidden</label>
                                    </div>
                                </div>

                            </div>
                            <div class="text-end my-3" >
                                <button type="reset" class="btn btn-secondary ">Clear</button>
                                @if ($editMode==false)
                                <button type="submit" class="btn btn-primary">Save</button>
                                @else
                                <button type="submit" class="btn btn-success">Update</button>
                                @endif
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
