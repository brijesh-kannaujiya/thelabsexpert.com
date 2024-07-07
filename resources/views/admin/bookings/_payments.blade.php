<td>

    @if ($booking->paymentMethod)
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

    @else
    <form method="post" id="PaymentForm_{{$booking->id}}">
        <div class="row" style="width: 300px">
            <div class=" col-md-12">
                <label for="icon">{{__('Payment Photo')}}</label>
                <div class="custom-file">
                    <input type="file" name="payment_photo" accept="image/*" class="custom-file-input" id="payment_photo">
                    <label class="custom-file-label" for="payment_photo">{{__('Payment Photo')}}</label>
                </div>
            </div>
            <div class=" col-md-12">
                <label for="payment_amount">{{__('Amount')}}</label>
                <input type="number" class="form-control amount" name="payment_amount" value="{{$booking->due}}" id="payment_amount">
            </div>
            <div class=" col-md-12">
                <label for="payment_method">{{__('Payment Method')}}</label>
                <select name="payment_method_id" id="payment_method_id" class="form-control payment_method_id">
                    <option value="" selected>{{__('Select payment method')}}</option>
                    @foreach ($peymentMethod as $peymentMethods)
                    <option value="{{$peymentMethods->id}}">{{$peymentMethods->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
    <center><button type="button" onclick="SubmitPaymentForm({{$booking->id}})" class="ladda-button btn btn-primary btn-sm savePatientBtn mt-3">Save</button></center>
    @endif


</td>
