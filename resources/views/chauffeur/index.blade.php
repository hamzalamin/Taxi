<x-chauffeur-layout>
    <x-slot name="slot">
       
        
    

    <form class="booking-details-form" action="{{ route('addTrajet') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="form-group">
                    <label for="from">From</label>
                    <select class="form-control" id="from" name="from">
                        <option value="">FROM</option>
                        @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="form-group">
                    <label for="to">To</label>
                    <select class="form-control" id="to" name="to">
                        <option value="">TO</option>
                        @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="form-group">
                    <label for="form">Payment</label>
                    <input type="text" class="form-control" id="date" name="TypeOfpayment">
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="form-group">
                    <form action="{{ route('addTrajet') }}" method="post">
                        @csrf
                    <button type="submit" class="btn btn-primary btn-block">Add trajet</button>
                </form>
                </div>
            </div>
        </div>
    </form>
</x-slot>
</x-chauffeur-layout>