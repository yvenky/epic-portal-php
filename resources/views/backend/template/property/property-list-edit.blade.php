@extends('backend.inc.master')

@section('main-content')

<section class="panel-wrapper panel-center">
    @if(Session::has('success-message')) 
    <div class="alert alert-success" role="alert">
        {{Session::get('success-message')}}
      </div>
     @endif 
     <div class="form-wrapper">
        <div class="form-heading">
            <h6>Edit Property</h6>
        </div>
        <div class="form-content">
            <form action="{{url('property-list-update/'.$lists->ID)}}" method="POST" id="add-new-property-edit-form">
                @csrf
                @method('PUT')

                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_address">Property Address </label>
                            <input type="text" class="form-control" name="PROPERTY_ADDRESS" value="{{$lists->PROPERTY_ADDRESS}}"  id="property_address">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="google_coordinates">Google Coordinates</label>
                            <input type="text" class="form-control" name="GOOGLE_COORDINATES" value="{{$lists->GOOGLE_COORDINATES}}"  id="google_coordinates">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="property_company">Entity Company</label>
                                <select name="ENTITY_COMPANY" class="form-control select2 select-matcher-obj"   data-select2-id="ENTITY_COMPANY_select"  tabindex="-1" aria-hidden="false">
                                <optgroup label="Please Select Member" data-select2-id="ENTITY_COMPANY_select">
                                    @foreach ( $users as $user ) 
                                        <option value="{{ $user->ID }}" {{$user->ID == $lists->ENTITY_COMPANY ? "selected": "" }}>{{$user->ENTITY_NAME}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>     
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_of_acres">Number Of Acres</label>
                            <input type="text" class="form-control" name="NO_OF_ACRES" value="{{$lists->NO_OF_ACRES}}" id="property_of_acres">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_map_right_url">Map Right Url</label>
                            <input type="text" class="form-control" name="MAP_URL" value="{{$lists->MAP_URL}}" id="property_map_right_url">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_documents">Property Documents</label>
                            <input type="url" class="form-control" name="PROPERTY_DOCUMENTS" value="{{$lists->PROPERTY_DOCUMENTS}}"  id="property_documents">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="purchase_price">Purchase Price</label>
                            <input type="number" class="form-control" name="PURCHASE_PRICE" value="{{$lists->PURCHASE_PRICE}}" id="purchase_price">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="per_acre_cost">Per Acre Cost</label>
                            <input type="number" class="form-control" name="COST_PER_ACRE" value="{{$lists->COST_PER_ACRE}}"  id="per_acre_cost">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="potential_per_acre">Potential Per Acre</label>
                            <input type="number" class="form-control" name="POTENTIAL_PER_ACRE" value="{{$lists->POTENTIAL_PER_ACRE}}"  id="potential_per_acre">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="potential_market_value">Potential Market Value</label>
                            <input type="number" class="form-control" name="POTENTIAL_MARKET_VALUE" value="{{$lists->POTENTIAL_MARKET_VALUE}}" id="potential_market_value">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    <div class="form-btn-flex-between">
                        <a href="{{url()->previous() }}" class="form-cancel-btn">Cancel</a>
                        <button type="submit" class="form-submit-btn">Submit</button>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
 </section>


@endsection