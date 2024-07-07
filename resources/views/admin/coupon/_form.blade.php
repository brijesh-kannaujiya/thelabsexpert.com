<div class="row">
    <div class="col-md-6">
        <label for="name">{{__('Name')}}</label>
        <input type="text" class="form-control" placeholder="{{__('Name')}}" name="name" @if(isset($coupon)) value="{{$coupon['name']}}" @else value="{{old('name')}}" @endif required>
    </div>
    <div class=" col-md-6">
        <label for="icon">{{__('Value')}}</label>
        <input type="number" class="form-control" min="2" max="80" placeholder="{{__('Value')}}" name="value" @if(isset($coupon)) value="{{$coupon['value']}}" @else value="{{old('value')}}" @endif required>
    </div>
</div>
