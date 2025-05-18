@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Pembayaran Order #{{ $order->order_number }}</h4>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h5>Total Pembayaran:</h5>
                        <h2 class="mb-4">Rp {{ number_format($order->total_amount) }}</h2>
                        <button id="pay-button" class="btn btn-primary btn-lg">Bayar Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
<script>
    document.getElementById('pay-button').onclick = function() {
        snap.pay('{{ $snapToken }}', {
            onSuccess: function(result) {
                window.location.href = '{{ route("payment.success") }}';
            },
            onPending: function(result) {
                window.location.href = '{{ route("payment.pending") }}';
            },
            onError: function(result) {
                window.location.href = '{{ route("payment.error") }}';
            }
        });
    };
</script>
@endpush
@endsection