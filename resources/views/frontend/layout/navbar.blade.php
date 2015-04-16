<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="/">ONRCMS</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">

                <?php ?>
                @foreach($menu['menu'] as $menus)
                     <li><a href="{{$menus->url}}">{{$menus->title}}</a></li>

                @endforeach



            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->
