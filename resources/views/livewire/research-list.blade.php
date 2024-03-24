<div>
    <div>
        <div>
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">List of Researches.</h5>
                  <!-- Primary Color Bordered Table -->
                  <table class="table table-bordered border-primary">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Research image</th>
                        <th scope="col">Description</th>
                        <th scope="col"> Status</th>
                        <th scope="col"> Date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                        @php
                        $i=1;
                        @endphp
                    <tbody>
                @forelse ($researches as $research)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td><a href="{{$research->title}}" target="_blank"> {{$research->title}}</a>
                       </td>
                    <td>{{$research->research_image}}</td>
                    <td>{{$research->research_desc}}</td>
                    <td>
                        @if ($research->status==true)
                        <span class="badge bg-success">Visible</span>
                        @else
                        <span class="badge bg-success">Visible</span>
                        @endif
                   </td>
                    <td>{{$research->date}}</td>
                    <td>
                        <a href="{{ $research->title }}" class="btn btn-info text-white" title="View"
                            target="_blank"><i class="bi bi-eye-fill"></i></a>
                       <a href="{{route('edit_research', ['research' => $research->id])}}"
                        class="btn btn-warning text-white" title="Edit"><i class="bi bi-pen-fill"></i></a>
                        <button type="button" wire:click="getResearchDetails({{$research->id}})" class="btn btn-danger text-white" title="Delete"><i class="bi bi-trash-fill"></i></button>

                    </td>
                </tr>
                @empty

                @endforelse

                    </tbody>
                  </table>
                  <!-- End Primary Color Bordered Table -->

{{-- Delete research --}}
                  <div class="modal fade" wire:ignore.self id="deleteModel" tabindex="-1" data-bs-backdrop="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Confirm</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="clearForm"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {{-- form inputs --}}
                                <form class="row g-3 align-items-center" wire:submit.prevent="DeleteResearch">
                                    <div class="text-center my-2 mt-3">
                                        Do you want to delete this Book?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal"
                                            wire:click="clearForm">Close</button>
                                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
              </div>
        </div>

    </div>

</div>
@push('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#disablebackdrop').modal('hide');
            // $('#EditModuleModel').modal('hide');

        });
            window.addEventListener('openDeleteModal', (event) => {
                $('#deleteModel').modal('show');

            });
            window.addEventListener('closeDeleteModal', event => {
                $('#deleteModel').modal('hide');

            });


    </script>
@endpush
