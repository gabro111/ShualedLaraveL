@extends('mainblade')
@section('content')

    <table>
        <h3>Company Adder:</h3>
        <tr>
            <td>name</td>
            <td>code</td>
            <td>address</td>
            <td>city</td>
            <td>country</td>
        </tr>

        <form action=/company/add method="POST">
            @csrf
            <tr>
            <td><input type="text" name=name placeholder="Name:"></td>
            <td><input type="number" name=code placeholder="Code:"></td>
            <td><input type="text" name=address placeholder="Address:"></td>
            <td><input type="text" name=city placeholder="City:"></td>
            <td><input type="text" name=country placeholder="Country:"></td>
            <td><button>Submit</button></td>
            
                
            </tr>

        </form>
    </table>
    <table>
        <h3>Employee Adder</h3>
        <tr>
            <td>name</td>
            <td>lastname</td>
            <td>birthdate</td>
            <td>personal_id</td>
            <td>salary</td>
        </tr>

        <form action=/employee/add method="POST">
            @csrf
            <tr>
            <td><input type="text" name=name placeholder="Name:"></td>
            <td><input type="text" name=lastname placeholder="lastname:"></td>
            <td><input type="date" name=birthdate ></td>
            <td><input type="number" name=personal_id placeholder="personal_id:"></td>
            <td><input type="number" name=salary placeholder="salary:"></td>
            <td><button>Submit</button></td>
            
                
            </tr>

        </form>
    </table>
    @endsection
