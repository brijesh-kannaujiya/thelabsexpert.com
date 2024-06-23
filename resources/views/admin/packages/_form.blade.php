<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="">{{__('Package name')}}</label>
            <input type="text" class="form-control" placeholder="{{__('Package name')}}" name="name" @if(isset($package)) value="{{$package['name']}}" @endif required>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group">
            <label for="select_tests">{{__('Tests')}}</label>

            <select class="form-control" name="tests[]" id="select_tests" placeholder="{{__('Tests')}}" multiple>
                @if(isset($package))

                @foreach($package['tests'] as $test)

                <option value="{{$test['test']['id']}}" selected> {{$test['test']['test_name']}}</option>
                @endforeach
                @endif
            </select>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="mrp_price">{{__('MRP')}}</label>
            <div class="input-group form-group mb-3">
                <input type="number" class="form-control" name="mrp_price" min="0" id="mrp_price" @if(isset($package)) value="{{$package->mrp_price}}" @endif required>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group">
            <label for="price">{{__('Price')}}</label>
            <div class="input-group form-group mb-3">
                <input type="number" class="form-control" name="price" min="0" id="price" @if(isset($package)) value="{{$package['price']}}" @endif placeholder="{{__('Price')}}" required>
                <div class="input-group-append">
                    <span class="input-group-text">
                        {{-- {{get_currency()}} --}}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class=" col-md-4">
        <label for="icon">{{__('Icon')}}</label>
        <div class="custom-file">
            <input type="file" name="icon" accept="image/*" class="custom-file-input" id="icon">
            <label class="custom-file-label" for="icon">{{__('Icon')}}</label>
        </div>
    </div>

    <div class=" col-md-4">
        <label for="banner">{{__('Banner')}}</label>
        <div class="custom-file">
            <input type="file" name="banner" accept="image/*" class="custom-file-input" id="banner">
            <label class="custom-file-label" for="banner">{{__('banner')}}</label>
        </div>
    </div>

    <div class=" col-md-12 mt-2">
        <label>{{__('Short Description')}}</label>
        <div class="form-group">
            <textarea class="col-md-12" rows="3" name="short_desc" required>@if(isset($package)) {{$package->short_desc}} @endif
            </textarea>
        </div>
    </div>
    <div class=" col-md-12 mt-2">
        <label>{{__('Description 1')}}</label>
        <div class="form-group">
            <textarea id="desc_1" name="desc_1">
                @if(isset($package)) {{$package->desc_1}} @endif
            </textarea>
        </div>
    </div>
    <div class=" col-md-12">
        <label>{{__('Description 2')}}</label>
        <div class="form-group">
            <textarea id="desc_2" name="desc_2">
                @if(isset($package)) {{$package->desc_2}} @endif
            </textarea>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#desc_1'), {
            toolbar: [
                'heading', '|'
                , 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', '|'
            ]
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error(error);
        });


    ClassicEditor
        .create(document.querySelector('#desc_2'), {
            toolbar: [
                'heading', '|'
                , 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', '|'
            ]
        })
        .catch(error => {
            console.error(error);
        });

</script>
