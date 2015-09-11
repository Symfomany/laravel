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
            Morris.Bar({
                element: 'hero-bar',
                data: [
                    { device: 'New-York', geekbench: 5 },
                    { device: 'Paris', geekbench: 8 },
                    { device: 'San Francisco', geekbench: 3 },
                    { device: 'Los Angeles', geekbench: 10 },
                    { device: 'Toronto', geekbench: 15 },
                    { device: 'Bagdad', geekbench: 9 }
                ],
                xkey: 'device',
                ykeys: ['geekbench'],
                labels: ['Villes'],
                barRatio: 0.4,
                xLabelAngle: 35,
                hideHover: 'auto',
                barColors: PixelAdmin.settings.consts.COLORS,
                gridLineColor: '#cfcfcf',
                resize: true
            });
        });
    </script>



    <script>
        init.push(function () {
            // Doughnut Chart Data
            var doughnutChartData = [{
                label: "Enre 18 et 25", data: 50
            }, {
                label: "Entre 25 et 35", data: 30
            }, {
                label: "Entre 35 et 45", data: 90
            }, {
                label: "Entre 45 et 60", data: 70
            }, {
                label: "Plus de 60", data: 80
            }];

            // Init Chart
            $('#jq-flot-pie').pixelPlot(doughnutChartData, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.5,
                        label: {
                            show: true,
                            radius: 3 / 4,
                            formatter: function (label, series) {
                                return '<div style="font-size:14px;text-align:center;padding:2px;color:white;">' + Math.round(series.percent) + '%</div>';
                            },
                            background: { opacity: 0 }
                        }
                    }
                }
            }, {
                height: 205
            });
        });
    </script>


    <div class="row">

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Répartition des acteurs par ville</span>
                </div>
                <div class="panel-body">
                    <div class="graph-container">
                        <div id="hero-bar" class="graph" style="position: relative;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Répartition des acteurs par âge</span>
                </div>
                <div class="panel-body">
                    <div class="graph-container">
                        <div id="jq-flot-pie"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="">
         <a href="{{ route('actors.create' ) }}" class="pull-right btn btn-success btn-medium"><i class="fa fa-plus"></i> Créer un acteur</a>
        <br />
    </div>
    <hr />


    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Tableaux des acteurs</span>
        </div>
        <div class="panel-body">
            <div class="table-primary">
                <div role="grid" id="jq-datatables-example_wrapper" class="dataTables_wrapper form-inline no-footer">
                    <div class="class="table-header clearfix"></div>
                        <table id="list" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable no-footer" aria-describedby="jq-datatables-example_info">
                            <thead>
                                <th>Images</th>
                                <th>Nom</th>
                                <th>Naissance</th>
                                <th>City</th>
                                <th>Films</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach($actors as $actor)
                                    <tr class="">
                                        <td class="col-lg-1"> <a class="thumbnail" href="{{ route('actors.read', ['id' => $actor->id]) }}"><img  class="img-responsive" src="{{ $actor->image }}" /></a> </td>
                                        <td class="sorting_1 center"><i><a href="{{ route('actors.read', ['id' => $actor->id]) }}">{{ $actor->firstname }} {{ $actor->lastname }}</a></i></td>
                                        <td class="sorting_2 center">{{ $actor->dob }}</td>
                                        <td class="sorting_2 center">{{ $actor->city }}</td>
                                        <td class="sorting_2 center"><strong>{{ count($actor->movies) }} <i class="fa fa-film"></i></strong></td>
                                        <td class="sorting_2 center">
                                            <a href="" class="btn btn-small"><i class="fa fa-search"></i> Voir</a>
                                            <a href="{{ route('actors.remove', ['id' => $actor->id]) }}" class="btn btn-danger btn-small"><i class="fa fa-times"></i> Supprimer</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="table-footer clearfix"></div>
            </div>
        </div>
    </div>

@endsection