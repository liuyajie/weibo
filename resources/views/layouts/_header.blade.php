<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">Test</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li class="navbar-link"><a href="#">用户列表</a></li>
                <li class="dropdown" role="presentation">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('users.show',Auth::user())}}">个人中心</a></li>
                        <li><a href="#">编辑资料</a></li>
                        <li class="divider"></li>
                        <li>
                            <form action="{{route('logout')}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class="btn btn-block btn-sm btn-danger" type="submit" name="button">退出登录</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li>
                    <a href="{{ route('help') }}">
                        <span class="glyphicon glyphicon-header"></span>
                        帮助
                    </a>
                </li>
                <li>
                    <a href="{{ url('login') }}">
                        <span class="glyphicon glyphicon-log-in"></span>
                        登录
                    </a>
                </li>
            @endif
        </ul>
    </div>
</nav>