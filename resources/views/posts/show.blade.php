@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                   Post show list
                    {{ $post->title }}
                    <a class="btn btn-sm btn-default pull-right" href="{{ route('list_posts') }}">Return</a>
                </div>
Post show list
                <div class="panel-body">
                    {{ $post->body }}
                </div>
                <hr>
                <div class="comments">
                  <ul class="list-group">
                  @foreach ($post->comments as $comment)
                  this is empty comment place
                  <li class="list-group-item">
            {{--            <strong>    --}}
          {{--            {{ $comment.>created_at->diffForHumans() }}: &nbsp;  --}}
            {{--            </strong>     --}}
                      {{ $comment->body }}
                      this is empty comment place
                  </li>

                  @endforeach
                   </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
