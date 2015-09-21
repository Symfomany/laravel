
    <!-- 2. $MAIN_NAVIGATION ===========================================================================

        Main navigation
    -->
    <div id="main-navbar" class="navbar navbar-inverse" role="navigation">
        <!-- Main menu toggle -->
        <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>

        <div class="navbar-inner">
            <!-- Main navbar header -->
            <div class="navbar-header">

                <!-- Logo -->
                <a href="index.html" class="navbar-brand">
                    <div>
                        <img alt="Pixel Admin" src="{{ asset('images/logo.png') }}"></div>
                    Cinéma
                </a>

                <!-- Main navbar toggle -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

            </div> <!-- / .navbar-header -->

            <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
                <div>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-film"></i> Film</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('movies.index')  }}"><i class="fa fa-search"></i> Voir les films</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('movies.create')  }}"><i class="fa fa-plus"></i> Créer un film</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sitemap"></i> Catégories</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('categories.index') }}"><i class="fa fa-search"></i> Voir les catégories</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-plus"></i> Créer une catégorie</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-anchor"></i> Acteurs</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('actors.index')  }}"><i class="fa fa-search"></i> Voir les acteurs</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('actors.create')  }}"><i class="fa fa-plus"></i> Créer un acteur</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-anchor"></i> Plus</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-video-camera"></i> Réalisateurs</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-search"></i> Voir les catégories</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="fa fa-plus"></i> Créer une catégorie</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Utilisateurs</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-search"></i> Voir les catégories</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="fa fa-plus"></i> Créer une catégorie</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{ route('actors.index')  }}"><i class="fa fa-search"></i> Voir les acteurs</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('actors.create')  }}"><i class="fa fa-plus"></i> Créer un acteur</a></li>
                            </ul>
                        </li>

                        {{--<li>--}}
                            {{--<a href="{{ route('comments.index') }}"><i class="fa fa-comments"></i> Commentaires</a>--}}
                        {{--</li>--}}


                    </ul> <!-- / .navbar-nav -->

                    <div class="right clearfix">
                        <ul class="nav navbar-nav pull-right right-navbar-nav">


                            <li class="nav-icon-btn nav-icon-btn-danger dropdown">
                                <a href="#notifications" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="label">{{ \App\Model\Notifications::count() }}</span>
                                    <i class="nav-icon fa fa-bullhorn"></i>
                                    <span class="small-screen-text">Notifications</span>
                                </a>

                                <!-- NOTIFICATIONS -->

                                <!-- Javascript -->
                                <script>
                                    init.push(function () {
                                        $('#main-navbar-notifications').slimScroll({ height: 250 });
                                    });
                                </script>
                                <!-- / Javascript -->

                                <div class="dropdown-menu widget-notifications no-padding" style="width: 300px">
                                    <div class="notifications-list" id="main-navbar-notifications">

                                        @forelse(\App\Model\Notifications::all() as $notification)
                                        <div class="notification">
                                            <div class="notification-title text-{{ $notification->criticity or "info" }}">{{ $notification->title }}</div>
                                            {{--<div class="notification-description"><strong>{{ $notification->code }}</strong>: Syntax error in index.php at line <strong>461</strong>.</div>--}}
                                            <div class="notification-link"><a href="{{ $notification->movie['id'] }}">{{ $notification->movie['title'] }}</a></div>
                                            <div class="notification-link"><a href="{{ $notification->category['id'] }}">{{ $notification->category['title'] }}</a></div>
                                            <div class="notification-link"><div class="label">{{ count($notification->tags)  }} tags</div> </div>
                                            <div class="notification-ago">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($notification->created_at))->diffForHumans() }}</div>
                                            <div class="notification-icon fa fa-hdd-o bg-{{ $notification->criticity or "info" }}"></div>
                                        </div> <!-- / .notification -->
                                        @empty
                                            <div class="alert">
                                                <i class="fa fa-warbing"></i> Aucune notification en cours
                                            </div>
                                        @endforelse


                                    </div> <!-- / .notifications-list -->
                                    <a href="#" class="notifications-link">MORE NOTIFICATIONS</a>
                                </div> <!-- / .dropdown-menu -->
                            </li>
                            <!-- /3. $END_NAVBAR_ICON_BUTTONS -->


                            {{--<li>--}}
                                {{--<a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-magic"></i> Recherche avancée</a>--}}
                            {{--</li>--}}

                            <li>
                                <form class="navbar-form pull-left">
                                    <input type="text" class="form-control" placeholder="Search">
                                </form>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                                    <img src="assets/demo/avatars/1.jpg" alt="">
                                    <span>{{ Auth::user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><span class="label label-warning pull-right">New</span>Profile</a></li>
                                    <li><a href="#"><span class="badge badge-primary pull-right">New</span>Account</a></li>
                                    <li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ url('auth/logout') }}"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                                </ul>
                            </li>
                        </ul> <!-- / .navbar-nav -->
                    </div> <!-- / .right -->
                </div>
            </div> <!-- / #main-navbar-collapse -->
        </div> <!-- / .navbar-inner -->
    </div> <!-- / #main-navbar -->
    <!-- /2. $END_MAIN_NAVIGATION -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Recherche avancée</h4>
            </div>
            <div class="modal-body">
                <div class="panel">
                    <div class="panel-body">
                        <form action="">
                            <label for="titre">Titre</label>
                            <input type="text" class="form-control" name="titre" placeholder="Titre du film">
                            <label for="annee">Année</label>
                            <input type="text" class="form-control" name="annee" placeholder="2015">
                            <label for="annee">Budget Minimum</label>
                            <input type="text" class="form-control" name="annee" placeholder="€">
                            <label for="annee">Budget Maximum</label>
                            <input type="text" class="form-control" name="annee" placeholder="€">

                            <label for="annee">Durée Minimum</label>
                            <input type="text" class="form-control" name="annee" placeholder="en heure">


                            <label class="col-sm-4 control-label" for="title">Catégorie:</label>
                            <div class="col-sm-8">
                                <select multiple class="form-control" name="bo[]">
                                    @foreach(DB::table('categories')->get() as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <label class="col-sm-4 control-label" for="title">Langues:</label>
                            <div class="col-sm-8">
                                <select  class="form-control" name="bo[]">
                                    <option value="VO">VO</option>
                                    <option value="VOST">VOST</option>
                                    <option value="VOSTFR">VOSTFR</option>
                                </select>
                            </div>

                            <label class="col-sm-4 control-label" for="title">Note de presse</label>
                            <div class="col-sm-8">
                                <select multiple class="form-control" name="bo[]">
                                    <option value="VO">1</option>
                                    <option value="VOST">2</option>
                                    <option value="VOSTFR">3</option>
                                    <option value="VOSTFR">4</option>
                                    <option value="VOSTFR">5</option>
                                </select>
                            </div>


                            <label class="col-sm-4 control-label" for="title">Langue</label>
                            <div class="col-sm-8">
                                <select  class="form-control" name="distributeur[]">
                                    <option value="fr">Français</option>
                                    <option value="en">Anglais</option>
                                </select>
                            </div>

                            <label class="col-sm-4 control-label" for="title">Distributeur:</label>
                            <div class="col-sm-8">
                                <select multiple class="form-control" name="distributeur[]">
                                    <option value="VO">Warner Bros</option>
                                    <option value="VO">Colombia</option>
                                    <option value="VO">Century Fox</option>
                                    <option value="VOST">HBO</option>
                                </select>
                            </div>

                            <label class="col-sm-4 control-label" for="title">Langues:</label>
                            <div class="col-sm-8">
                                <input type="radio" name="visible" value="0" id="vis"><label for="vis">Visible</label>
                                <input type="radio" name="visible" value="1" id="invis"><label for="invis">Invisible</label>
                            </div>



                        </form>
                    </div>
                </div>

            </div> <!-- / .modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div> <!-- / .modal-content -->
    </div> <!-- / .modal-dialog -->
</div>