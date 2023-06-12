
@extends('backend.layouts.app')

@section('content')
  <div class="content-wrapper">

      <div class="container-fluid">
       <h2>Add New blog</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('blog.update') }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                          <input type="text" value="{{ $blog->title }}" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Description</label>
                          <textarea name="description" class="form-control" id=""  >{{ $blog->description }}</textarea>
                        </div>
                        <input type="hidden" name="id" value="{{ $blog->id }}">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
   </div>
  </div>
@endsection
