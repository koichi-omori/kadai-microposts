@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favorite($micropost->id))
        {!! Form::open(['route' => ['users.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['users.favorites', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-info btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif