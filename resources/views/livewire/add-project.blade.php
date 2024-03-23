<div>
    <div>
        <div>
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $editMode == false ? 'Add project' : 'Edit project' }}</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" wire:submit.prevent="save_project">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Project Title</label>
                                <input type="text" class="form-control" wire:model="title" id="inputEmail4">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Institute name</label>
                                <input type="text" class="form-control" wire:model="institute_name" id="inputNanme4">
                                {{-- <textarea required="required" type="text" class="form-control" name="content   " id="editor"></textarea> --}}
                                @error('institute_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 my-2">
                                <label for="editor" class="form-label">Institute name</label>
                                {{-- <input type="text" class="form-control" wire:model="institute_name" id="inputNanme4"> --}}
                                <textarea wire:ignore type="text" class="form-control" rows="5" wire:model="description" id=""></textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="inputNanme4" class="form-label">Project image</label>
                                <input type="file" class="form-control" wire:model="image" id="inputNanme4">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNanme4" class="form-label">Position</label>
                                <input type="text" class="form-control" wire:model="position" id="inputNanme4">
                                @error('position')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="col-12">
                                        <label for="inputPassword4" class="form-label">Start Date</label>
                                        <input type="date" class="form-control" wire:model="start_date"
                                            id="inputPassword4">
                                        @error('start_date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-12">
                                        <label for="inputPassword4" class="form-label">End Date</label>
                                        <input type="date" class="form-control" wire:model="end_date"
                                            id="inputPassword4">
                                        @error('end_date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-12">
                                        <label for="statusCheckbox" class="form-label">Status</label>
                                        <div id="statusCheckbox">
                                            <input type="checkbox" class="form-check-input me-2"id="activeCheckbox"
                                                wire:model="status" value="visible">
                                            <label for="activeCheckbox" class="form-check-label">Visible /
                                                hidden</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end my-3">
                                    <button type="reset" class="btn btn-secondary ">Clear</button>
                                    @if ($editMode == false)
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

@push('script')
    {{-- Java script for textarea input type --}}
    <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('editor')
    </script>
@endpush
