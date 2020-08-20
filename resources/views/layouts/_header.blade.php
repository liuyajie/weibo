<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">Test</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
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
        </ul>
    </div>
</nav>