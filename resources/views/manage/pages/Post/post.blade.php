@extends('manage.layout.app')

@section('main')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <div class="float-left">
            <h4 class="card-title ">Post Table</h4>
            <p class="card-category"> Here is the posts for this table</p>
          </div>
          <div class="text-right">
            <a href="{{route ('post.create')}}" class="btn btn-blue ">Add</a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <tr><th>
                  Title
                </th>
                <th>
                  Category
                </th>
                <th>
                 Image
                </th>
                <th>
                  Body
                </th>
                <th>Action</th>
              </tr></thead>
              <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>
                        {{$post->title}}
                    </td>
                    <td>
                        {{$post->category->name}}
                    </td>
                    <td>
                        <img src="{{ asset($post->image) }}" class="" width="70" alt="">
                    </td>
                    <td>
                        {!! $post->body !!}
                    </td>
                    <td>
                        <form action="{{ route('post.delete', $post) }}" method="post">
                            @csrf
                            @method('Delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                            <a href="{{ route('post.edit', $post) }}">Edit</a>
                    </td>
                  </tr>
                @endforeach
                <tr>
                  <td>

                  </td>
                  <td>

                  </td>
                  <td>

                  </td>
                  <td>

                  </td>
                  <td>

                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
