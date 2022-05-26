@extends('backend.inc.master')

@section('main-content')
<!--// Main Area Start //-->
<section class="panel-wrapper panel-center">
    @if(Session::has('success-message')) 
    <div class="alert alert-success" role="alert">
        {{Session::get('success-message')}}
      </div>
     @endif 
    <div class="form-wrapper">
        <div class="form-heading">
            <h6>Entity New Partner Add</h6>
        </div>
        <form action="{{url('entity-newpartner-add-submit')}}" method="POST" id="entity-newpartner-add-form">
            @csrf
            <div class="form-content pb-0">
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_name">First Name</label>
                            <input type="text" class="form-control" name="ENTITY_NAME" id="add_partner_entity_name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_ein">Last Name</label>
                            <input type="text" class="form-control" name="EIN" id="add_partner_entity_ein">
                        </div>
                    </div>
       
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_docs">Total Share</label>
                            <input type="text" class="form-control" name="OPERATING_AGREEMENT" id="add_partner_entity_docs">
                        </div>
                    </div>
                
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="google_coordinates">Cash</label>
                            <input type="text" class="form-control" name="GOOGLE_COORDINATES" id="GOOGLE_COORDINATES">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_of_acres">Loan</label>
                            <input type="number" class="form-control" name="NO_OF_ACRES" id="NO_OF_ACRES">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_map_right_url">Shareholding</label>
                            <input type="text" class="form-control" name="MAP_URL" id="MAP_URL">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_documents">Finder Fees</label>
                            <input type="url" class="form-control" name="PROPERTY_DOCUMENTS" id="PROPERTY_DOCUMENTS">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="purchase_price">Closing Fees</label>
                            <input type="number" class="form-control" name="PURCHASE_PRICE" id="PURCHASE_PRICE">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="per_acre_cost">Total Cash</label>
                            <input type="number" class="form-control" name="COST_PER_ACRE" id="COST_PER_ACRE">
                        </div>
                    </div>
               </div>
           </div>  
                <div class="form-content pt-0">
                    <div class="form-btn-flex-between">
                        <button type="button" class="form-cancel-btn"><a href="{{url()->previous()}}" style="color:black">Cancel</a></button>
                        <button type="submit" class="form-submit-btn">Submit</button>
                    </div>
                </div>
        </form>
    </div>
 </section>
 
<!--// Main Area End //-->

@endsection