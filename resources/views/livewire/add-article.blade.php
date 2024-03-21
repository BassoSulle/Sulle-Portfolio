<div>

    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6">
                        <h5 class="card-title">{{ $editMode == false ? 'Add article' : 'Edit article' }}</h5>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('article-list')}}" class="btn btn-success" style="float: right;">Back</a>
                    </div>
                </div>

                <form class="row g-3" wire:submit.prevent="save_article">
                    @csrf
                <div class="col-md-6">
                    <div class="col-12">
                        <label for="title" class="form-label">Authors</label>
                        <input type="text" class="form-control" wire:model="author" id="title">
                        @error('author')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-12">
                        <label for="title" class="form-label">Year of Publication</label>
                        <select
                        wire:model="publication_year" class="form-control">
                            <?php
                            $currentYear = date("Y");
                            $startYear =2000; // You can adjust this based on your needs
                            for ($year = $currentYear; $year >= $startYear; $year--) {
                                echo "<option value=\"$year\">$year</option>";
                            }
                            ?>
                        </select>

                        @error('publication_year')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

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

{{-- <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('editor')
</script> --}}
