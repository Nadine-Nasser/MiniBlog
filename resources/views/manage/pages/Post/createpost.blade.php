@extends('manage.layout.app')

@section('main')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Add a Post</h4>
            </div>
            <div class="card-body">
                <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" placeholder="title" name="title">
                                @error('title')
                                <span class="text-danger text-weight-bold">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <select class="form-control" id="category" placeholder="category" name="category_id">
                                    <option>Select Category</option>
                                    @foreach (App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger text-weight-bold">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <textarea type="text" rows="6" class="form-control" placeholder="body" name="body"></textarea>
                                @error('body')
                                <span class="text-danger text-weight-bold">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <textarea type="text" rows="6" class="form-control" placeholder="tags" name="tags"></textarea>
                                @error('tags')
                                <span class="text-danger text-weight-bold">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div>
                                    <span class="btn btn-primary btn-round btn-file">
                                        <input type="hidden"><input type="file" name="image">
                                        <div class="ripple-container"></div>
                                        @error('image')
                                            <span class="text-white text-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection
