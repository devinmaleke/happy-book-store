@extends('template.template')
@section('content')
<div class="bg-primary text-warning p-3">
            <h4>
                BOOK LIST
            </h4>
        </div>
        <table class="table">
            <thead>
              <tr>
                  <th scope="col">Number</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
              </tr>
            </thead>
            <tbody>
              @forelse($data as $key => $d)
                  <tr class='clickable-row' data-href="{{URL::to('/detail/').'/'.$d->id}}">
                      <th scope="row">{{ $data->firstItem() + $key }}</th>
                <td>{{$d->title}}</td>
                <td>{{$d->author}}</td>

              </tr>
            @empty
            <div class="bg-primary m-3">
                No Data
            </div>

            @endforelse

            </tbody>

          </table>
          <div style="float:right">
          {{ $data->links('pagination::bootstrap-4') }}
          </div>
@endsection
