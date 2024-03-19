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
                <th scope="col">Content</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Actioin</th>
              </tr>
            </thead>
                @php
                $i=1;
                @endphp
            <tbody>
                @forelse ($articles as $article )
            <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$article->title}}</td>
                    <td>{{$article->content}}</td>
                    <td>{{$article->date}}</td>
                    <td>{{$article->status}}</td>
                    <td>
                        <button type="button" class="btn btn-info text-white" title="View"><i class="bi bi-eye-fill"></i></button>
                        <button type="button" class="btn btn-warning text-white" title="Edit"><i class="bi bi-pen-fill"></i></button>
                        <button type="button" class="btn btn-danger text-white" title="Delete"><i class="bi bi-trash-fill"></i></button>
                    </td>
                </tr>
                @empty
            <p>There is no data  in this page</p>
                @endforelse

            </tbody>
          </table>
          <!-- End Primary Color Bordered Table -->

        </div>
      </div>
</div>
