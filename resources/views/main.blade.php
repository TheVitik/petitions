@extends('layouts.main-layout')
@section('title','Active')
@section('content')
<article class="petition">
    <div class="row">
        <div class="col-8">
            <p class="number">#111</p>
            <p class="petition-title">Title</p>
            <div class="petition-date">
                <i class="fas fa-clock text-primary"></i>
                <span class="creation-date">25-01-2022</span>
            </div>
        </div>
        <div class="col-4">
            <div class="voting">
                <h1>30</h1><p>votes</p>
            </div>
            <div class="vote-progress">
                <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="vote-status">
                <i class="fas fa-check-circle text-success"></i>
                <span>Active</span>
                <i class="fas fa-check-circle text-danger"></i>
                <span>Closed</span>
            </div>
                <input type="text" class="url-text" id="invite" readonly value="${requestScope.path}?page=petition&id=${petition.id}">
                <a class="create-button" href="/delete">Delete</a>
                <a class="create-button " href="vote?id=${petition.id}">Vote</a>
        </div>

    </div>
</article>
<div class="page-counter">
    <a class="current-disabled">&lt;</a>
    <a class="current-count" href="#page1">1</a>
    <a href="#page2">2</a>
    <a href="#page3">3</a>
    <a class="current-disabled">...</a>
    <a href="#page4">4</a>
    <a href="#page5">5</a>
    <a href="#page6">6</a>
    <a class="current-disabled">&gt;</a>
</div>
@endsection
