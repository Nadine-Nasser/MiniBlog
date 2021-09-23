@extends('manage.layout.app')

@section('main')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Add a Post</h4>
            </div>
            <div class="card-body">
                <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <textarea type="text" class="form-control" placeholder="infomation" name="information">{{ Auth::user()->profile->information }}</textarea>
                            @error('information')
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
                    <button type="submit" class="btn btn-primary pull-right">update</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection
