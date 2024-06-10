@can('edit_specimen')
<a href="{{route('admin.specimens.edit',$specimen['id'])}}" class="btn btn-primary btn-sm">
    <i class="fa fa-edit"></i>
</a>
@endcan

@can('delete_specimen')
<form method="POST" action="{{route('admin.specimens.destroy',$specimen['id'])}}" class="d-inline">
    @csrf
    <input type="hidden" name="_method" value="delete">
    <button type="submit" class="btn btn-danger btn-sm delete_specimens">
        <i class="fa fa-trash"></i>
    </button>
</form>
@endcan
