@can('edit_test')

<a href="{{route('admin.tests.edit',$test['id'])}}" class="btn btn-primary btn-sm">
    <i class="fa fa-edit"></i>
</a>
@endcan




@can('delete_test')
<form method="POST" action="{{route('admin.tests.destroy',$test['id'])}}" class="d-inline">
    @csrf
    <input type="hidden" name="_method" value="delete">
    <button type="submit" class="btn btn-danger btn-sm delete_test">
        <i class="fa fa-trash"></i>
    </button>
</form>
@endcan
