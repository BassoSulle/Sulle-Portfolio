<div>
    <div>
        <div>
            <div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">List of Projects</h5>
                        <!-- Primary Color Bordered Table -->
                        <table class="table table-bordered border-primary">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Institute</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($projects as $project)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ Str::limit($project->institute_name, 10) }}</td>
                                        <td>{{ Str::limit($project->description, 15) }}</td>
                                        <td>{{ $project->position }}</td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($project->start_date)->format('d-m-Y') }} -
                                            {{ \Carbon\Carbon::parse($project->end_date)->format('d-d-Y') }}
                                        </td>
                                        <td>
                                            @if ($project->status == true)
                                                <span class="badge bg-success">Visible</span>
                                            @else
                                                <span class="badge bg-danger">Hidden</span>
                                            @endif
                                        </td>
                                        <td>
                                            <abutton type="button" class="btn btn-info text-white"
                                                wire:click="viewProject({{ $project->id }})" title="View"><i
                                                    class="bi bi-eye-fill"></i>
                                            </abutton>
                                            <a href="{{ route('edit_project', ['project' => $project->id]) }}"
                                                class="btn btn-warning text-white" title="Edit"><i
                                                    class="bi bi-pen-fill"></i></a>
                                            <button type="button" class="btn btn-danger text-white"
                                                wire:click="getDeleteProject({{ $project->id }})" title="Delete"><i
                                                    class="bi bi-trash-fill"></i></button>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="7">No projects found</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                        <!-- End Primary Color Bordered Table -->

                        {{-- View madal --}}
                        <div class="modal fade" wire:ignore.self id="viewModel" tabindex="-1" data-bs-backdrop="false">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Project</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            wire:click="clearForm" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3 mb-0 align-items-center">
                                            <div class="col-md-12">
                                                <center>
                                                    <img src="{{ asset('storage/projects/' . $project->image) }}"
                                                        alt="Project image"
                                                        style="width: 400px; height: 240px; object-fit: cover;">
                                                </center>
                                            </div>
                                            <hr>
                                            <div class="col-md-12 mb-0 mt-0">
                                                <p class="mt-0">
                                                    <span class="fw-bold">Title: </span>
                                                    <span>{{ $project->title }}</span>
                                                </p>
                                                <p class="mt-0">
                                                    <span class="fw-bold">Institute:</span>
                                                    <span>{{ $project->institute_name }}</span>
                                                </p>
                                                <p class="mt-0">
                                                    <span class="fw-bold">Position:</span>
                                                    <span>{{ $project->position }}</span>
                                                </p>
                                                <p class="mt-0">
                                                    <span class="fw-bold">Duration:</span>
                                                    <span>
                                                        {{ \Carbon\Carbon::parse($project->start_date)->format('F d, Y') }}
                                                        -
                                                        {{ \Carbon\Carbon::parse($project->end_date)->format('F d, Y') }}
                                                    </span>
                                                </p>
                                                <p class="mt-0">
                                                    <span>{{ $project->description }}</span>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal"
                                                    wire:click="clearForm">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Delete madal --}}
                        <div class="modal fade" wire:ignore.self id="deleteModel" tabindex="-1"
                            data-bs-backdrop="false">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Confirm</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            wire:click="clearForm" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3 align-items-center" wire:submit.prevent="DeleteProject">
                                            <div class="text-center my-2 mt-3">
                                                Do you want to delete this Project?
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

</div>
@push('script')
    <script>
        window.addEventListener('openViewModal', (event) => {
            $('#viewModel').modal('show');

        });

        window.addEventListener('openDeleteModal', (event) => {
            $('#deleteModel').modal('show');

        });
        window.addEventListener('closeDeleteModal', event => {
            $('#deleteModel').modal('hide');

        });
    </script>
@endpush
