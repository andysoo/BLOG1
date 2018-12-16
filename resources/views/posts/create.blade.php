@extends('layouts.app')
@section('content')
    
    <div class="container">
      <h3 class="text-center text-warning">
        创建新文章
      </h3>
      <hr/>
      @if (count($errors)>0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
      @endif
      <form action="{{route('posts.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title" class="control-label">标题:</label>
          <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="form-group">
          <label for="body" class="control-label">内容:</label>
          <textarea name="body" id="body" rows="8" class="form-control"></textarea>         
        </div>
        <div class="form-group">
          <label for="published_at" class="control-label">发表日期:</label>
          <input type="date" id="published_at" name="published_at" class="form-control" value="{{ date('Y-m-d') }}">
        </div>

        <div class="form-group">
          <button type="submit">提交</button>
        </div>
      </form>
    </div>
@endsection