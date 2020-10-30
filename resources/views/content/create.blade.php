@extends('layouts.app')
 
@section('content')
          
  
<div class="container">

<!-- sidebar content -->
<div id="sidebar" class="row">
<div class="col-1">
        @include('layouts.sidebar')
        </div>
     
</div>

<div class="col-10">
<div class="row justify-content-center">
             <div class="card" style="width: 50rem;">
                <div class="card-header">{{ __('Create new Post') }}</div>
                

                <div class="card-body">
                    <form action="{{url('/content/create')}}" method="post">
                    
                    @csrf
                    
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter Title">
                        <small id="titleHelp" class="form-text text-muted">Enter an interesting Title for your post.</small>

                    @error('title')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" rows="3"placeholder="Enter Content"></textarea>
                        <small id="contentHelp" class="form-text text-muted">Enter an interesting content for your title.</small>
                    
                    @error('content')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                    </div>
 
                    <button type="submit" class="btn btn-primary">Post</button>
                     
                    </form>

                </div>
         </div>
    </div>
    </div>
</div>


</div>
@endsection
