@extends('layouts.app')
@section('content')
<div class="col-md-8">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>{{ $user->name }}</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    <textarea
                            name="question"
                            id="question_box"
                            cols="30"
                            rows="1"
                            class="form-control"
                            placeholder="what, when, why.. ask"
                    >
                    </textarea>
                    <br>
                    <div class="col-md-6">
                        <label for="anonymous">
                            <input type="checkbox" id="anonymous" checked>
                            Ask Anonymously
                        </label>
                    </div>
                    <div class="col-md-6 pull-right text-right">
                        <button class="btn btn-primary">Ask</button>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr>
                @if($user->questions->count() == 0)
                    <div class="alert alert-warning">
                        {{ $user->name }} has no questions yet .. Feel free to ask him
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection