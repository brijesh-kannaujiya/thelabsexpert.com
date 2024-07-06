<td>

    <div class="btn-group dropleft mr-2 mb-2 paymentHistory-716294"><button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="View Payment History" class="btn btn-sm btn-outline-dark dropdown-toggle">
            View Payment History </button>
        <div class="dropdown-menu px-2 py-2" style="width: 28rem;">
            <table class="table">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Amount</th>
                        {{-- <th>Date/time</th> --}}
                    </tr>
                </thead>
                <tbody class="paymentHistoryTBody-716294">
                    <tr>
                        <td class="text-capitalize">
                            <a target="_blank" href="{{ url('/') }}/{{$booking->payment_photo}}">{{ $booking->paymentMethod->name }}</a>
                        </td>
                        <td> {{ $booking->paid}}</td>

                        {{-- <td>2024-07-06 05:35:05</td> --}}
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr class=" paymentSeparator-716294"> <span class="badge badge-success" style="font-size: 100%;">Completed </span>
</td>
