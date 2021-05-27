@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('All Questions') }}</div>

                <div class="card-body">

               @forelse ( $question as $questions)
                <div class="media">
                    <div class="media-body">
                        <h3><a href="{{ $questions -> url }}">{{ $questions -> title }}</a></h3>
                        <p class="lead">Asked by <a href="{{ $questions->user->url }}">{{ $questions->user->name }}</a><small class="text-muted"> {{ $questions -> created_at -> diffForHumans() }}</small></p>
                        <p>{{ Str::of($questions -> body , 250) }}</p>
                    </div>
                </div>
                <hr>
               @empty
                <div class="media">
                    <div class="media-body">
                        <h3></h3>
                        <p class="lead"></p><small class="text-muted"></small>
                        <p></p>
                    </div>
                </div>



               @endforelse

               {{ $question -> links() }}

              </div>
            </div>
        </div>
    </div>
</div>
@endsection
