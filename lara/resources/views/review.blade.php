@extends("lay")

@section("title")Review
@endsection

@section("main_content")
<h1>Please write Review</h1>

@if($errors->any())
<div>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="/review/check" class="form-group">
    @csrf
    <input type="email" name="email" id="email" placeholder="Your e-mail" class="form-control">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <br>
    <br>
    <input type="subject" name="subject" id="subject" placeholder="Your sub" class="form-control">
    <br>

    <textarea name="message" id="message" placeholder="Your reviwiviwi" class="form-control"></textarea>
    <br>
    <button type="submit" class="btn btn-primary">Subimitti</button>
</form>
<br>
<button class="btn btn-dark"><a href="/">return</a></button>
@endsection