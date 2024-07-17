<td>
    <div style="width: 300px">

        <span id="bookingStatus-716294">

            {{-- @dd(0) --}}
            <span class="status" style="text-transform: capitalize;">
                @if ($booking->status->isNotEmpty())
                    {{ $booking->status[0]->name }}
                @endif
            </span>
            <div class="btn-group dropright">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="View History"
                    class="btn btn-sm btn-outline-dark dropdown-toggle">
                </button>
                <div class="dropdown-menu px-2 py-2" style="width: 20rem;">
                    <ul class="list-group list-group-flush">
                        @foreach ($booking->status as $status)
                            <li class="list-group-item">{{ $status->name }}: <span class="st_time_716294_on_the_way">
                                </span>{{ $status->pivot->created_at }}</li>
                        @endforeach
                    </ul>

                </div>
            </div>
            {{-- @json($booking->status) --}}
            <hr><span class="st_time">
                @if ($booking->status->isNotEmpty())
                    {{ $booking->status[0]->pivot->created_at }}
                @endif
            </span>
            <hr>
        </span>


        <div class="form-group">
            <label>Set Status</label>
            <select class="form-control select2" required="required"
                onchange="UpadteStatus({{ $booking->id }},this.value)" name="status" id="status">
                @foreach ($statuses as $status)
                    <option value="{{ $status->id }}" @if ($booking->status[0]->id == $status->id) selected @endif>
                        {{ $status->name }}</option>
                @endforeach
            </select>
        </div>

        <b>Address: </b> {{ $booking->patient->address }}
        <br>
        <br>


        @if ($booking->tests->isNotEmpty())
            @foreach ($booking->tests as $test)
                {{ $test->test_name }}
                <br>
            @endforeach

        @endif

        <br>
        <div class="btn-group dropleft mr-2 mb-2 "><button type="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" title="View Vials" class="btn btn-sm btn-outline-dark dropdown-toggle">
                View Vials </button>
            <div class="dropdown-menu px-2 py-2" style="width: 15rem;">
                <ul class="mb-0">
                    @php
                        $uniqueTests = $booking->tests->unique('vial_id');
                    @endphp

                    @foreach ($uniqueTests as $test)
                        <li>{{ $test->vial->name }}</li>
                    @endforeach

                </ul>
            </div>
        </div>

    </div>
</td>
