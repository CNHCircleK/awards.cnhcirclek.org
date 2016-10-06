@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$award->name}}</div>

                    <div class="panel-body">
                        {!! BootForm::open()->action(action('AwardController@update', $award->slug))->patch() !!}
                        {!! BootForm::text('Name', 'name', $award->name) !!}
                        {!! BootForm::text('Slug', 'slug', $award->slug) !!}
                        <div class="form-group">
                            {!! Form::label('Description') !!}
                            {!! Form::textarea('description', $award->description, ['class' => 'form-control']) !!}
                        </div>
                        {!! BootForm::date('Open', 'open', $award->open) !!}
                        {!! BootForm::date('Deadline', 'deadline', $award->deadline) !!}
                        {!! BootForm::submit('Save') !!}
                        {!! BootForm::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection