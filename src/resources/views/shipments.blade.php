@extends("layouts.app")
@section("content")

    <div class="response-wrapper">
        <div class="response">
            <h2>Shipments</h2>
            <p>Select a shipment ID to view all details for that record.</p>
            @foreach ($json->shipments as $shipment)
                <form action="/retrieve-shipment" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{ $shipment->id }}">
                    <div>Shipment:</div>
                    <button class="btn btn-primary btn-sm btn-shipment"><?php echo substr($shipment->id, 0, 10); ?>...</button>
                    <p>Created at: {{ $shipment->created_at }}</p>
                    @if (isset($shipment->postage_label->label_url))
                        <div><a class="btn btn-primary btn-label btn-sm" href="{{ $shipment->postage_label->label_url }}" download="{{ $shipment->id }}" target="_blank">DOWNLOAD LABEL&nbsp;<i class="fas fa-download"></i></a></div>
                    @endif
                </form>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <b>From Address:</b><br />
                            {{ $shipment->from_address->id }}<br /><br />
                            {{ $shipment->from_address->street1 }}<br />
                            {{ $shipment->from_address->street2 }}<br />
                            {{ $shipment->from_address->city }}<br />
                            {{ $shipment->from_address->state }}<br />
                            {{ $shipment->from_address->zip }}<br />
                            {{ $shipment->from_address->country }}<br />
                            {{ $shipment->from_address->phone }}<br />
                            {{ $shipment->from_address->email }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <b>To Address:</b><br />
                            {{ $shipment->to_address->id }}<br /><br />
                            {{ $shipment->to_address->street1 }}<br />
                            {{ $shipment->to_address->street2 }}<br />
                            {{ $shipment->to_address->city }}<br />
                            {{ $shipment->to_address->state }}<br />
                            {{ $shipment->to_address->zip }}<br />
                            {{ $shipment->to_address->country }}<br />
                            {{ $shipment->to_address->phone }}<br />
                            {{ $shipment->to_address->email }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <b>Parcel:</b><br />
                            {{ $shipment->parcel->id }}<br /><br />
                            Length: {{ $shipment->parcel->length }} inches<br />
                            Width: {{ $shipment->parcel->width }} inches<br />
                            Height: {{ $shipment->parcel->height }} inches<br />
                            Weight: {{ $shipment->parcel->weight }} ounces<br />
                            Predefined Package; {{ $shipment->parcel->predefined_package }} 
                        </p>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>

@endsection
