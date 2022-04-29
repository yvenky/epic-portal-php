@extends('backend.inc.master')

@section('main-content')
<!--// Main Area Start //-->
<section class="panel-wrapper panel-center">
    <div class="form-wrapper">
        @if(Session::has('success-message-edit')) 
        <div class="alert alert-success" role="alert">
            {{Session::get('success-message-edit')}}
          </div>
         @endif 
        <div class="form-heading">
            <h6>Your Details</h6>
        </div>
        
        <form action="{{url('investor-list-update/'.$lists->id)}}" method="POST" id="investor-edit-form-modal">
            @csrf
            @method('PUT')
                <div class="form-content pb-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <fieldset>
                                    <label for="partner_individual_first_name">First Name</label>
                                    <input type="text" class="form-control" name="partner_individual_first_name" value="{{$lists->partner_individual_first_name}}" id="partner_individual_first_name">
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <fieldset>
                                    <label for="partner_individual_last_name">Last Name</label>
                                    <input type="text" class="form-control" name="partner_individual_last_name" value="{{$lists->partner_individual_last_name}}" id="partner_individual_last_name">
                                </fieldset>
                            </div>
                        </div>                                               
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_employment_status">Employment Status</label>
                                <select name="partner_individual_employment_status" class="form-select" value="{{$lists->partner_individual_employment_status}}"aria-label="Default select example">
                                    <option value="SE" {{$lists->partner_individual_employment_status == "SE" ? 'selected': ''}}>Self Employed</option>
                                    <option value="W2" {{$lists->partner_individual_employment_status == "W2" ? 'selected': ''}}>W2</option>
                                    <option value="HM" {{$lists->partner_individual_employment_status == "HM" ? 'selected': ''}}>Home Maker</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_household_income">Household Income</label>
                                <select name="partner_individual_household_income" class="form-select" value="{{$lists->partner_individual_household_income }}" aria-label="Default select example">
                                    <option value="0"{{$lists->partner_individual_household_income == "0" ? 'selected': ''}}>Upto 100000</option>
                                    <option value="1"{{$lists->partner_individual_household_income == "1" ? 'selected': ''}}>100000 to 200000</option>
                                    <option value="2"{{$lists->partner_individual_household_income == "2" ? 'selected': ''}}>200K to 300K</option>
                                    <option value="3"{{$lists->partner_individual_household_income == "3" ? 'selected': ''}}>300K to 400K</option>
                                    <option value="4"{{$lists->partner_individual_household_income == "4" ? 'selected': ''}}>400K to 500K</option>
                                    <option value="5"{{$lists->partner_individual_household_income == "5" ? 'selected': ''}}>More Than 500K</option>
                                </select>
                            </div>        
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_email_address">Email Address</label>
                                <input type="text" class="form-control required" name="partner_individual_email_address" value="{{$lists->partner_individual_email_address}}" id="partner_individual_email_address">
                            </div>
                        </div>
                    </div>
                </div>         
                <div class="form-heading top-border">
                    <h6>Your Spouse Details</h6>
                </div>
                <div class="form-content mt-2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_spouse_first_name">Spouse First Name</label>
                                <input type="text" class="form-control" placeholder="" name="partner_individual_spouse_first_name" value="{{$lists->partner_individual_spouse_first_name }}" id="partner_individual_spouse_first_name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_spouse_last_name">Spouse Last Name</label>
                                <input type="text" class="form-control" name="partner_individual_spouse_last_name" value="{{$lists->partner_individual_spouse_last_name }}" id="partner_individual_spouse_last_name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_employment_status_spouse">Employment Status</label>
                                <select name="partner_individual_employment_status_spouse" class="form-select" value="{{$lists->partner_individual_employment_status_spouse }}" aria-label="Default select example">
                                    <option value="SE" {{$lists->partner_individual_employment_status_spouse  == "SE" ? 'selected': ''}}>Self Employed</option>
                                    <option value="W2" {{$lists->partner_individual_employment_status_spouse  == "W2" ? 'selected': ''}}>W2</option>
                                    <option value="HM" {{$lists->partner_individual_employment_status_spouse  == "HM" ? 'selected': ''}}>Home Maker</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_spouse_email_address">Spouse Email Address</label>
                                <input type="text" class="form-control" name="partner_individual_spouse_email_address" value="{{$lists->partner_individual_spouse_email_address}}" id="partner_individual_spouse_email_address">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-heading top-border">
                    <h6>Address</h6>
                </div>
                <div class="form-content mt-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_street_1">Street</label>
                                <input type="text" class="form-control" name="partner_individual_street" value="{{$lists->partner_individual_street}}" id="partner_individual_street">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_city">City</label>
                                <input type="text" class="form-control" name="partner_individual_city" value="{{$lists->partner_individual_city}}" id="partner_individual_city">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box order-error-select">
                                <label for="partner_individual_state">State</label>
                                <select name="partner_individual_state" class="form-select select2 select-matcher-obj" id="partner_individual_state"  data-select2-id="partner_individual_state_select"  aria-label="Default select example">
                                    <optgroup label="Please Select State" data-select2-id="partner_individual_state_select">
                                        <option value="AA" {{$lists->partner_individual_state == "AA" ? 'selected': ''}}>Armed Forces America</option>
                                        <option value="AE" {{$lists->partner_individual_state == "AE" ? 'selected': ''}}>Armed Forces</option>
                                        <option value="AK" {{$lists->partner_individual_state  == "AK" ? 'selected': ''}}>Alaska</option>
                                        <option value="AL" {{$lists->partner_individual_state  == "AL" ? 'selected': ''}}>Alabama</option>
                                        <option value="AP" {{$lists->partner_individual_state  == "AP" ? 'selected': ''}}>Armed Forces Pacific</option>
                                        <option value="AR" {{$lists->partner_individual_state  == "AR" ? 'selected': ''}}>Arkansas</option>
                                        <option value="AZ" {{$lists->partner_individual_state  == "AZ" ? 'selected': ''}}>Arizona</option>
                                        <option value="CA" {{$lists->partner_individual_state == "CA" ? 'selected': ''}}>California</option>
                                        <option value="CO" {{$lists->partner_individual_state  == "CO" ? 'selected': ''}}>Colorado</option>
                                        <option value="CT" {{$lists->partner_individual_state  == "CT" ? 'selected': ''}}>Connecticut</option>
                                        <option value="DC" {{$lists->partner_individual_state  == "DC" ? 'selected': ''}}>Washington DC</option>
                                        <option value="DE" {{$lists->partner_individual_state  == "DE" ? 'selected': ''}}>Delaware</option>
                                        <option value="FL" {{$lists->partner_individual_state  == "FL" ? 'selected': ''}}>Florida</option>
                                        <option value="GA" {{$lists->partner_individual_state == "GA" ? 'selected': ''}}>Georgia</option>
                                        <option value="GU" {{$lists->partner_individual_state == "GU" ? 'selected': ''}}>Guam</option>
                                        <option value="HI" {{$lists->partner_individual_state == "HI" ? 'selected': ''}}>Hawaii</option>
                                        <option value="IA" {{$lists->partner_individual_state == "IA" ? 'selected': ''}}>Iowa</option>
                                        <option value="ID" {{$lists->partner_individual_state == "ID" ? 'selected': ''}}>Idaho</option>
                                        <option value="IL" {{$lists->partner_individual_state == "IL" ? 'selected': ''}}>Illinois</option>
                                        <option value="IN" {{$lists->partner_individual_state == "IN" ? 'selected': ''}}>Indiana</option>
                                        <option value="KS" {{$lists->partner_individual_state  == "KS" ? 'selected': ''}}>Kansas</option>
                                        <option value="KY" {{$lists->partner_individual_state  == "KY" ? 'selected': ''}}>Kentucky</option>
                                        <option value="LA" {{$lists->partner_individual_state  == "LA" ? 'selected': ''}}>Louisiana</option>
                                        <option value="MA" {{$lists->partner_individual_state  == "MA" ? 'selected': ''}}>Massachusetts</option>
                                        <option value="MD" {{$lists->partner_individual_state  == "MD" ? 'selected': ''}}>Maryland</option>
                                        <option value="ME" {{$lists->partner_individual_state == "ME" ? 'selected': ''}}>Maine</option>
                                        <option value="MI" {{$lists->partner_individual_state  == "MI" ? 'selected': ''}}>Michigan</option>
                                        <option value="MN" {{$lists->partner_individual_state  == "MN" ? 'selected': ''}}>Mississippi</option>
                                        <option value="MO" {{$lists->partner_individual_state  == "MO" ? 'selected': ''}}>Missouri</option>
                                        <option value="MS" {{$lists->partner_individual_state  == "MS" ? 'selected': ''}}>Mississippi</option>
                                        <option value="MT" {{$lists->partner_individual_state  == "MT" ? 'selected': ''}}>Montana</option>
                                        <option value="NC" {{$lists->partner_individual_state == "NC" ? 'selected': ''}}>North Carolina</option>
                                        <option value="ND" {{$lists->partner_individual_state == "ND" ? 'selected': ''}}>North Dakota</option>
                                        <option value="NE" {{$lists->partner_individual_state == "NE" ? 'selected': ''}}>Nebraska</option>
                                        <option value="NH" {{$lists->partner_individual_state == "NH" ? 'selected': ''}}>New Hampshire</option>
                                        <option value="NJ" {{$lists->partner_individual_state == "NJ" ? 'selected': ''}}>New Jersey</option>
                                        <option value="NM" {{$lists->partner_individual_state == "NM" ? 'selected': ''}}>New Mexico</option>
                                        <option value="NV" {{$lists->partner_individual_state  == "NV" ? 'selected': ''}}>Nevada</option>
                                        <option value="NY" {{$lists->partner_individual_state  == "NY" ? 'selected': ''}}>New York</option>
                                        <option value="OH" {{$lists->partner_individual_state  == "OH" ? 'selected': ''}}>Ohio</option>
                                        <option value="OK" {{$lists->partner_individual_state  == "OK" ? 'selected': ''}}>Oklahoma</option>
                                        <option value="OR" {{$lists->partner_individual_state  == "OR" ? 'selected': ''}}>Oregon</option>
                                        <option value="PA" {{$lists->partner_individual_state  == "PA" ? 'selected': ''}}>Pennsylvania</option>
                                        <option value="PR" {{$lists->partner_individual_state == "PR" ? 'selected': ''}}>Puerto Rico</option>
                                        <option value="RI" {{$lists->partner_individual_state  == "RI" ? 'selected': ''}}>Rhode Island</option>
                                        <option value="SC" {{$lists->partner_individual_state  == "SC" ? 'selected': ''}}>South Carolina</option>
                                        <option value="SD" {{$lists->partner_individual_state  == "SD" ? 'selected': ''}}>South Dakota</option>
                                        <option value="TN" {{$lists->partner_individual_state  == "TN" ? 'selected': ''}}>Tennessee</option>
                                        <option value="TX" {{$lists->partner_individual_state  == "TX" ? 'selected': ''}}>Texas</option>
                                        <option value="UT" {{$lists->partner_individual_state == "UT" ? 'selected': ''}}>Utah</option>
                                        <option value="VA" {{$lists->partner_individual_state == "VA" ? 'selected': ''}}>Virginia</option>
                                        <option value="VI" {{$lists->partner_individual_state == "VI" ? 'selected': ''}}>Virgin Islands</option>
                                        <option value="VT" {{$lists->partner_individual_state == "VT" ? 'selected': ''}}>Vermont</option>
                                        <option value="WA" {{$lists->partner_individual_state == "WA" ? 'selected': ''}}>Washington</option>
                                        <option value="WI" {{$lists->partner_individual_state == "WI" ? 'selected': ''}}>Wisconsin</option>
                                        <option value="WV" {{$lists->partner_individual_state == "WV" ? 'selected': ''}}>West Virginia</option>
                                        <option value="WY" {{$lists->partner_individual_state == "WY" ? 'selected': ''}}>Wyoming</option>
                                    </optgroup> 
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_zip_code">Zip Code</label>
                                <input type="text" class="form-control"  name="partner_individual_zip_code" value="{{$lists->partner_individual_zip_code}}" id="partner_individual_zip_code">
                            </div>
                        </div>
                    </div>                
                </div>
                <div class="form-content">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="form-btn-flex-between">
                            <a href="{{url()->previous() }}" class="form-cancel-btn">Cancel</a>
                            <button type="submit" class="form-submit-btn">Submit</button>
                        </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
    
</section>

<!--// Main Area end //-->
@endsection
    