{{-- @can('edit_coupon')
<a href="{{route('admin.coupon.edit',$coupon['id'])}}" class="btn btn-primary btn-sm">
    <i class="fa fa-edit"></i>
</a>
@endcan --}}

@can('delete_prescriptions')
    <form method="POST" action="{{ route('admin.prescriptions.destroy', $coupon['id']) }}" class="d-inline">
        @csrf
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-danger btn-sm delete_prescriptions">
            <i class="fa fa-trash"></i>
        </button>
    </form>
@endcan
