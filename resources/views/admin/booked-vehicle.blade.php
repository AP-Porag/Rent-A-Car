@extends('layouts.admin')

@section('content')
    <h2 class="page-title">Booked Vehicle</h2>


    <div class="container">
        <table border="1" class="table datatable-pagination">
            <tr>
                <th> Sr # </th>
                <th> Username </th>
                <th> Car Name </th>
                <th> Form Date </th>
                <th> To Date </th>
                <th> Message</th>

            </tr>
            @forelse ($vehicles as $key=>$vehicle)
                <tr>
                    <td> {{$key+1}} </td>
                    <td> {{$vehicle->User->name}} </td>
                    <td> {{$vehicle->car_details->carname}} </td>
                    <td> {{$vehicle->form_date}} </td>
                    <td> {{$vehicle->to_date}} </td>
                    <td> {{$vehicle->message}} </td>

                </tr>
            @empty
                no data found
            @endforelse
        </table>
    </div>

    </div>
    </div>

@endsection

