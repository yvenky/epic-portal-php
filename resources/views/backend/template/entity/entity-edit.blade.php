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
        <form action="{{url('entity-update/'.$lists->id)}}" id="add-new-entity-partner-edit-form" method="POST">
            @csrf
            @method('PUT')
            <div class="form-content">
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_name">Entity Name </label>
                            <input type="text" class="form-control" name="add_partner_entity_name" value="{{$lists->add_partner_entity_name}}" id="add_partner_entity_name">
                        </div>
                    </div>             
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="expense_date">Managing Member 1</label>
                            <select class="form-control select2 select-matcher-obj" name="add_partner_managing_member_1" data-select2-id="managing-member-1-select" tabindex="-1" aria-hidden="false">
                                <optgroup label="Please Select Member" data-select2-id="managing-member-1-select">
                                    @foreach ( $users as $user ) 
                                    <option value="{{$user->partner_individual_first_name.' '.$user->partner_individual_last_name}}" {{$user->partner_individual_first_name == $lists->add_partner_managing_member_2 ? "selected": "" }}  >{{$user->partner_individual_first_name." ".$user->partner_individual_last_name}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>     
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="expense_date">Managing Member 2</label>
                            <select class="form-control select2 select-matcher-obj"  name="add_partner_managing_member_2" data-select2-id="managing-member-2-select" tabindex="-1" aria-hidden="false">
                                <optgroup label="Please Select Member" data-select2-id="managing-member-2-select">  
                                    @foreach ( $users as $user ) 
                                    <option value="{{$user->partner_individual_first_name.' '.$user->partner_individual_last_name}}" {{$user->partner_individual_first_name == $lists->add_partner_managing_member_2 ? "selected": "" }}  >{{$user->partner_individual_first_name." ".$user->partner_individual_last_name}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_ein">EIN</label>
                            <input type="text" class="form-control" name="add_partner_entity_ein" value="{{$lists->add_partner_entity_ein}}" id="add_partner_entity_ein">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_docs">Entity Docs</label>
                            <input type="text" class="form-control" name="add_partner_entity_docs" value="{{$lists->add_partner_entity_docs}}" id="add_partner_entity_docs">
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
                            <input type="text" class="form-control" name="add_partner_entity_address_street" value="{{$lists->add_partner_entity_address_street}}" id="add_partner_entity_address_street">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_address_city">City</label>
                            <input type="text" class="form-control" name="add_partner_entity_address_city" value="{{$lists->add_partner_entity_address_city}}" id="add_partner_entity_address_city">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="add_partner_entity_address_state">State</label>
                            <select name="add_partner_entity_address_state" value="{{$lists->add_partner_entity_address_state }}" class="form-select select2 select-matcher-obj" id="add_partner_entity_address_state_edit"  data-select2-id="add_partner_entity_address_state_edit_select"  aria-label="Default select example">
                                <optgroup label="Please Select State" data-select2-id="add_partner_entity_address_state_edit_select">
                                    <option value="AA" {{$lists->add_partner_entity_address_state == "AA" ? 'selected': ''}}>Armed Forces America</option>
                                    <option value="AE" {{$lists->add_partner_entity_address_state == "AE" ? 'selected': ''}}>Armed Forces</option>
                                    <option value="AK" {{$lists->add_partner_entity_address_state  == "AK" ? 'selected': ''}}>Alaska</option>
                                    <option value="AL" {{$lists->add_partner_entity_address_state  == "AL" ? 'selected': ''}}>Alabama</option>
                                    <option value="AP" {{$lists->add_partner_entity_address_state  == "AP" ? 'selected': ''}}>Armed Forces Pacific</option>
                                    <option value="AR" {{$lists->add_partner_entity_address_state  == "AR" ? 'selected': ''}}>Arkansas</option>
                                    <option value="AZ" {{$lists->add_partner_entity_address_state  == "AZ" ? 'selected': ''}}>Arizona</option>
                                    <option value="CA" {{$lists->add_partner_entity_address_state == "CA" ? 'selected': ''}}>California</option>
                                    <option value="CO" {{$lists->add_partner_entity_address_state  == "CO" ? 'selected': ''}}>Colorado</option>
                                    <option value="CT" {{$lists->add_partner_entity_address_state  == "CT" ? 'selected': ''}}>Connecticut</option>
                                    <option value="DC" {{$lists->add_partner_entity_address_state  == "DC" ? 'selected': ''}}>Washington DC</option>
                                    <option value="DE" {{$lists->add_partner_entity_address_state  == "DE" ? 'selected': ''}}>Delaware</option>
                                    <option value="FL" {{$lists->add_partner_entity_address_state  == "FL" ? 'selected': ''}}>Florida</option>
                                    <option value="GA" {{$lists->add_partner_entity_address_state == "GA" ? 'selected': ''}}>Georgia</option>
                                    <option value="GU" {{$lists->add_partner_entity_address_state == "GU" ? 'selected': ''}}>Guam</option>
                                    <option value="HI" {{$lists->add_partner_entity_address_state == "HI" ? 'selected': ''}}>Hawaii</option>
                                    <option value="IA" {{$lists->add_partner_entity_address_state == "IA" ? 'selected': ''}}>Iowa</option>
                                    <option value="ID" {{$lists->add_partner_entity_address_state == "ID" ? 'selected': ''}}>Idaho</option>
                                    <option value="IL" {{$lists->add_partner_entity_address_state == "IL" ? 'selected': ''}}>Illinois</option>
                                    <option value="IN" {{$lists->add_partner_entity_address_state == "IN" ? 'selected': ''}}>Indiana</option>
                                    <option value="KS" {{$lists->add_partner_entity_address_state  == "KS" ? 'selected': ''}}>Kansas</option>
                                    <option value="KY" {{$lists->add_partner_entity_address_state  == "KY" ? 'selected': ''}}>Kentucky</option>
                                    <option value="LA" {{$lists->add_partner_entity_address_state  == "LA" ? 'selected': ''}}>Louisiana</option>
                                    <option value="MA" {{$lists->add_partner_entity_address_state  == "MA" ? 'selected': ''}}>Massachusetts</option>
                                    <option value="MD" {{$lists->add_partner_entity_address_state  == "MD" ? 'selected': ''}}>Maryland</option>
                                    <option value="ME" {{$lists->add_partner_entity_address_state == "ME" ? 'selected': ''}}>Maine</option>
                                    <option value="MI" {{$lists->add_partner_entity_address_state  == "MI" ? 'selected': ''}}>Michigan</option>
                                    <option value="MN" {{$lists->add_partner_entity_address_state  == "MN" ? 'selected': ''}}>Mississippi</option>
                                    <option value="MO" {{$lists->add_partner_entity_address_state  == "MO" ? 'selected': ''}}>Missouri</option>
                                    <option value="MS" {{$lists->add_partner_entity_address_state  == "MS" ? 'selected': ''}}>Mississippi</option>
                                    <option value="MT" {{$lists->add_partner_entity_address_state  == "MT" ? 'selected': ''}}>Montana</option>
                                    <option value="NC" {{$lists->add_partner_entity_address_state == "NC" ? 'selected': ''}}>North Carolina</option>
                                    <option value="ND" {{$lists->add_partner_entity_address_state == "ND" ? 'selected': ''}}>North Dakota</option>
                                    <option value="NE" {{$lists->add_partner_entity_address_state == "NE" ? 'selected': ''}}>Nebraska</option>
                                    <option value="NH" {{$lists->add_partner_entity_address_state == "NH" ? 'selected': ''}}>New Hampshire</option>
                                    <option value="NJ" {{$lists->add_partner_entity_address_state == "NJ" ? 'selected': ''}}>New Jersey</option>
                                    <option value="NM" {{$lists->add_partner_entity_address_state == "NM" ? 'selected': ''}}>New Mexico</option>
                                    <option value="NV" {{$lists->add_partner_entity_address_state  == "NV" ? 'selected': ''}}>Nevada</option>
                                    <option value="NY" {{$lists->add_partner_entity_address_state  == "NY" ? 'selected': ''}}>New York</option>
                                    <option value="OH" {{$lists->add_partner_entity_address_state  == "OH" ? 'selected': ''}}>Ohio</option>
                                    <option value="OK" {{$lists->add_partner_entity_address_state  == "OK" ? 'selected': ''}}>Oklahoma</option>
                                    <option value="OR" {{$lists->add_partner_entity_address_state  == "OR" ? 'selected': ''}}>Oregon</option>
                                    <option value="PA" {{$lists->add_partner_entity_address_state  == "PA" ? 'selected': ''}}>Pennsylvania</option>
                                    <option value="PR" {{$lists->add_partner_entity_address_state == "PR" ? 'selected': ''}}>Puerto Rico</option>
                                    <option value="RI" {{$lists->add_partner_entity_address_state  == "RI" ? 'selected': ''}}>Rhode Island</option>
                                    <option value="SC" {{$lists->add_partner_entity_address_state  == "SC" ? 'selected': ''}}>South Carolina</option>
                                    <option value="SD" {{$lists->add_partner_entity_address_state  == "SD" ? 'selected': ''}}>South Dakota</option>
                                    <option value="TN" {{$lists->add_partner_entity_address_state  == "TN" ? 'selected': ''}}>Tennessee</option>
                                    <option value="TX" {{$lists->add_partner_entity_address_state  == "TX" ? 'selected': ''}}>Texas</option>
                                    <option value="UT" {{$lists->add_partner_entity_address_state == "UT" ? 'selected': ''}}>Utah</option>
                                    <option value="VA" {{$lists->add_partner_entity_address_state == "VA" ? 'selected': ''}}>Virginia</option>
                                    <option value="VI" {{$lists->add_partner_entity_address_state == "VI" ? 'selected': ''}}>Virgin Islands</option>
                                    <option value="VT" {{$lists->add_partner_entity_address_state == "VT" ? 'selected': ''}}>Vermont</option>
                                    <option value="WA" {{$lists->add_partner_entity_address_state == "WA" ? 'selected': ''}}>Washington</option>
                                    <option value="WI" {{$lists->add_partner_entity_address_state == "WI" ? 'selected': ''}}>Wisconsin</option>
                                    <option value="WV" {{$lists->add_partner_entity_address_state == "WV" ? 'selected': ''}}>West Virginia</option>
                                    <option value="WY" {{$lists->add_partner_entity_address_state == "WY" ? 'selected': ''}}>Wyoming</option>
                                </optgroup> 
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_address_zipcode">Zip Code</label>
                            <input type="text" class="form-control" name="add_partner_entity_address_zipcode" value="{{$lists->add_partner_entity_address_zipcode}}" id="add_partner_entity_address_zipcode">
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