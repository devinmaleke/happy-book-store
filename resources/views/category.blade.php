@extends('template.template')
@section('content')
<div class="bg-primary text-warning p-3">
            <h4>{{$label->category}}</h4>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>

              </tr>
            </thead>
            <tbody>
              @forelse($data as $key => $d)

                <td>{{$d->title}}</td>
                <td>{{$d->author}}</td>

              </tr>
            @empty
            <tr>
            <th  class="bg-primary m-3">no post</th>
            <th  class="bg-primary m-3"></th>
            <th  class="bg-primary m-3"></th>

        </tr>
            @endforelse

            </tbody>

          </table>
          <div style="float:right">
          {{ $data->links('pagination::bootstrap-4') }}
          </div>
@endsection
