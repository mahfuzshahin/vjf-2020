@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employer Info</div>
                <div class="card-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Company</th>
                                <th>Person</th>
                                <th>Category</th>
                                <th>Address</th>
                                <th>Cell</th>
                                <th>Email</th>
                                <th>Skill</th>
                                <th>Task</th>
                                <th>Salary</th>
                                <th>Logo</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($employers as $index=>$value)
                            <tr class="odd gradeX">
                                <td>{{++$index}}</td>
                                <td>{{$value->company_name}}</td>
                                <td>{{$value->person_name}}</td>
                                <td>{{$value->job_category}}</td>
                                <td>{{$value->address}}</td>
                                <td>{{$value->cell}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->skill}}</td>
                                <td>{{$value->task}}</td>
                                <td>{{$value->salary}}</td>
                                <td> <a href="/logo/{{$value->logo}}" type="button" target="_blank">Logo</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
   /* $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });*/
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "order": [[ 0, "desc" ]]
    } );
} );
</script>
@endsection