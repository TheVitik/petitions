@extends('layouts.main-layout')
@section('title','New')
@section('content')
<article class="new">
    <form action="create" method="POST">
        <div class="row">

            <div class="col-8">
                <textarea class="title-text" maxlength="256" id="text" onchange="count()" name="text" required></textarea>
                <span id="symbols" class="count-text">256/256 characters left</span>
            </div>
            <div class="col-4">
                <div class="g-recaptcha" data-sitekey="6LcKCOoaAAAAADNMgERSxmovxGbWPRGC4Bqw7yoR"></div>
                <input type="submit" class="create-button" style="outline:none;" value="Create">
            </div>

        </div>
    </form>
</article>
@endsection
