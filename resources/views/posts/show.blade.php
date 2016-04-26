@extends('main')

@section('title', '| View Post')

@section('content')
    <div class="col-md-8">
        <h3>{{ $post->title }}</h3>
        <p class="lead">{{ $post->body }}</p>
    </div>
    <div class="col-md-4">
        <div class="well">
            <div class="dl-horizontal">
                <dt>Created At:</dt>
                <dd>{{ date('M j,Y h:ia', strtotime($post->created_at)) }}</dd>
            </div>
            <div class="dl-horizontal">
                <dt>Updated:</dt>
                <dd>{{ date('M j,Y h:ia', strtotime($post->updated_at)) }}</dd>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')

@endsection