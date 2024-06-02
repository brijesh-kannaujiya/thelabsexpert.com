<div class="row">
    <div class="col-md-6">
        <label for="name">{{__('Name')}}</label>
        <input type="text" class="form-control" placeholder="{{__('Name')}}" name="name" @if(isset($category)) value="{{$category['name']}}" @else value="{{old('name')}}" @endif required>
    </div>
    <div class=" col-md-6">
        <label for="icon">{{__('Icon')}}</label>
        <div class="custom-file">
            <input type="file" name="icon" accept="image/*" class="custom-file-input" id="icon">
            <label class="custom-file-label" for="icon">{{__('Icon')}}</label>
        </div>
    </div>
</div>
<div class="row pt-3">
    <div class="col-md-12">
        <label for="description">{{__('Description')}}</label>
        <textarea name="description" id="description" rows="3" class="form-control" placeholder="{{__('Description')}}" required>@if(isset($category)) {{$category['description']}} @else {{ old('description') }} @endif </textarea>
    </div>
</div>
