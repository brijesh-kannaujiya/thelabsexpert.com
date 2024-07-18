@can('done_appointment')
    <a href="{{ route('admin.appointment.edit', $appointment['id']) }}" class="btn btn-primary btn-sm">
        <i class="fa fa-check"></i>
    </a>
@endcan
