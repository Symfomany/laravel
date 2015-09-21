@extends('layout')



@section('js')
    @parent
    <script src="{{ asset('js/realtime.js') }}"> </script>

@endsection

@section('content')

    <div class="row">
        <div class="pull-right">
            <div class="btn-group">
                <a href="{{ route('home') }}" class="active btn">Simple</a>
                <a href="{{ route('advanced') }}" class="btn">Advanced</a>
                <a href="{{ route('professional') }}" class="btn">Professional</a>
            </div>
        </div>
        <hr class="row" />
    </div>
    <br />
    <br />
    <br />


    <div class="row"><!-- DEBUT DIV ROW stats panel -->


        <div class="col-md-6"> <!-- Moyenne age acteurs -->

            <!-- 5. $EXAMPLE_NOTIFICATIONS =====================================================================

                            Notifications example
            -->
            <div class="stat-panel">
                <!-- Success background, bordered, without top and bottom borders, without left border, without padding, vertically and horizontally centered text, large text -->
                <a href="#" class="stat-cell col-xs-5 bg-success bordered no-border-vr no-border-l no-padding valign-middle text-center text-bg">
                    Moyenne d'age des acteurs<br><span class="text-lg"><strong>38</strong> ans</span>
                </a> <!-- /.stat-cell -->
                <!-- Without padding, extra small text -->
                <div class="stat-cell col-xs-7 no-padding valign-middle">
                    <!-- Add parent div.stat-rows if you want build nested rows -->
                    <div class="stat-rows">
                        <div class="stat-row">
                            <!-- Success background, small padding, vertically aligned text -->
                            <a href="#" class="stat-cell bg-success padding-sm valign-middle">
                                8 à Lyon
                            </a>
                        </div>
                        <div class="stat-row">
                            <!-- Success darken background, small padding, vertically aligned text -->
                            <a href="#" class="stat-cell bg-success darken padding-sm valign-middle">
                                5 à Paris
                            </a>
                        </div>
                        <div class="stat-row">
                            <!-- Success darker background, small padding, vertically aligned text -->
                            <a href="#" class="stat-cell bg-success darker padding-sm valign-middle">
                                3 à Marseille
                            </a>
                        </div>
                    </div> <!-- /.stat-rows -->
                </div> <!-- /.stat-cell -->
            </div> <!-- /.stat-panel -->

        </div> <!-- Fin Moyenne age acteurs -->

        <div class="col-md-6"> <!-- stats commentaires -->

            <div class="stat-panel">
                <!-- Success background, bordered, without top and bottom borders, without left border, without padding, vertically and horizontally centered text, large text -->
                <a href="#" class="stat-cell col-xs-5 bg-warning bordered no-border-vr no-border-l no-padding valign-middle text-center text-bg">
                    Nombre de commentaires<br><span class="text-lg"><strong>18</strong></span>
                </a> <!-- /.stat-cell -->
                <!-- Without padding, extra small text -->
                <div class="stat-cell col-xs-7 no-padding valign-middle">
                    <!-- Add parent div.stat-rows if you want build nested rows -->
                    <div class="stat-rows">
                        <div class="stat-row">
                            <!-- Success background, small padding, vertically aligned text -->
                            <a href="#" class="stat-cell bg-warning padding-sm valign-middle">
                                6 actifs

                            </a>
                        </div>
                        <div class="stat-row">
                            <!-- Success darken background, small padding, vertically aligned text -->
                            <a href="#" class="stat-cell bg-warning darken padding-sm valign-middle">
                                4 en cours de validation

                            </a>
                        </div>
                        <div class="stat-row">
                            <!-- Success darker background, small padding, vertically aligned text -->
                            <a href="#" class="stat-cell bg-warning darker padding-sm valign-middle">
                                8 inactifs

                            </a>
                        </div>
                    </div> <!-- /.stat-rows -->
                </div> <!-- /.stat-cell -->
            </div> <!-- /.stat-panel -->
            <!-- /5. $EXAMPLE_NOTIFICATIONS -->

        </div>  <!-- Fin stats commentaires -->



    </div>


    <div class="row"> <!-- Début DIV ROW stats pies -->

        <!-- 6. $EASY_PIE_CHARTS ===========================================================================

    Easy Pie charts
-->
        <!-- Javascript -->
        <script>
            init.push(function () {
                // Easy Pie Charts
                var easyPieChartDefaults = {
                    animate: 2000,
                    scaleColor: false,
                    lineWidth: 6,
                    lineCap: 'square',
                    size: 90,
                    trackColor: '#e5e5e5'
                }
                $('#easy-pie-chart-1').easyPieChart($.extend({}, easyPieChartDefaults, {
                    barColor: PixelAdmin.settings.consts.COLORS[1]
                }));
                $('#easy-pie-chart-2').easyPieChart($.extend({}, easyPieChartDefaults, {
                    barColor: PixelAdmin.settings.consts.COLORS[1]
                }));
                $('#easy-pie-chart-3').easyPieChart($.extend({}, easyPieChartDefaults, {
                    barColor: PixelAdmin.settings.consts.COLORS[1]
                }));
            });
        </script>
        <!-- / Javascript -->


        <div class="col-md-4">
            <div class="stat-panel text-center">
                <div class="stat-row">
                    <!-- Dark gray background, small padding, extra small text, semibold text -->
                    <div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
                        <i class="fa fa-comments"></i>&nbsp;&nbsp;Taux de commentaires actifs
                    </div>
                </div> <!-- /.stat-row -->
                <div class="stat-row">
                    <!-- Bordered, without top border, without horizontal padding -->
                    <div class="stat-cell bordered no-border-t no-padding-hr">
                        <div class="pie-chart" data-percent="54.545454545455" id="easy-pie-chart-1">
                            <div class="pie-chart-label">55%</div>
                    </div>
                </div> <!-- /.stat-row -->
            </div> <!-- /.stat-panel -->
        </div>
        </div>

        <div class="col-md-4">
            <div class="stat-panel text-center">
                <div class="stat-row">
                    <!-- Dark gray background, small padding, extra small text, semibold text -->
                    <div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
                        <i class="fa fa-star"></i>&nbsp;&nbsp;Taux de films en favoris
                    </div>
                </div> <!-- /.stat-row -->
                <div class="stat-row">
                    <!-- Bordered, without top border, without horizontal padding -->
                    <div class="stat-cell bordered no-border-t no-padding-hr">
                        <div class="pie-chart" data-percent="37.5" id="easy-pie-chart-2">
                            <div class="pie-chart-label">38%</div>
                    </div>
                </div> <!-- /.stat-row -->
            </div> <!-- /.stat-panel -->
        </div>
        </div>

        <div class="col-md-4">
            <div class="stat-panel text-center">
                <div class="stat-row">
                    <!-- Dark gray background, small padding, extra small text, semibold text -->
                    <div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
                        <i class="fa fa-video-camera"></i>&nbsp;&nbsp;Taux de films diffusés
                    </div>
                </div> <!-- /.stat-row -->
                <div class="stat-row">
                    <!-- Bordered, without top border, without horizontal padding -->
                    <div class="stat-cell bordered no-border-t no-padding-hr">
                        <div class="pie-chart" data-percent="56.25" id="easy-pie-chart-3">
                            <div class="pie-chart-label">56%</div>
                    </div>
                </div> <!-- /.stat-row -->
            </div> <!-- /.stat-panel -->
        </div>


        <!-- /6. $EASY_PIE_CHARTS -->

        </div>
    </div>

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

        <script>
            init.push(function () {
                $('#dashboard-support-tickets .panel-body > div').slimScroll({ height: 300, alwaysVisible: true, color: '#888',allowPageScroll: true });
            })
        </script>

        <div class="col-md-6">
            <div class="panel panel-success widget-support-tickets" id="dashboard-support-tickets">
                <div class="panel-heading">
                    <span class="panel-title"><i class="panel-title-icon fa fa-bullhorn"></i>Prochaines séances</span>
                    <div class="panel-heading-controls">
                        <div class="panel-heading-text"><a href="#">8 séances à venir</a></div>
                    </div>
                </div> <!-- / .panel-heading -->
                <div class="panel-body tab-content-padding">
                    <!-- Panel padding, without vertical padding -->
                <div class="panel-padding no-padding-vr" style="overflow: hidden; width: auto; height: 300px;">

                            <!-- / .ticket -->

                            <div class="ticket">
                                <span class="label label-warning ticket-label">Sortis dans 6 jours</span>
                                <a href="#" title="" class="ticket-title">Resident Evil<span>[#28]</span></a>
								<span class="ticket-info">
									Diffusé à <a href="#">Pathé Bellecour </a>
								</span>
                            </div> <!-- / .ticket -->

                            <div class="ticket">
                                <span class="label label-info ticket-label">Sortis dans 2 jours</span>
                                <a href="#" title="" class="ticket-title">
                                    <i class="fa fa-warning text-danger"></i>Les Minions<span>[#3]</span>
                                </a>
								<span class="ticket-info">
									Diffusé à <a href="#">Le Grand Rex</a>
								</span>
                            </div> <!-- / .ticket -->

                            <div class="ticket">
                                <span class="label label-success ticket-label">Sortis dans 15 jours</span>
                                <a href="#" title="" class="ticket-title">Le seigneur des anneaux<span>[#15]</span></a>
								<span class="ticket-info">
									Diffusé à <a href="#" title="">UGC LYon</a>
								</span>
                            </div>

                            <div class="ticket">
                                <span class="label label-success ticket-label">Sortis dans 23 jours</span>
                                <a href="#" title="" class="ticket-title">Godzilla<span>[#23]</span></a>
								<span class="ticket-info">
									Diffusé à <a href="#" title="">Les 7 Parnassiens</a>
								</span>
                            </div>

                            <div class="ticket">
                                <span class="label label-success ticket-label">Sortis dans 27 jours</span>
                                <a href="#" title="" class="ticket-title">Man of Steel<span>[#20]</span></a>
								<span class="ticket-info">
									Diffusé à <a href="#" title="">Les 7 Parnassiens</a>
								</span>
                            </div>


                        </div>
                    </div>
                </div> <!-- / .panel-body -->
            </div> <!-- / .panel -->
        </div>






@endsection