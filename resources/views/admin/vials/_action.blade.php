@can('edit_vials')
<a href="{{route('admin.vials.edit',$vial['id'])}}" class="btn btn-primary btn-sm">
    <i class="fa fa-edit"></i>
</a>
@endcan

@can('delete_vials')
<form method="POST" action="{{route('admin.vials.destroy',$vial['id'])}}" class="d-inline">
    @csrf
    <input type="hidden" name="_method" value="delete">
    <button type="submit" class="btn btn-danger btn-sm delete_vials">
        <i class="fa fa-trash"></i>
    </button>
</form>
@endcan
