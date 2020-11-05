<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('subcategory') ? 'has-error' : ''}}">
    {!! Form::label('subcategory', 'Subcategory', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('subcategory', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('subcategory', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('category') ? 'has-error' : ''}}">
    <div class="col-md-12">
        {!! Form::Label('item', 'Select Category:') !!}
        
        {!! Form::select('item_id', $items, isset($product)?$product->category:null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row justify-content-center">
    <div class="col-lg-4 col-12 align-content-center">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
