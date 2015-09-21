@extends('layout')



@section('js')
    @parent
    <script src="{{ asset('js/realtime.js') }}"> </script>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="{{ asset('js/gmap.js') }}"> </script>
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
    <div class="row">
        <div class="panel">
            <div class="panel-heading">
                <h3>Tous les cinémas de France</h3>
            </div>
            <div class="panel-body">
                <div id="map" style="width: 100%; height: 350px"></div>
            </div>
        </div>

    </div>


    <div class="row">

        <div class="panel widget-threads">
            <div class="panel-heading">
                <span class="panel-title"><i class="panel-title-icon fa fa-comments-o"></i>Recommandations cinémas</span>
            </div>
            <div class="panel-body">

                <div class="thread">
                    <img src="http://www.alpes4science.org/userfiles/logo%20pathe%201_jpg.jpg" alt="" class="thread-avatar">
                    <div class="thread-body">
                        <span class="thread-time">14h</span>
                        <a href="#" class="thread-title">Un film très émouvant</a>
                        <p>Un film superbe avec quelques longeurs mais vraiment sympa. Je recommande :)</p>
                        <div class="thread-info">Commenté par <a href="#" title="">Pathé</a> sur <a href="#" title="">La Ligne Verte</a></div>
                    </div> <!-- / .thread-body -->
                </div> <!-- / .thread -->

                <div class="thread">
                    <img src="http://www.ugc.fr/statique/images/logo-ugc.png" alt="" class="thread-avatar">
                    <div class="thread-body">
                        <span class="thread-time">14h</span>
                        <a href="#" class="thread-title">Superbe chef d'oeuvre</a>
                        <p>Très belle oeuvre de Tarantino je recommade</p>
                        <div class="thread-info">Commenté par <a href="#" title="">UGC</a> sur <a href="#" title="">Gran Torino</a></div>
                    </div> <!-- / .thread-body -->
                </div> <!-- / .thread -->

                <div class="thread">
                    <img src="http://legrandrex.cotecine.fr/image/logo.png?1368434207" alt="" class="thread-avatar">
                    <div class="thread-body">
                        <span class="thread-time">14h</span>
                        <a href="#" class="thread-title">Beau film avec qqs clins d'oeil</a>
                        <p>Film à voir pour se divertir</p>
                        <div class="thread-info">Commenté par <a href="#" title="">Le Grand Rex</a> sur <a href="#" title="">Man Steel</a></div>
                    </div> <!-- / .thread-body -->
                </div> <!-- / .thread -->


            </div> <!-- / .panel-body -->
        </div>
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
                    <span class="panel-title"><i class="panel-title-icon fa fa-tasks"></i>Taches Récentes</span>
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
                        <a href="#" class="task-title">Mettre à jour la fiche Man of Style<span>1 hour left</span></a>
                    </div> <!-- / .task -->

                    <div class="task completed">
                        <span class="label label-warning pull-right">High</span>
                        <div class="fa fa-arrows-v task-sort-icon"></div>
                        <div class="action-checkbox">
                            <label class="px-single"><input type="checkbox" name="" value="" class="px" checked="checked"><span class="lbl"></span></label>
                        </div>
                        <a href="#" class="task-title">Modérer les commentaires inutile de Django <span>58 minutes left</span></a>
                    </div> <!-- / .task -->

                    <div class="task completed">
                        <div class="fa fa-arrows-v task-sort-icon"></div>
                        <div class="action-checkbox">
                            <label class="px-single"><input type="checkbox" name="" value="" class="px" checked="checked"><span class="lbl"></span></label>
                        </div>
                        <a href="#" class="task-title">Créer une fiche The Hobbit</a>
                    </div> <!-- / .task -->

                    <div class="task">
                        <div class="fa fa-arrows-v task-sort-icon"></div>
                        <div class="action-checkbox">
                            <label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
                        </div>
                        <a href="#" class="task-title">Modérer les commentaires The Hobbit 2</a>
                    </div> <!-- / .task -->

                    <div class="task completed">
                        <span class="label label-warning pull-right">High</span>
                        <div class="fa fa-arrows-v task-sort-icon"></div>
                        <div class="action-checkbox">
                            <label class="px-single"><input type="checkbox" name="" value="" class="px" checked="checked"><span class="lbl"></span></label>
                        </div>
                        <a href="#" class="task-title">Créer des séances pour le film Inglorious Basterd<span>58 minutes left</span></a>
                    </div> <!-- / .task -->

                    <div class="task">
                        <div class="fa fa-arrows-v task-sort-icon"></div>
                        <div class="action-checkbox">
                            <label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
                        </div>
                        <a href="#" class="task-title">Modérer les commentaires The Hobbit 2</a>
                    </div> <!-- / .task -->

                    <div class="task">
                        <div class="fa fa-arrows-v task-sort-icon"></div>
                        <div class="action-checkbox">
                            <label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
                        </div>
                        <a href="#" class="task-title">Modérer les commentaires The Hobbit 2</a>
                    </div> <!-- / .task -->

                </div> <!-- / .panel-body -->
            </div> <!-- / .panel -->
        </div>
        <!-- /13. $RECENT_TASKS -->

    </div>




    <script>
        init.push(function () {

            var datas = [];

            $('ville').each(function(){
               var obj = { ville: $(this).data("name"), nb: $(this).data('nb')};
               datas.push(obj);
            });

            console.log(datas);


            Morris.Bar({
                element: 'hero-bar',
                data: datas,
                xkey: 'ville',
                ykeys: ['nb'],
                labels: ['Villes'],
                barRatio: 0.4,
                xLabelAngle: 35,
                hideHover: 'auto',
                barColors: ["#222","#222","#222","#222", "#222" ],
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

                    <div style="display: none">
                        @foreach($actors as $actor)
                            <ville data-name="{{ $actor->city }}" data-nb="{{ $actor->nb }}"></ville>
                        @endforeach
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


    <script>
        init.push(function () {


            $.getJSON( $('#hero-area').data('url'), function( data ) {
                var items = [];

                $.each( data, function( key, val ) {
                    items.push( val.firstname );
                });
                console.log(items);

            });


            var datas = [];



           $.getJSON( $('#hero-area').data('url'), function( data ) {

                Morris.Area({
                    element: 'hero-area',
                    data: data,
                    xkey: 'period',
                    ykeys: ['tarantino', 'williams', 'weber'],
                    labels: names,
                    hideHover: 'auto',
                    lineColors: PixelAdmin.settings.consts.COLORS,
                    fillOpacity: 0.3,
                    behaveLikeLine: true,
                    lineWidth: 2,
                    pointSize: 4,
                    gridLineColor: '#cfcfcf',
                    resize: true
                });

            })


//            $('annee').each(function(){
//                var obj = { period: $(this).data('nb') };
//                $(this).find('director').each(function(){
//                    obj[$(this).data('name')] = $(this).data('nb');
//                });
//                datas.push(obj);
//            });


            var names = [];

            $("annee:first director").each(function(){
                names.push($(this).data('name'));
            });


        });
    </script>

    <div class="row">
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">Répartition des films par les 4 meilleurs réalisateurs</span>
            </div>
            <div class="panel-body">


                <div class="graph-container">
                    <div data-url="{{ url('admin/api/best-directors') }}" id="hero-area" class="graph" style="position: relative;">
                    </div>
                </div>


                <div style="display: none">

                    @foreach($directors as $key => $director)
                        <annee data-nb="{{ $key  }}">
                            @foreach($director as $value)
                                <director data-name="{{ $value['fullname'] }}"
                                  data-nb="{{ $value['nb'] }}"></director>
                            @endforeach
                        </annee>
                    @endforeach



                </div>

            </div>
        </div>
    </div>




    <div class="row">
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
    </div>




@endsection