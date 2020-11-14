@extends('mainedit')
@section('content')
<form action="/employee/update" method="POST">
    <input type="hidden" name="id" value="{{ $employee->id}}">
    @csrf
    <div class='card'>
    <div class='card-header'>
    <h2>Edit employee</h2>
    </div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{$employee->name}}">
    <label for="lastname">lastname:</label>
    <input type="text" name="lastname" id="lastname" value="{{$employee->lastname}}">
    <label for="birthdate">birthdate:</label>
    <input type="text" name="birthdate" id="birthdate" value="{{$employee->birthdate}}">
    <label for="personal_id">personal_id:</label>
    <input type="number" name="personal_id" id="personal_id" value="{{$employee->personal_id}}">
    <label for="salary">salary:</label>
    <input type="number" name="salary" id="salary" value="{{$employee->salary}}">
    <button>Save</button>
    
</form>
<form action="/listAll">
<button >Cancel</button>

</form>
</div>
@endsection