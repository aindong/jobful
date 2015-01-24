<html>
<header>

    <link rel="stylesheet" href="/packages/bootstrap/3/css/bootstrap.min.css"/>
</header>
<body>

<div class="content">
    {{ Form::open(['route' => 'user.dologin', 'class' => 'form']) }}
        <div class="form-group">
            {{ Form::label('email', 'Email', ['class' => 'form-label']) }}
            {{ Form::email('lname', null, ['class' => 'form-control', 'required' => 'required']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password', ['class' => 'form-label']) }}
            {{ Form::email('password', null, ['class' => 'form-control', 'required' => 'required']) }}
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    {{ Form::close() }}
</div>

<script type="text/javascript" src="/js/jquery/jquery.min.js"></script>
<script type="text/javascript" href="/packages/bootstrap/3/js/bootstrap.min.js"></script>
</body>
</html>