@extends('layouts.app')
@extends('layouts.app2')

@section('content')
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            </div>
            </div>
        </div>
    </div>
@endsection

                

<div class= "container1">
    
    @foreach($products as $product)
    @if($product->type=='cd')
    <div class="cards">
<strong>CDs</strong></br><br/>
Title: {{$product->title}}<br/>
First Name: {{$product->firstname}}<br/>
PlayLength:{{$product->pageslength}}<br/>
Price: {{$product->price}}<br/></br>

<button><a href="/product/select/{{$product->id}}" class="btn btn-dark" >Select</a><br/></button>
</div>


<br/>
@endif
@endforeach
</div>




<div class="container2">
@foreach($products as $product)
@if($product->type=='book')
<div class="cards">
<strong>Books</strong></br><br/>
Title: {{$product->title}}<br/>
First Name: {{$product->firstname}}<br/>
Pages: {{$product->pageslength}}<br/>
Price:{{$product->price}}<br/></br>

<button><a href="/product/select/{{$product->id}}" class="btn btn-dark">Select</a><br/></button>
</div>
<br/>
@endif
@endforeach
</div>





        

                