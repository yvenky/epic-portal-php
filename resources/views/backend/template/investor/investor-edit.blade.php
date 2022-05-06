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
        <!-- {{$lists->SPOUSE_EMPLOYMENT_STATUS}} -->
        <form action="{{url('investor-update/'.$lists->ID)}}" method="POST" id="investor-edit-form-modal">
            @csrf
            @method('PUT')
                <div class="form-content pb-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <fieldset>
                                    <label for="FIRST_NAME">First Name</label>
                                    <input type="text" class="form-control" name="FIRST_NAME" value="{{$lists->FIRST_NAME}}" id="FIRST_NAME">
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <fieldset>
                                    <label for="LAST_NAME">Last Name</label>
                                    <input type="text" class="form-control" name="LAST_NAME" value="{{$lists->LAST_NAME}}" id="LAST_NAME">
                                </fieldset>
                            </div>
                        </div>                                               
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="EMPLOYMENT_STATUS">Employment Status</label>
                                <select name="EMPLOYMENT_STATUS" class="form-select" value="{{$lists->EMPLOYMENT_STATUS}}"aria-label="Default select example">
                                    <option value="SE" {{$lists->EMPLOYMENT_STATUS == "SE" ? 'selected': ''}}>Self Employed</option>
                                    <option value="W2" {{$lists->EMPLOYMENT_STATUS == "W2" ? 'selected': ''}}>W2</option>
                                    <option value="HM" {{$lists->EMPLOYMENT_STATUS == "HM" ? 'selected': ''}}>Home Maker</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="HOUSEHOLD_INCOME">Household Income</label>
                                <select name="HOUSEHOLD_INCOME" class="form-select" value="{{$lists->HOUSEHOLD_INCOME }}" aria-label="Default select example">
                                    <option value="0"{{$lists->HOUSEHOLD_INCOME == "0" ? 'selected': ''}}>Upto 100000</option>
                                    <option value="1"{{$lists->HOUSEHOLD_INCOME == "1" ? 'selected': ''}}>100000 to 200000</option>
                                    <option value="2"{{$lists->HOUSEHOLD_INCOME == "2" ? 'selected': ''}}>200K to 300K</option>
                                    <option value="3"{{$lists->HOUSEHOLD_INCOME == "3" ? 'selected': ''}}>300K to 400K</option>
                                    <option value="4"{{$lists->HOUSEHOLD_INCOME == "4" ? 'selected': ''}}>400K to 500K</option>
                                    <option value="5"{{$lists->HOUSEHOLD_INCOME == "5" ? 'selected': ''}}>More Than 500K</option>
                                </select>
                            </div>        
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="EMAIL_ADDRESS">Email Address</label>
                                <input type="text" class="form-control required" name="EMAIL_ADDRESS" value="{{$lists->EMAIL_ADDRESS}}" id="EMAIL_ADDRESS">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="PHONE_NUMBER">Phone Number</label>
                                <input type="text" class="form-control required" name="PHONE_NUMBER" value="{{$lists->PHONE_NUMBER	}}" id="PHONE_NUMBER">
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
                                <label for="SPOUSE_FIRSTNAME">Spouse First Name</label>
                                <input type="text" class="form-control" name="SPOUSE_FIRSTNAME" value="{{$lists->SPOUSE_FIRSTNAME}}" id="SPOUSE_FIRSTNAME">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="SPOUSE_LASTNAME">Spouse Last Name</label>
                                <input type="text" class="form-control" name="SPOUSE_LASTNAME" value="{{$lists->SPOUSE_LASTNAME}}" id="SPOUSE_LASTNAME">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="SPOUSE_EMPLOYMENT_STATUS">Employment Status</label>
                                <select name="SPOUSE_EMPLOYMENT_STATUS" class="form-select" value="{{$lists->SPOUSE_EMPLOYMENT_STATUS }}" aria-label="Default select example">
                                    <option value="SE" {{$lists->SPOUSE_EMPLOYMENT_STATUS  == "SE" ? 'selected': ''}}>Self Employed</option>
                                    <option value="W2" {{$lists->SPOUSE_EMPLOYMENT_STATUS  == "W2" ? 'selected': ''}}>W2</option>
                                    <option value="HM" {{$lists->SPOUSE_EMPLOYMENT_STATUS  == "HM" ? 'selected': ''}}>Home Maker</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="SPOUSE_EMAIL">Spouse Email Address</label>
                                <input type="text" class="form-control" name="SPOUSE_EMAIL" value="{{$lists->SPOUSE_EMAIL}}" id="SPOUSE_EMAIL">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="SPOUSE_PHONE_NO">Spouse Phone Number</label>
                                <input type="text" class="form-control required" name="SPOUSE_PHONE_NO" value="{{$lists->SPOUSE_PHONE_NO}}" id="SPOUSE_PHONE_NO">
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
                                <input type="text" class="form-control" name="partner_individual_street" value="{{$lists->address->STREET_1}}" id="partner_individual_street">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_city">City</label>
                                <input type="text" class="form-control" name="partner_individual_city" value="{{$lists->address->CITY}}" id="partner_individual_city">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box order-error-select">
                                <label for="partner_individual_state">State</label>
                                <select name="partner_individual_state" class="form-select select2 select-matcher-obj" id="partner_individual_state"  data-select2-id="partner_individual_state_select"  aria-label="Default select example">
                                    <optgroup label="Please Select State" data-select2-id="partner_individual_state_select">
                                        <option value="AA" {{$lists->address->STATE == "AA" ? 'selected': ''}}>Armed Forces America</option>
                                        <option value="AE" {{$lists->address->STATE == "AE" ? 'selected': ''}}>Armed Forces</option>
                                        <option value="AK" {{$lists->address->STATE  == "AK" ? 'selected': ''}}>Alaska</option>
                                        <option value="AL" {{$lists->address->STATE  == "AL" ? 'selected': ''}}>Alabama</option>
                                        <option value="AP" {{$lists->address->STATE  == "AP" ? 'selected': ''}}>Armed Forces Pacific</option>
                                        <option value="AR" {{$lists->address->STATE  == "AR" ? 'selected': ''}}>Arkansas</option>
                                        <option value="AZ" {{$lists->address->STATE  == "AZ" ? 'selected': ''}}>Arizona</option>
                                        <option value="CA" {{$lists->address->STATE == "CA" ? 'selected': ''}}>California</option>
                                        <option value="CO" {{$lists->address->STATE  == "CO" ? 'selected': ''}}>Colorado</option>
                                        <option value="CT" {{$lists->address->STATE  == "CT" ? 'selected': ''}}>Connecticut</option>
                                        <option value="DC" {{$lists->address->STATE  == "DC" ? 'selected': ''}}>Washington DC</option>
                                        <option value="DE" {{$lists->address->STATE  == "DE" ? 'selected': ''}}>Delaware</option>
                                        <option value="FL" {{$lists->address->STATE  == "FL" ? 'selected': ''}}>Florida</option>
                                        <option value="GA" {{$lists->address->STATE == "GA" ? 'selected': ''}}>Georgia</option>
                                        <option value="GU" {{$lists->address->STATE == "GU" ? 'selected': ''}}>Guam</option>
                                        <option value="HI" {{$lists->address->STATE == "HI" ? 'selected': ''}}>Hawaii</option>
                                        <option value="IA" {{$lists->address->STATE == "IA" ? 'selected': ''}}>Iowa</option>
                                        <option value="ID" {{$lists->address->STATE == "ID" ? 'selected': ''}}>Idaho</option>
                                        <option value="IL" {{$lists->address->STATE == "IL" ? 'selected': ''}}>Illinois</option>
                                        <option value="IN" {{$lists->address->STATE == "IN" ? 'selected': ''}}>Indiana</option>
                                        <option value="KS" {{$lists->address->STATE  == "KS" ? 'selected': ''}}>Kansas</option>
                                        <option value="KY" {{$lists->address->STATE  == "KY" ? 'selected': ''}}>Kentucky</option>
                                        <option value="LA" {{$lists->address->STATE  == "LA" ? 'selected': ''}}>Louisiana</option>
                                        <option value="MA" {{$lists->address->STATE  == "MA" ? 'selected': ''}}>Massachusetts</option>
                                        <option value="MD" {{$lists->address->STATE  == "MD" ? 'selected': ''}}>Maryland</option>
                                        <option value="ME" {{$lists->address->STATE == "ME" ? 'selected': ''}}>Maine</option>
                                        <option value="MI" {{$lists->address->STATE  == "MI" ? 'selected': ''}}>Michigan</option>
                                        <option value="MN" {{$lists->address->STATE  == "MN" ? 'selected': ''}}>Mississippi</option>
                                        <option value="MO" {{$lists->address->STATE  == "MO" ? 'selected': ''}}>Missouri</option>
                                        <option value="MS" {{$lists->address->STATE  == "MS" ? 'selected': ''}}>Mississippi</option>
                                        <option value="MT" {{$lists->address->STATE  == "MT" ? 'selected': ''}}>Montana</option>
                                        <option value="NC" {{$lists->address->STATE == "NC" ? 'selected': ''}}>North Carolina</option>
                                        <option value="ND" {{$lists->address->STATE == "ND" ? 'selected': ''}}>North Dakota</option>
                                        <option value="NE" {{$lists->address->STATE == "NE" ? 'selected': ''}}>Nebraska</option>
                                        <option value="NH" {{$lists->address->STATE == "NH" ? 'selected': ''}}>New Hampshire</option>
                                        <option value="NJ" {{$lists->address->STATE == "NJ" ? 'selected': ''}}>New Jersey</option>
                                        <option value="NM" {{$lists->address->STATE == "NM" ? 'selected': ''}}>New Mexico</option>
                                        <option value="NV" {{$lists->address->STATE  == "NV" ? 'selected': ''}}>Nevada</option>
                                        <option value="NY" {{$lists->address->STATE  == "NY" ? 'selected': ''}}>New York</option>
                                        <option value="OH" {{$lists->address->STATE  == "OH" ? 'selected': ''}}>Ohio</option>
                                        <option value="OK" {{$lists->address->STATE  == "OK" ? 'selected': ''}}>Oklahoma</option>
                                        <option value="OR" {{$lists->address->STATE  == "OR" ? 'selected': ''}}>Oregon</option>
                                        <option value="PA" {{$lists->address->STATE  == "PA" ? 'selected': ''}}>Pennsylvania</option>
                                        <option value="PR" {{$lists->address->STATE == "PR" ? 'selected': ''}}>Puerto Rico</option>
                                        <option value="RI" {{$lists->address->STATE  == "RI" ? 'selected': ''}}>Rhode Island</option>
                                        <option value="SC" {{$lists->address->STATE  == "SC" ? 'selected': ''}}>South Carolina</option>
                                        <option value="SD" {{$lists->address->STATE  == "SD" ? 'selected': ''}}>South Dakota</option>
                                        <option value="TN" {{$lists->address->STATE  == "TN" ? 'selected': ''}}>Tennessee</option>
                                        <option value="TX" {{$lists->address->STATE  == "TX" ? 'selected': ''}}>Texas</option>
                                        <option value="UT" {{$lists->address->STATE == "UT" ? 'selected': ''}}>Utah</option>
                                        <option value="VA" {{$lists->address->STATE == "VA" ? 'selected': ''}}>Virginia</option>
                                        <option value="VI" {{$lists->address->STATE == "VI" ? 'selected': ''}}>Virgin Islands</option>
                                        <option value="VT" {{$lists->address->STATE == "VT" ? 'selected': ''}}>Vermont</option>
                                        <option value="WA" {{$lists->address->STATE == "WA" ? 'selected': ''}}>Washington</option>
                                        <option value="WI" {{$lists->address->STATE == "WI" ? 'selected': ''}}>Wisconsin</option>
                                        <option value="WV" {{$lists->address->STATE == "WV" ? 'selected': ''}}>West Virginia</option>
                                        <option value="WY" {{$lists->address->STATE == "WY" ? 'selected': ''}}>Wyoming</option>
                                    </optgroup> 
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="partner_individual_zip_code">Zip Code</label>
                                <input type="text" class="form-control"  name="partner_individual_zip_code" value="{{$lists->address->ZIP_CODE}}" id="partner_individual_zip_code">
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
    