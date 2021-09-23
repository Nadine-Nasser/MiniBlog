@extends('manage.layout.app')

@section('main')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <div class="float-left">
            <h4 class="card-title ">Category Table</h4>
            <p class="card-category"> Here is the categories for this table</p>
          </div>
          <div class="text-right">
            <a href="{{route ('category.create')}}" class="btn btn-blue ">Add</a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <tr><th>
                  Name
                </th>
                <th>
                  Description
                </th>
                <th>
                 Color
                </th>
              </tr></thead>
              <tbody>
                @foreach ($categories as $category)
                <tr>

                    <td>
                        {{$category->name}}
                    </td>
                    <td>
                        {{$category->description}}
                    </td>
                    <td>
                        {{$category->color}}
                    </td>
                </tr>
                @endforeach


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
