<div class="form-group">
    {{ Form::label('title', 'Title', ['class' => 'form-label']) }}
    {{ Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Title', ['class' => 'form-label']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<a href="/admin/employers" class="btn btn-default">Back</a>
<button type="submit" class="btn btn-default">Submit</button>