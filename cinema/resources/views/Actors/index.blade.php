@extends('layout')

@section('css')
    @parent
    <link href="{{ asset('css/actors/index.css') }}" rel="stylesheet" />
@endsection

@section('breadscrumb')
        <li><a href="#">Home</a></li>
        <li class="active"><a href="#">Actors</a></li>
        <li class="active"><a href="#"><strong>Liste</strong></a></li>
@show


@section('js')
    @parent
    <script src="{{ asset('js/actors/index.js') }}"></script>
@endsection

@section('title')
    Liste de mes acteurs
@endsection

@section('subtitle')
    <div class="page-header">
        <h1>
            <i class="fa fa-users page-header-icon"></i>
            Liste de mes acteurs
        </h1>
    </div>
@endsection



@section('content')

    <script>
        init.push(function () {
            $('#jq-datatables-example').dataTable();
            $('#jq-datatables-example_wrapper .table-caption').text('Some header text');
            $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
        });
    </script>

    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Tableaux des acteurs</span>
        </div>
        <div class="panel-body">
            <div class="table-primary">
                <div role="grid" id="jq-datatables-example_wrapper" class="dataTables_wrapper form-inline no-footer">
                    <div class="class="table-header clearfix"></div>
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable no-footer" id="jq-datatables-example" aria-describedby="jq-datatables-example_info">
                            <thead>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Naissance</th>
                                <th>City</th>
                            </thead>
                            <tbody>
                                @foreach($actors as $actor)
                                    <tr class="">
                                        <td class="sorting_1 center">{{ $actor->firstname }}</td>
                                        <td class="sorting_2 center">{{ $actor->lastname }}</td>
                                        <td class="sorting_2 center">{{ $actor->dob }}</td>
                                        <td class="sorting_2 center">{{ $actor->city }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="table-footer clearfix">
                         </div>
            </div>
        </div>
    </div>

@endsection