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
                            <select class="select-member-1-wrap form-control select2" name="add_partner_managing_member_1" data-select2-id="managing-member-1-select" tabindex="-1" aria-hidden="false">
                                <optgroup label="Please Select Member" data-select2-id="managing-member-1-select">
                                    @foreach ( $users as $user ) 
                                        <option {{$user->partner_individual_first_name == $lists->add_partner_managing_member_1 ? 'selected': ''}} value="{{ $user->partner_individual_first_name }}"> {{ $user->partner_individual_first_name ." " .$user->partner_individual_last_name }}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>     
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box order-error-select">
                            <label for="expense_date">Managing Member 2</label>
                            <select class="select-member-1-wrap form-control select2"  name="add_partner_managing_member_2" data-select2-id="managing-member-2-select" tabindex="-1" aria-hidden="false">
                                <optgroup label="Please Select Member" data-select2-id="managing-member-2-select">  
                                    @foreach ( $users as $user ) 
                                    <option {{$user->partner_individual_first_name == $lists->add_partner_managing_member_2 ? 'selected': ''}} value="{{ $user->partner_individual_first_name }}"> {{ $user->partner_individual_first_name ." " .$user->partner_individual_last_name }}</option>
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
                        <div class="form-flex-item-box">
                            <label for="add_partner_entity_address_state">State</label>
                            <input type="text" class="form-control" name="add_partner_entity_address_state" value="{{$lists->add_partner_entity_address_state}}" id="add_partner_entity_address_state">
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