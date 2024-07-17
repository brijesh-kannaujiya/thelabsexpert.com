@can('edit_parameters')
    <a href="{{ route('admin.parameters.edit', $parameter['id']) }}" class="btn btn-primary btn-sm">
        <i class="fa fa-edit"></i>
    </a>
@endcan

@can('delete_parameters')
    <form method="POST" action="{{ route('admin.parameters.destroy', $parameter['id']) }}" class="d-inline">
        @csrf
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-danger btn-sm delete_parameter">
            <i class="fa fa-trash"></i>
        </button>
    </form>
@endcan
