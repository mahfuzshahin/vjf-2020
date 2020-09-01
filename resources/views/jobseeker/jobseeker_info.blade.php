@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Jobseeker Info</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table width="100%" class="table table-striped table-bordered table-hover" id="example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Cell</th>
                                <th>Email</th>
                                <th>Category</th>
                                <th>Experience</th>
                                <th>Skill</th>
                                <th>Resume</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($jobseekers as $index=>$value)
                            <tr class="odd gradeX">
                            
                                <td>{{++$index}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->address}}</td>
                                <td>{{$value->cell}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->category}}</td>
                                <td>{{$value->experience}}</td>
                                <td>{{$value->skill}}</td>
                                <td> <a href="/resume/{{$value->resume}}" type="button" target="_blank">Resume</a>
                                </td>
                            
                            </tr>
                            @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/dataTables.responsive.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable({
        responsive: true
        });
    });
    </script>

<script>
   /* $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });*/
/*     $(document).ready( function () {
    $('#example').DataTable();
} ); */
/*     $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "order": [[ 0, "desc" ]]
    } );
} ); */
</script>
@endsection