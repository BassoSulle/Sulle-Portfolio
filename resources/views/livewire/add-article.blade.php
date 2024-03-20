<div>
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $editMode == true ? 'Edit article' : 'Add article' }}</h5>

                <form class="row g-3" wire:submit.prevent="save_article">
                    @csrf
                    <div class="col-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" wire:model="title" id="title">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="article_link" class="form-label">Article link</label>
                        <input type="text" class="form-control" wire:model="article_link" id="article_link">
                        @error('article_link')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="col-6">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" wire:model="date" id="date">
                                @error('date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-6">
                                <label for="statusCheckbox" class="form-label">Status</label>
                                <div id="statusCheckbox">
                                    <input type="checkbox" class="form-check-input me-2" id="activeCheckbox"
                                        wire:model="status" value="visible">
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <label for="activeCheckbox" class="form-check-label">Visible / hidden</label>
                                </div>
                            </div>
                        </div>

                        <div class="text-end my-3">
                            <button type="reset" class="btn btn-secondary ">Clear</button>
                            @if ($editMode == true)
                                <button type="submit" class="btn btn-success">Update</button>
                            @else
                                <button type="submit" class="btn btn-primary">Save</button>
                            @endif
                        </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    </div>
</div>

{{-- <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('editor')
</script> --}}
