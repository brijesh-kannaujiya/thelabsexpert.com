<div class="row">

    @php
        $testIDs = [];
        if (isset($test->tests) && $test->tests) {
            $testIDs = $test->tests->pluck('test_id')->toArray();
        }
        $vialIDs = [];
        if (isset($test->vials) && $test->vials) {
            $vialIDs = $test->vials->pluck('vial_id')->toArray();
        }
        $specimenIDs = [];
        if (isset($test->specimens) && $test->specimens) {
            $specimenIDs = $test->specimens->pluck('specimen_id')->toArray();
        }

        $CategoryIDs = [];
        if (isset($test->categories) && $test->categories) {
            $CategoryIDs = $test->categories->pluck('id')->toArray();
        }

        $parametersIds = [];
        if (isset($test->parameters) && $test->parameters) {
            $parametersIds = $test->parameters->pluck('id')->toArray();
        }
    @endphp
    {{-- @dd($testsWithoutPackages); --}}
    <div class="col-lg-3">
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input type="text" class="form-control" name="test_name" id="test_name"
                @if (isset($test)) value="{{ $test->test_name }}" @else value="{{ old('test_name') }}" @endif
                required>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label for="select_tests">{{ __('Tests') }}</label>
            <select class="form-control" name="tests[]" id="select_tests" placeholder="{{ __('Tests') }}" multiple>
                @foreach ($testsWithoutPackages as $testdata)
                    <option value="{{ $testdata->id }}" @if (in_array($testdata->id, $testIDs)) selected @endif>
                        {{ $testdata->test_name }}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="col-lg-3">
        <div class="form-group">
            <label for="">{{ __('Category') }}</label>
            <select name="category_ids[]" class="form-control" id="category" multiple>
                <option value="">{{ __('Select') }}</option>
                @foreach ($categories as $key => $category)
                    <option value="{{ $category->id }}" @if (in_array($category->id, $CategoryIDs)) selected @endif>
                        {{ $category['name'] }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label for="">{{ __('Include Parameter') }}</label>
            <select name="parameter_ids[]" class="form-control" id="parameter" multiple>
                <option value="">{{ __('Select') }}</option>
                @foreach ($parameters as $key => $parameter)
                    <option value="{{ $parameter->id }}" @if (in_array($parameter->id, $parametersIds)) selected @endif>
                        {{ $parameter['name'] }}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="col-lg-3">
        <div class="form-group">
            <label for="">{{ __('Vials') }}</label>
            <select name="vial_ids[]" class="form-control" id="vial" multiple>
                <option value="">{{ __('Select') }}</option>
                @foreach ($vials as $key => $vial)
                    <option value="{{ $vial->id }}" @if (in_array($vial->id, $vialIDs)) selected @endif>
                        {{ $vial['name'] }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label for="">{{ __('Specimen') }}</label>
            <select name="specimen_ids[]" class="form-control select2" id="specimens" multiple>
                <option value="">{{ __('Select') }}</option>
                @foreach ($specimens as $key => $specimen)
                    <option value="{{ $specimen->id }}" @if (in_array($specimen->id, $specimenIDs)) selected @endif>
                        {{ $specimen['name'] }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label for="mrp_price">{{ __('MRP') }}</label>
            <div class="input-group form-group mb-3">
                <input type="number" class="form-control" name="mrp_price" min="0" id="mrp_price"
                    @if (isset($test)) value="{{ $test->mrp_price }}" @else value="{{ old('mrp_price') }}" @endif
                    required>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label for="price">{{ __('Price') }}</label>
            <div class="input-group form-group mb-3">
                <input type="number" class="form-control" name="price" min="0" id="price"
                    @if (isset($test)) value="{{ $test->price }}"  @else value="{{ old('price') }}" @endif
                    required>
            </div>
        </div>
    </div>


    <div class="col-lg-3">
        <div class="form-group">
            <label for="fasting">{{ __('Fasting') }}</label>
            <input type="text" class="form-control" name="fasting" id="fasting"
                @if (isset($test)) value="{{ $test->fasting }}" @else value="{{ old('fasting') }}" @endif>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label for="fasting">{{ __('Lab A TAT') }}</label>
            <input type="text" class="form-control" name="report_date" id="report_date"
                @if (isset($test)) value="{{ $test->report_date }}" @else value="{{ old('report_date') }}" @endif>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label for="customer_instructions">{{ __('Customer Instructions') }}</label>
            <input type="text" class="form-control" name="customer_instructions" id="customer_instructions"
                @if (isset($test)) value="{{ $test->customer_instructions }}"  @else value="{{ old('customer_instructions') }}" @endif>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label for="phlebo_instructions">{{ __('Phlebo Instructions') }}</label>
            <input type="text" class="form-control" name="phlebo_instructions" id="phlebo_instructions"
                @if (isset($test)) value="{{ $test->phlebo_instructions }}" @else value="{{ old('phlebo_instructions') }}" @endif>
        </div>
    </div>

    <div class=" col-md-3">
        <label for="icon">{{ __('Icon') }}</label>
        <div class="custom-file">
            <input type="file" name="icon" accept="image/*" class="custom-file-input" id="icon">
            <label class="custom-file-label" for="icon">{{ __('Icon') }}</label>
        </div>
    </div>

    <div class=" col-md-3">
        <label for="banner">{{ __('Banner') }}</label>
        <div class="custom-file">
            <input type="file" name="banner" accept="image/*" class="custom-file-input" id="banner">
            <label class="custom-file-label" for="banner">{{ __('banner') }}</label>
        </div>
    </div>


    <div class=" col-md-12 mt-2">
        <label>{{ __('Short Description') }}</label>
        <div class="form-group">
            <textarea class="col-md-12" name="short_desc">
@if (isset($test))
{{ $test->short_desc }}
@else
{{ old('short_desc') }}
@endif
</textarea>
        </div>
    </div>
    <div class=" col-md-12 mt-2">
        <label>{{ __('Description 1') }}</label>
        <div class="form-group">
            <textarea id="desc_1" name="desc_1">
                @if (isset($test))
{{ $test->desc_1 }}
@else
{{ old('desc_1') }}
@endif
            </textarea>
        </div>
    </div>
    <div class=" col-md-12">
        <label>{{ __('Description 2') }}</label>
        <div class="form-group">
            <textarea id="desc_2" name="desc_2">
                @if (isset($test))
{{ $test->desc_2 }}
@else
{{ old('desc_2') }}
@endif
            </textarea>
        </div>
    </div>



</div>

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#desc_1'), {
            toolbar: [
                'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', '|'
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
                'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', '|'
            ]
        })
        .catch(error => {
            console.error(error);
        });
</script>
