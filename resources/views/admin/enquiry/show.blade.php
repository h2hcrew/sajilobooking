@extends('backend.layouts.master')

@section('content')
    <div class="container">
        <div class="row">
{{--            @include('admin.sidebar')--}}

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Enquiry {{ $enquiry->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/enquiry') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/enquiry/' . $enquiry->id . '/edit') }}" title="Edit Enquiry"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/enquiry' . '/' . $enquiry->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Enquiry" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $enquiry->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $enquiry->name }} </td></tr><tr><th> Email </th><td> {{ $enquiry->email }} </td></tr><tr><th> Message </th><td> {{ $enquiry->message }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
