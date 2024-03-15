{{-- <h1>{{ $title  }}</h1>
@include('shared.notify',['alertType'=>'alert-warning']) --}}

<h1> list post </h1>
<div class="list-post">
    @each('shared.post', $posts, 'post')
</div>
