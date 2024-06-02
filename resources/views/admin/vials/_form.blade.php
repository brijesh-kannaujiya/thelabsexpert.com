<div class="row">
    <div class="col-md-12">
        <label for="name">{{__('Name')}}</label>
        <input type="text" class="form-control" placeholder="{{__('Name')}}" name="name" @if(isset($vial)) value="{{$vial['name']}}" @else value="{{old('name')}}" @endif required>
    </div>
</div>
