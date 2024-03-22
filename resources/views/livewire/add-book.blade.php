<div>
    <div>
        <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{$editMode==false ? 'Add Book': 'Edit Book'}}</h5>

                <!-- Vertical Form -->
                <form class="row g-3" wire:submit.prevent='addBook'>
                  <div class="col-12">
                    <label for="inputEmail4" class="form-label">Book Title</label>
                    <input type="text" wire:model="title" class="form-control" id="inputEmail4">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="inputEmail4" class="form-label">Book Cover</label>
                    <input type="file" class="form-control" wire:model="book_cover" id="inputEmail4" accept="image/*">
                    @error('book_cover')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="inputEmail4" class="form-label">Discription</label>
                    <input type="text" wire:model="book_desc" class="form-control" id="inputEmail4">
                    @error('book_desc')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mt-3" >
                <div class="col-md-6">
                <div class="col-12">
                    <label for="author" class="form-label">Author </label>
                    <input type="text" wire:model="author" class="form-control" id="inputEmail4"></div>
                    @error('author')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="col-12">
                        <div class="col-12">
                            <label for="publisher" class="form-label">Publisher </label>
                            <input type="text" wire:model="publisher"class="form-control" id="inputEmail4"></div>
                            @error('publisher')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
            </div>

            <div class="row mt-3" >
                <div class="col-md-6">
                <div class="col-12">
                    <label for="loacation" class="form-label">Location </label>
                    <input type="text" wire:model="location" class="form-control" id="inputEmail4"></div>
                    @error('location')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="col-6">
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

                    </div>
                </div>

            </div>
                    <div class="row mt-3">
                    <div class="col-md-6">
                    <div class="col-6">
                                    <label for="inputPassword4" class="form-label">Date</label>
                                    <input type="Date" wire:model="date" class="form-control" id="inputPassword4">
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
                                @error('status')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="activeCheckbox" class="form-check-label">Visible / hidden</label>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="text-end my-3" >
                        <button type="reset" class="btn btn-secondary ">Clear</button>
                            @if ($editMode==true)
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

</div>
{{-- Java script for textarea input --}}
<script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
        <script type="text/javascript">
        CKEDITOR.replace('editor')
        </script>
