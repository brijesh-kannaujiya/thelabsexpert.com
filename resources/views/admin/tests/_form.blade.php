<div class="row">

    @php
    $testIDs = [];
    if ($test->tests) {
    $testIDs = $test->tests->pluck('test_id')->toArray();
    }

    @endphp
    {{-- @dd($testsWithoutPackages); --}}
    <div class="col-lg-3">
        <div class="form-group">
            <label for="name">{{__('Name')}}</label>
            <input type="text" class="form-control" name="test_name" id="test_name" @if(isset($test)) value="{{$test->test_name}}" @endif required>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label for="select_tests">{{__('Tests')}}</label>
            <select class="form-control" name="tests[]" id="select_tests" placeholder="{{__('Tests')}}" multiple>
                @foreach($testsWithoutPackages as $testdata)
                <option value="{{$testdata->id}}" @if (in_array($testdata->id, $testIDs)) selected @endif> {{$testdata->test_name}}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="col-lg-3">
        <div class="form-group">
            <label for="">{{__('Category')}}</label>
            <select name="category_id" class="form-control" id="category">
                <option value="">{{__('Select')}}</option>
                @foreach($categories as $key => $category)
                <option value="{{$category->id}}" @if(isset($test) && ($test->category_id == $category->id)) selected @endif>{{$category['name']}}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="col-lg-3">
        <div class="form-group">
            <label for="">{{__('Vials')}}</label>
            <select name="vial_id" class="form-control" id="vial" required>
                <option value="">{{__('Select')}}</option>
                @foreach($vials as $key => $vial)
                <option value="{{$vial->id}}" @if(isset($test) && ($test->vial_id == $vial->id)) selected @endif>{{$vial['name']}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label for="">{{__('Specimen')}}</label>
            <select name="specimen_id" class="form-control select2" id="specimens" required>
                <option value="">{{__('Select')}}</option>
                @foreach($specimens as $key => $specimen)
                <option value="{{$specimen->id}}" @if(isset($test) && ($test->specimen_id == $specimen->id)) selected @endif>{{$specimen['name']}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label for="mrp_price">{{__('MRP')}}</label>
            <div class="input-group form-group mb-3">
                <input type="number" class="form-control" name="mrp_price" min="0" id="mrp_price" @if(isset($test)) value="{{$test->mrp_price}}" @endif required>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label for="price">{{__('Price')}}</label>
            <div class="input-group form-group mb-3">
                <input type="number" class="form-control" name="price" min="0" id="price" @if(isset($test)) value="{{$test->price}}" @endif required>
            </div>
        </div>
    </div>


    <div class="col-lg-3">
        <div class="form-group">
            <label for="fasting">{{__('Fasting')}}</label>
            <input type="text" class="form-control" name="fasting" id="fasting" @if(isset($test)) value="{{$test->fasting}}" @endif>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label for="fasting">{{__('Lab A TAT')}}</label>
            <input type="text" class="form-control" name="report_date" id="report_date" @if(isset($test)) value="{{$test->report_date}}" @endif>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label for="customer_instructions">{{__('Customer Instructions')}}</label>
            <input type="text" class="form-control" name="customer_instructions" id="customer_instructions" @if(isset($test)) value="{{$test->customer_instructions}}" @endif>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label for="phlebo_instructions">{{__('Phlebo Instructions')}}</label>
            <input type="text" class="form-control" name="phlebo_instructions" id="phlebo_instructions" @if(isset($test)) value="{{$test->phlebo_instructions}}" @endif>
        </div>
    </div>

    <div class=" col-md-3">
        <label for="icon">{{__('Icon')}}</label>
        <div class="custom-file">
            <input type="file" name="icon" accept="image/*" class="custom-file-input" id="icon">
            <label class="custom-file-label" for="icon">{{__('Icon')}}</label>
        </div>
    </div>

    <div class=" col-md-3">
        <label for="banner">{{__('Banner')}}</label>
        <div class="custom-file">
            <input type="file" name="banner" accept="image/*" class="custom-file-input" id="banner">
            <label class="custom-file-label" for="banner">{{__('banner')}}</label>
        </div>
    </div>


    <div class=" col-md-12 mt-2">
        <label>{{__('Short Description')}}</label>
        <div class="form-group">
            <textarea class="col-md-12" name="short_desc">@if(isset($test)) {{$test->short_desc}} @endif
            </textarea>
        </div>
    </div>
    <div class=" col-md-12 mt-2">
        <label>{{__('Description 1')}}</label>
        <div class="form-group">
            <textarea id="desc_1" name="desc_1">
                @if(isset($test)) {{$test->desc_1}} @endif
            </textarea>
        </div>
    </div>
    <div class=" col-md-12">
        <label>{{__('Description 2')}}</label>
        <div class="form-group">
            <textarea id="desc_2" name="desc_2">
                @if(isset($test)) {{$test->desc_2}} @endif
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
