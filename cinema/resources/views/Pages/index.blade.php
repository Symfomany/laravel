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


    <div class="row">

        <!-- 12. $NEW_USERS_TABLE ==========================================================================

                    New users table
        -->
        <div class="col-md-7">
            <div class="panel panel-dark panel-light-green">
                <div class="panel-heading">
                    <span class="panel-title"><i class="panel-title-icon fa fa-smile-o"></i><strong>5</strong> nouveaux utilisateurs (2 dernières semaines)</span>
                </div> <!-- / .panel-heading -->
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Avatar/Username</th>
                        <th>Nom / Prénom</th>
                        <th>E-mail</th>
                    </tr>
                    </thead>
                    <tbody class="valign-middle">
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="http://www.cliniquetagmed.com/files/2012/08/gravatar.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="#" title="">@rjang</a>
                            </td>
                            <td>Boyer Julien</td>
                            <td>julien@meetserious.com</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="http://www.cliniquetagmed.com/files/2012/08/gravatar.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="#" title="">@rjang</a>
                            </td>
                            <td>Boyer Florent</td>
                            <td>florent@gmail.com</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="http://www.cliniquetagmed.com/files/2012/08/gravatar.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="#" title="">@rjang</a>
                            </td>
                            <td>Boyer Hélène</td>
                            <td>helene@gmail.com</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="http://www.cliniquetagmed.com/files/2012/08/gravatar.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="#" title="">@rjang</a>
                            </td>
                            <td>Boyer Nicolas</td>
                            <td>nicolas@gmail.com</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="http://www.cliniquetagmed.com/files/2012/08/gravatar.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="#" title="">@rjang</a>
                            </td>
                            <td>Verrecchia Ludovic</td>
                            <td>ludo@gmail.com</td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- / .panel -->
        </div>
        <!-- /12. $NEW_USERS_TABLE -->

        <!-- 13. $RECENT_TASKS =============================================================================

                    Recent tasks
        -->
        <div class="col-md-5">
            <!-- Javascript -->
            <script>
                init.push(function () {
                    $('.widget-tasks .panel-body').pixelTasks().sortable({
                        axis: "y",
                        handle: ".task-sort-icon",
                        stop: function( event, ui ) {
                            // IE doesn't register the blur when sorting
                            // so trigger focusout handlers to remove .ui-state-focus
                            ui.item.children( ".task-sort-icon" ).triggerHandler( "focusout" );
                        }
                    });
                    $('#clear-completed-tasks').click(function () {
                        $('.widget-tasks .panel-body').pixelTasks('clearCompletedTasks');
                    });
                });
            </script>
            <!-- / Javascript -->

            <div class="panel widget-tasks panel-dark-gray">
                <div class="panel-heading">
                    <span class="panel-title"><i class="panel-title-icon fa fa-tasks"></i>Recent tasks</span>
                    <div class="panel-heading-controls">
                        <button class="btn btn-xs btn-primary btn-outline dark" id="clear-completed-tasks"><i class="fa fa-eraser text-success"></i> Clear completed tasks</button>
                    </div>
                </div> <!-- / .panel-heading -->
                <!-- Without vertical padding -->
                <div class="panel-body no-padding-vr ui-sortable">

                    <div class="task">
                        <span class="label label-warning pull-right">High</span>
                        <div class="fa fa-arrows-v task-sort-icon"></div>
                        <div class="action-checkbox">
                            <label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
                        </div>
                        <a href="#" class="task-title">A very important task<span>1 hour left</span></a>
                    </div> <!-- / .task -->

                    <div class="task completed">
                        <span class="label label-warning pull-right">High</span>
                        <div class="fa fa-arrows-v task-sort-icon"></div>
                        <div class="action-checkbox">
                            <label class="px-single"><input type="checkbox" name="" value="" class="px" checked="checked"><span class="lbl"></span></label>
                        </div>
                        <a href="#" class="task-title">A very important task<span>58 minutes left</span></a>
                    </div> <!-- / .task -->

                    <div class="task completed">
                        <div class="fa fa-arrows-v task-sort-icon"></div>
                        <div class="action-checkbox">
                            <label class="px-single"><input type="checkbox" name="" value="" class="px" checked="checked"><span class="lbl"></span></label>
                        </div>
                        <a href="#" class="task-title">A regular task</a>
                    </div> <!-- / .task -->

                    <div class="task">
                        <div class="fa fa-arrows-v task-sort-icon"></div>
                        <div class="action-checkbox">
                            <label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
                        </div>
                        <a href="#" class="task-title">A regular task</a>
                    </div> <!-- / .task -->

                    <div class="task">
                        <div class="fa fa-arrows-v task-sort-icon"></div>
                        <div class="action-checkbox">
                            <label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
                        </div>
                        <a href="#" class="task-title">A regular task</a>
                    </div> <!-- / .task -->

                    <div class="task">
                        <span class="label pull-right">Low</span>
                        <div class="fa fa-arrows-v task-sort-icon"></div>
                        <div class="action-checkbox">
                            <label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
                        </div>
                        <a href="#" class="task-title">An unimportant task</a>
                    </div> <!-- / .task -->

                    <div class="task">
                        <span class="label pull-right">Low</span>
                        <div class="fa fa-arrows-v task-sort-icon"></div>
                        <div class="action-checkbox">
                            <label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
                        </div>
                        <a href="#" class="task-title">An unimportant task</a>
                    </div> <!-- / .task -->

                    <div class="task">
                        <div class="fa fa-arrows-v task-sort-icon"></div>
                        <div class="action-checkbox">
                            <label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
                        </div>
                        <a href="#" class="task-title">A regular task</a>
                    </div> <!-- / .task -->

                    <div class="task">
                        <span class="label pull-right">Low</span>
                        <div class="fa fa-arrows-v task-sort-icon"></div>
                        <div class="action-checkbox">
                            <label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
                        </div>
                        <a href="#" class="task-title">An unimportant task</a>
                    </div> <!-- / .task -->
                </div> <!-- / .panel-body -->
            </div> <!-- / .panel -->
        </div>
        <!-- /13. $RECENT_TASKS -->

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