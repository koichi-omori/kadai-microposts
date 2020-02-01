@if (Auth::id())
    @if (Auth::user()->is_favorite($micropost->id))
        {!! Form::open(['route' => ['users.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['users.favorites', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-info btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
@endif