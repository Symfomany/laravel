@extends('layout')



@section('js')
    @parent
    <script src="{{ asset('js/realtime.js') }}"> </script>
@endsection

@section('content')

    <div class="row">
        <div class="pull-right">
            <div class="btn-group">
                <a class="active btn">Simple</a>
                <a class="btn">Advanced</a>
                <a class="btn">Professional</a>
            </div>
        </div>
        <hr class="row" />
    </div>
    <br />
    <br />
    <br />




    <div class="row">

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">Création de film</div>
                <div class="panel-body">
                    <form id="addMovie" action="{{ route('movies.flymovie') }}" method="post">
                        {{ csrf_field() }}
                        <div class="group">
                            <label>Titre</label>
                            <input name="title" class="form-control" type="text" placeholder="Nom de mon film" />
                        </div>

                        <div class="group">
                            <label>Catégorie</label>
                            <select name="categories_id" class="form-control">
                                @foreach(DB::select('SELECT id,title FROM categories') as $categorie)
                                    <option value="{{ $categorie->id }}"> {{ $categorie->title }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="group">
                            <label>Synopsis</label>
                            <textarea class="form-control" name="synopsis"  placeholder="Synopsis de mon film"></textarea>
                        </div>


                        <button class="btn btn-default" type="submit">Enregistrer un film</button>
                    </form>

                </div>
            </div>
        </div>
    </div>



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


    <div class="col-md-12" id="panelajax" data-url="{{ route('comments.ajax') }}">


            <div class="panel panel-warning" id="dashboard-recent">
                <div class="panel-heading">
                    <span class="panel-title"><i class="panel-title-icon fa fa-fire text-danger"></i>Commentaires récents</span>
                    <ul class="nav nav-tabs nav-tabs-xs">
                        <li class="active">
                            <a href="#dashboard-recent-comments" data-toggle="tab">Comments</a>
                        </li>
                    </ul>
                </div> <!-- / .panel-heading -->
                <div class="tab-content">

                    <script>
                        init.push(function () {
                            $('#dashboard-recent .panel-body > div').slimScroll({ height: 300, alwaysVisible: true, color: '#888',allowPageScroll: true });
                        })
                    </script>

                    <div class="widget-comments panel-body tab-pane no-padding fade active in" id="dashboard-recent-comments">
                            <div class="panel-padding no-padding-vr" style="overflow: hidden; width: auto; height: 300px;">

                                @foreach($comments as $comment)

                                    <div class="comment">
                                        <div class="comment-body">
                                            <div class="comment-by">
                                                <a href="#" title="">{{ $comment->user->username  }}</a> commented on <a href="#" title=""></a>
                                            </div>
                                            <div class="comment-text">
                                                {{ $comment->content  }}
                                            </div>
                                            <div class="comment-actions">
                                                <a href="#"><i class="fa fa-pencil"></i>Edit</a>
                                                <a href="#"><i class="fa fa-times"></i>Remove</a>
                                                <span class="pull-right">{{ date_create_from_format('Y-m-d H:i:s', $comment->date_created)->format('d/m/Y H:i') }}</span>
                                            </div>
                                        </div> <!-- / .comment-body -->
                                    </div> <!-- / .comment -->

                                @endforeach


                    </div> <!-- / .widget-comments -->

            </div> <!-- / .widget-threads -->
        </div>
        </div>
    </div>





@endsection