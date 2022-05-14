@extends('backend.inc.master')

@section('main-content')


<section class="panel-wrapper panel-center">
   <div class="form-wrapper">
      @if(Session::has('success-message-edit')) 
      <div class="alert alert-success" role="alert">
          {{Session::get('success-message-edit')}}
        </div>
       @endif 
   <div class="form-wrapper">
        <div class="form-heading">
            <h6>Edit Entity</h6>
        </div>
        <form action="{{url('entity-update/'.$lists->ID)}}" id="add-new-entity-partner-edit-form" method="POST">
            @csrf
            @method('PUT')
            <div class="form-content">
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_name">Entity Name </label>
                            <input type="text" class="form-control" name="ENTITY_NAME" value="{{$lists->ENTITY_NAME}}" id="add_partner_entity_name">
                        </div>
                    </div>             
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="expense_date">Managing Member 1</label>
                            <select class="form-control select2 select-matcher-obj" name="MANAGING_MEMBER_1" data-select2-id="managing-member-1-select" tabindex="-1" aria-hidden="false">
                                <optgroup label="Please Select Member" data-select2-id="managing-member-1-select">
                                  @foreach ( $users as $user ) 
                                    <option value="{{$user->FIRST_NAME.' '.$user->LAST_NAME}}" {{$user->FIRST_NAME == $user->FIRST_NAME ? "selected": "" }}  >{{$user->FIRST_NAME." ".$user->LAST_NAME}}</option>
                                  @endforeach     
                                </optgroup>
                            </select>
                        </div>     
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="expense_date">Managing Member 2</label>
                            <select class="form-control select2 select-matcher-obj"  name="MANAGING_MEMBER_2" data-select2-id="managing-member-2-select" tabindex="-1" aria-hidden="false">
                                <optgroup label="Please Select Member" data-select2-id="managing-member-2-select">  
                                    @foreach ( $users as $user ) 
                                    <option value="{{$user->FIRST_NAME.' '.$user->LAST_NAME}}" {{$user->FIRST_NAME == $user->FIRST_NAME ? "selected": "" }}  >{{$user->FIRST_NAME." ".$user->LAST_NAME}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_ein">EIN</label>
                            <input type="text" class="form-control" name="EIN" value="{{$lists->EIN}}" id="add_partner_entity_ein">


                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_docs">Entity Docs</label>
                            <input type="text" class="form-control" name="OPERATING_AGREEMENT" value="{{$lists->OPERATING_AGREEMENT}}" id="add_partner_entity_docs">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-heading pt-0">
                <h6>Address</h6>
            </div>  
            <div class="form-content">
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_address_street">Street</label>
                            <input type="text" class="form-control" name="STREET_1" value="{{$lists->address->STREET_1}}" id="add_partner_entity_address_street">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_address_city">City</label>
                            <input type="text" class="form-control" name="CITY" value="{{$lists->address->CITY}}" id="add_partner_entity_address_city">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="add_partner_entity_address_state">State</label>
                            <select name="STATE" value="{{$lists->address->STATE}}" class="form-select select2 select-matcher-obj" id="add_partner_entity_address_state_edit"  data-select2-id="add_partner_entity_address_state_edit_select"  aria-label="Default select example">
                                <optgroup label="Please Select State" data-select2-id="add_partner_entity_address_state_edit_select">
                                    <option value="AA" {{$lists->address->STATE== "AA" ? 'selected': ''}}>Armed Forces America</option>
                                    <option value="AE" {{$lists->address->STATE== "AE" ? 'selected': ''}}>Armed Forces</option>
                                    <option value="AK" {{$lists->address->STATE == "AK" ? 'selected': ''}}>Alaska</option>
                                    <option value="AL" {{$lists->address->STATE == "AL" ? 'selected': ''}}>Alabama</option>
                                    <option value="AP" {{$lists->address->STATE == "AP" ? 'selected': ''}}>Armed Forces Pacific</option>
                                    <option value="AR" {{$lists->address->STATE == "AR" ? 'selected': ''}}>Arkansas</option>
                                    <option value="AZ" {{$lists->address->STATE == "AZ" ? 'selected': ''}}>Arizona</option>
                                    <option value="CA" {{$lists->address->STATE== "CA" ? 'selected': ''}}>California</option>
                                    <option value="CO" {{$lists->address->STATE == "CO" ? 'selected': ''}}>Colorado</option>
                                    <option value="CT" {{$lists->address->STATE == "CT" ? 'selected': ''}}>Connecticut</option>
                                    <option value="DC" {{$lists->address->STATE == "DC" ? 'selected': ''}}>Washington DC</option>
                                    <option value="DE" {{$lists->address->STATE == "DE" ? 'selected': ''}}>Delaware</option>
                                    <option value="FL" {{$lists->address->STATE == "FL" ? 'selected': ''}}>Florida</option>
                                    <option value="GA" {{$lists->address->STATE== "GA" ? 'selected': ''}}>Georgia</option>
                                    <option value="GU" {{$lists->address->STATE== "GU" ? 'selected': ''}}>Guam</option>
                                    <option value="HI" {{$lists->address->STATE== "HI" ? 'selected': ''}}>Hawaii</option>
                                    <option value="IA" {{$lists->address->STATE== "IA" ? 'selected': ''}}>Iowa</option>
                                    <option value="ID" {{$lists->address->STATE== "ID" ? 'selected': ''}}>Idaho</option>
                                    <option value="IL" {{$lists->address->STATE== "IL" ? 'selected': ''}}>Illinois</option>
                                    <option value="IN" {{$lists->address->STATE== "IN" ? 'selected': ''}}>Indiana</option>
                                    <option value="KS" {{$lists->address->STATE == "KS" ? 'selected': ''}}>Kansas</option>
                                    <option value="KY" {{$lists->address->STATE == "KY" ? 'selected': ''}}>Kentucky</option>
                                    <option value="LA" {{$lists->address->STATE == "LA" ? 'selected': ''}}>Louisiana</option>
                                    <option value="MA" {{$lists->address->STATE == "MA" ? 'selected': ''}}>Massachusetts</option>
                                    <option value="MD" {{$lists->address->STATE == "MD" ? 'selected': ''}}>Maryland</option>
                                    <option value="ME" {{$lists->address->STATE== "ME" ? 'selected': ''}}>Maine</option>
                                    <option value="MI" {{$lists->address->STATE == "MI" ? 'selected': ''}}>Michigan</option>
                                    <option value="MN" {{$lists->address->STATE == "MN" ? 'selected': ''}}>Mississippi</option>
                                    <option value="MO" {{$lists->address->STATE == "MO" ? 'selected': ''}}>Missouri</option>
                                    <option value="MS" {{$lists->address->STATE == "MS" ? 'selected': ''}}>Mississippi</option>
                                    <option value="MT" {{$lists->address->STATE == "MT" ? 'selected': ''}}>Montana</option>
                                    <option value="NC" {{$lists->address->STATE== "NC" ? 'selected': ''}}>North Carolina</option>
                                    <option value="ND" {{$lists->address->STATE== "ND" ? 'selected': ''}}>North Dakota</option>
                                    <option value="NE" {{$lists->address->STATE== "NE" ? 'selected': ''}}>Nebraska</option>
                                    <option value="NH" {{$lists->address->STATE== "NH" ? 'selected': ''}}>New Hampshire</option>
                                    <option value="NJ" {{$lists->address->STATE== "NJ" ? 'selected': ''}}>New Jersey</option>
                                    <option value="NM" {{$lists->address->STATE== "NM" ? 'selected': ''}}>New Mexico</option>
                                    <option value="NV" {{$lists->address->STATE == "NV" ? 'selected': ''}}>Nevada</option>
                                    <option value="NY" {{$lists->address->STATE == "NY" ? 'selected': ''}}>New York</option>
                                    <option value="OH" {{$lists->address->STATE == "OH" ? 'selected': ''}}>Ohio</option>
                                    <option value="OK" {{$lists->address->STATE == "OK" ? 'selected': ''}}>Oklahoma</option>
                                    <option value="OR" {{$lists->address->STATE == "OR" ? 'selected': ''}}>Oregon</option>
                                    <option value="PA" {{$lists->address->STATE == "PA" ? 'selected': ''}}>Pennsylvania</option>
                                    <option value="PR" {{$lists->address->STATE== "PR" ? 'selected': ''}}>Puerto Rico</option>
                                    <option value="RI" {{$lists->address->STATE == "RI" ? 'selected': ''}}>Rhode Island</option>
                                    <option value="SC" {{$lists->address->STATE == "SC" ? 'selected': ''}}>South Carolina</option>
                                    <option value="SD" {{$lists->address->STATE == "SD" ? 'selected': ''}}>South Dakota</option>
                                    <option value="TN" {{$lists->address->STATE == "TN" ? 'selected': ''}}>Tennessee</option>
                                    <option value="TX" {{$lists->address->STATE == "TX" ? 'selected': ''}}>Texas</option>
                                    <option value="UT" {{$lists->address->STATE== "UT" ? 'selected': ''}}>Utah</option>
                                    <option value="VA" {{$lists->address->STATE== "VA" ? 'selected': ''}}>Virginia</option>
                                    <option value="VI" {{$lists->address->STATE== "VI" ? 'selected': ''}}>Virgin Islands</option>
                                    <option value="VT" {{$lists->address->STATE== "VT" ? 'selected': ''}}>Vermont</option>
                                    <option value="WA" {{$lists->address->STATE== "WA" ? 'selected': ''}}>Washington</option>
                                    <option value="WI" {{$lists->address->STATE== "WI" ? 'selected': ''}}>Wisconsin</option>
                                    <option value="WV" {{$lists->address->STATE== "WV" ? 'selected': ''}}>West Virginia</option>
                                    <option value="WY" {{$lists->address->STATE== "WY" ? 'selected': ''}}>Wyoming</option>
                                </optgroup> 
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_address_zipcode">Zip Code</label>
                            <input type="text" class="form-control" name="ZIP_CODE" value="{{$lists->address->ZIP_CODE}}" id="add_partner_entity_address_zipcode">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-content">
                <div class="form-btn-flex-between">
                    <a class="form-cancel-btn" href="{{url('entity-list')}}">Cancel</a>
                    <button type="submit" class="form-submit-btn">Submit</button>
                </div>
            </div>
        </form>
   </div>
</section>


@endsection