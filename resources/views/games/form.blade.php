<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($game->name) ? $game->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="control-label">{{ 'Category' }}</label>
    <input class="form-control" name="category" type="text" id="category" value="{{ isset($game->category) ? $game->category : ''}}" >
    {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('platform') ? 'has-error' : ''}}">
    <label for="platform" class="control-label">{{ 'Platform' }}</label>
    <input class="form-control" name="platform" type="text" id="platform" value="{{ isset($game->platform) ? $game->platform : ''}}" >
    {!! $errors->first('platform', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    <label for="photo" class="control-label">{{ 'Photo' }}</label>
    <input class="form-control" name="photo" type="file" id="photo" value="{{ isset($game->photo) ? $game->photo : ''}}" >
    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <select name="status" class="form-control" id="status" >
    @foreach (json_decode('{"incomplete":"Incomplete","in_process":"In process","pause":"Pause","finished":"Finished"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($game->status) && $game->status == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('buy_date') ? 'has-error' : ''}}">
    <label for="buy_date" class="control-label">{{ 'Buy Date' }}</label>
    <input class="form-control" name="buy_date" type="date" id="buy_date" value="{{ isset($game->buy_date) ? $game->buy_date : ''}}" >
    {!! $errors->first('buy_date', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
