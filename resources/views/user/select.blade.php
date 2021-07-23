@extends('layouts.app2')

<div class="container1">
    <div class="cards">
    <strong>{{$products->type}}</strong></br>
    ID:{{$products->id}}<br/>
    Title: {{$products->title}}<br/>
    First Name: {{$products->firstname}}<br/>
    Last Name: {{ $products->mainname}}<br/>
    PlayLength/Pages:{{$products->pageslength}}<br/>
    Price: {{$products->price}}<br/></br>
    <button><a href="/user" class="btn btn-dark">Back</a><br/></button>
</div>
</div>




