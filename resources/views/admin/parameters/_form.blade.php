<div class="row">
    <div class="col-md-12">
        <label for="name">{{ __('Name') }}</label>
        <input type="text" class="form-control" placeholder="{{ __('Name') }}" name="name"
            @if (isset($parameter)) value="{{ $parameter['name'] }}" @else value="{{ old('name') }}" @endif
            required>
    </div>
    <div class=" col-md-12 mt-3">
        <label for="icon">{{ __('Description') }}</label>

        <textarea id="description" name="description">
            @if (isset($parameter))
{{ $parameter->description }}
@else
{{ old('description') }}
@endif
        </textarea>

    </div>
</div>



<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'), {
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
</script>
