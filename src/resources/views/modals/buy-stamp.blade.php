<x-modal title="Buy a Stamp" id="buyStamp" submit-button="Buy a Stamp">
    <form action="/buy-stamp" method="POST">
        @csrf

        <p>Buy a USPS stamp which will produce a label that you can print directly to an A10 standard envelope
            which will contain the to/from address (USA only) and the stamp/barcode.</p>

        <p><b>NOTE:</b> We grab the first USPS carrier account and use that here for convenience, this behavior cannot
            currently be configured.</p>

        <p>You can either use an ID from a previously created address/parcel or enter them manually.</p>

        <h3>From Address</h3>

        <label for="from_address">From Address ID</label>
        <input class="form-control" name="from_address" value="{{old('from_address')}}"
            placeholder="Use an Address ID instead of entering one manually below.">

        <hr>

        <label for="from_street1">Street 1</label>
        <input class="form-control" name="from_street1" value="{{old('from_street1')}}">

        <label for="from_street2">Street 2</label>
        <input class="form-control" name="from_street2" value="{{old('from_street2')}}">

        <label for="from_city">City</label>
        <input class="form-control" name="from_city" value="{{old('from_city')}}">

        <label for="from_state">State</label>
        <input class="form-control" name="from_state" value="{{old('from_state')}}">

        <label for="from_zip">Zip</label>
        <input class="form-control" name="from_zip" value="{{old('from_zip')}}">

        <label for="from_company">Company</label>
        <input class="form-control" name="from_company" value="{{old('from_company')}}">

        <label for="from_phone">Phone</label>
        <input class="form-control" name="from_phone" value="{{old('from_phone')}}">

        <h3>To Address</h3>

        <label for="to_address">To Address ID</label>
        <input class="form-control" name="to_address" value="{{old('to_address')}}"
            placeholder="Use an Address ID instead of entering one manually below.">

        <hr>

        <label for="to_street1">Street 1</label>
        <input class="form-control" name="to_street1" value="{{old('to_street1')}}">

        <label for="to_street2">Street 2</label>
        <input class="form-control" name="to_street2" value="{{old('to_street2')}}">

        <label for="to_city">City</label>
        <input class="form-control" name="to_city" value="{{old('to_city')}}">

        <label for="to_state">State</label>
        <input class="form-control" name="to_state" value="{{old('to_state')}}">

        <label for="to_zip">Zip</label>
        <input class="form-control" name="to_zip" value="{{old('to_zip')}}">

        <label for="to_company">Company</label>
        <input class="form-control" name="to_company" value="{{old('to_company')}}">

        <label for="to_phone">Phone</label>
        <input class="form-control" name="to_phone" value="{{old('to_phone')}}">

        {{-- We do not close the form here because we do so at the component level --}}
</x-modal>