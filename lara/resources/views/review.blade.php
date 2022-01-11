@extends("lay")

@section("title")Review
@endsection

@section("main_content")
<div class="container">
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
        <label for="email1">Email address</label>
        <input type="email" name="email" id="email" placeholder="Your e-mail" class="form-control">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        <br>
        <br>
        <label for="subject">Subject</label>
        <input type="subject" name="subject" id="subject" placeholder="Your sub" class="form-control">
        <br>
        <label for="message">Your review</label>
        <textarea name="message" id="message" placeholder="Your reviwiviwi" class="form-control"></textarea>
        <br>
        <button type="submit" class="btn btn-primary">Subimitti</button>
    </form>
    <br>
    <h2>Інші відгуки</h2>
    @foreach($rew as $elPaso)
    <div class="row">
        <div class="col">{{$elPaso->subject}}</div>
        <div class="col-6">{{$elPaso->message}}</div>
        <div class="col">{{$elPaso->id}}</div>
    </div>
    @endforeach
    <div></div>
    <button class="btn btn-dark"><a href="/">return</a></button>
</div>
@endsection