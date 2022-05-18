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
            <h6>Add New Property</h6>
        </div>
        <div class="form-content">
            <form action="{{url('property-submit')}}" method="POST" id="add-new-property-form">
                @csrf
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_address">Property Address </label>
                            <input type="text" class="form-control" name="PROPERTY_ADDRESS" id="PROPERTY_ADDRESS">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="google_coordinates">Google Coordinates</label>
                            <input type="text" class="form-control" name="GOOGLE_COORDINATES" id="GOOGLE_COORDINATES">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="property_company">Entity Company</label>
                                <select name="ENTITY_COMPANY" class="form-select select-matcher-obj select2" id="property_company_select"  data-select2-id="property_company_select"  aria-label="Default select example">
                                <optgroup label="Please Select Member" data-select2-id="property_company_select">
                                    <option value="">Please Select</option>
                                    @foreach ( $users as $user ) 
                                        <option value="{{$user->ID}}">{{$user->ENTITY_NAME}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>     
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_of_acres">Number Of Acres</label>
                            <input type="number" class="form-control" name="NO_OF_ACRES" id="NO_OF_ACRES">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_map_right_url">Map Right Url</label>
                            <input type="text" class="form-control" name="MAP_URL" id="MAP_URL">
                        </div>
                    </div>
                  

                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_documents">Property Documents</label>
                            <input type="url" class="form-control" name="PROPERTY_DOCUMENTS" id="PROPERTY_DOCUMENTS">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="purchase_price">Purchase Price</label>
                            <input type="number" class="form-control" name="PURCHASE_PRICE" id="PURCHASE_PRICE">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="per_acre_cost">Per Acre Cost</label>
                            <input type="number" class="form-control" name="COST_PER_ACRE" id="COST_PER_ACRE">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="potential_per_acre">Potential Per Acre</label>
                            <input type="number" class="form-control" name="POTENTIAL_PER_ACRE" id="POTENTIAL_PER_ACRE">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="potential_market_value">Potential Market Value</label>
                            <input type="number" class="form-control" name="POTENTIAL_MARKET_VALUE" id="POTENTIAL_MARKET_VALUE">
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