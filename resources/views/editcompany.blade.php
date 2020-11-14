@extends('mainedit')
@section('content')
<form action="/Company/update" method="POST">
    <input type="hidden" name="id" value="{{ $companies->id}}">
    @csrf
    <div class="card">
        <div class="card-header">
            <h2>Edit Company</h2>
        </div>
   
    
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{$companies->name}}">
    <label for="code">code:</label>
    <input type="number" name="code" id="code" value="{{$companies->code}}">
    <label for="address">address:</label>
    <input type="text" name="address" id="address" value="{{$companies->address}}">
    <label for="city">city:</label>
    <input type="text" name="city" id="city" value="{{$companies->city}}">
    <label for="country">country:</label>
    <input type="text" name="country" id="country" value="{{$companies->country}}">
    <button>Save</button>
</form>
<form action="/listAll">
<button >Cancel</button>
</form>
</div>
@endsection