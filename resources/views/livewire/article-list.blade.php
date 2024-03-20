<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">List of articles</h5>
            <!-- Primary Color Bordered Table -->
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Link</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date</th>
                        <th scope="col">Actioin</th>
                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                <tbody>
                    @forelse ($articles as $article)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>
                                <a href="{{ $article->article_link }}" class="text-primary"
                                    target="_blank">{{ $article->title }}</a>
                            </td>
                            <td>{{ $article->article_link }}</td>
                            <td>
                                @if ($article->status == true)
                                    <span class="badge bg-success">Visible</span>
                                @else
                                    <span class="badge bg-danger">Hidden</span>
                                @endif
                            </td>
                            <td>{{ $article->date }}</td>
                            <td>
                                <a href="{{ $article->article_link }}" class="btn btn-info text-white" title="View"
                                    target="_blank"><i class="bi bi-eye-fill"></i></a>
                                <a href="{{ route('edit_article', ['article' => $article->id]) }}"
                                    class="btn btn-warning text-white" title="Edit"><i class="bi bi-pen-fill"></i></a>
                                <button type="button" wire:click="getDeleteArticle({{$article->id}})" class="btn btn-danger text-white" title="Delete"><i
                                        class="bi bi-trash-fill"></i></button>
                            </td>
                        </tr>
                    @empty
                        <p>There is no data in this page</p>
                    @endforelse

                </tbody>
            </table>
            <!-- End Primary Color Bordered Table -->

 {{-- Delete madal --}}
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
                <form class="row g-3 align-items-center" wire:submit.prevent="DeleteArticle">
                    <div class="text-center my-2 mt-3">
                        Do you want to delete this Module?
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

@push('script')
    <script>
            window.addEventListener('openDeleteModal', (event) => {
                $('#deleteModel').modal('show');

            });
            window.addEventListener('closeDeleteModal', event => {
                $('#deleteModel').modal('hide');

            });


    </script>
@endpush

