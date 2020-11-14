@extends('mainblade')
@section('content')
    <table class="table">
        <tr>
            <td><h3>Employees:</h3></td>
        </tr>
        <tr>
            <td>name</td>
            <td>lastname</td>
            <td>birthdate</td>
            <td>personal_id</td>
            <td>salary</td>
            <td>Actions</td>
        </tr>
        @foreach($employees as $employee)
        <tr>
            <td>{{$employee->name}}</td>
            <td>{{$employee->lastname}}</td>
            <td>{{$employee->birthdate}}</td>
            <td>{{$employee->personal_id}}</td>
            <td>{{$employee->salary}}</td>
            <td>
                <form action="/employee/delete" method="POST">
                    @csrf
                <input type="hidden" name="id" value="{{$employee->id}}">
                <button>Delete</button>
                </form>
                <a href="/employee/indiv?id={{$employee->id}}">Edit</a>
            </td>
        </tr>
       @endforeach
    </table>
    <table class="table">
        <tr>
            <td><h3>Companies:</h3></td>
        </tr>
        <tr>
            <td>name</td>
            <td>code</td>
            <td>address</td>
            <td>city</td>
            <td>country</td>
            <td>Actions</td>
        </tr>
        @foreach ($companies as $company)
        <tr>
            <td>{{$company->name}}</td>
            <td>{{$company->code}}</td>
            <td>{{$company->address}}</td>
            <td>{{$company->city}}</td>
            <td>{{$company->country}}</td>
            <td>
                <form action="/company/delete" method="POST">
                    @csrf
                <input type="hidden" name="id" value="{{$company->id}}">
                <button>Delete</button>
                <a href="/company/indiv?id={{$company->id}}">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection