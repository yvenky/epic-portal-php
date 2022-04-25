@extends('backend.inc.master')

@section('main-content')

<section class="panel-wrapper panel-center">
    <div class="form-wrapper">
        <div class="form-heading details-view-edit-wrap">
            <h6>Entity Details</h6>
            <a href="{{url('entity-edit/'.$lists->id)}}" title="Edit Entity"><i class="fa fa-edit"></i></a>
        </div>
        <div class="form-content">

            @if ( $lists->add_partner_entity_name )
                <div class="form-flex-box-text-item">
                    <span>Entity Name</span>
                    <p>{{$lists->add_partner_entity_name}}</p>
                </div>
            @endif

            @if ( $lists->add_partner_managing_member_1 )
                <div class="form-flex-box-text-item">
                    <span>Managing Member 1</span>
                    <p>{{$lists->add_partner_managing_member_1}}</p>
                </div>
            @endif

            @if ( $lists->add_partner_managing_member_2 )
            <div class="form-flex-box-text-item">
                <span>Managing Member 2</span>
                <p>{{$lists->add_partner_managing_member_2}}</p>
            </div>
            @endif

            @if ( $lists->add_partner_entity_ein )
            <div class="form-flex-box-text-item">
                <span>EIN</span>
                <p>{{$lists->add_partner_entity_ein}}</p>
            </div>
            @endif

            @if ( $lists->add_partner_entity_web_file_number )
            <div class="form-flex-box-text-item">
                <span>Web File Number</span>
                <p>{{$lists->add_partner_entity_web_file_number}}</p>
            </div>
            @endif

            @if ( $lists->add_partner_entity_docs )
            <div class="form-flex-box-text-item">
                <span>Entity Docs</span>
                <p>{{$lists->add_partner_entity_docs}}</p>
            </div>
            @endif
        </div>
        <div class="form-heading top-border">
            <h6>Entity Address  Details</h6>
        </div>
        <div class="form-content">
            
            @if ( $lists->add_partner_entity_address_street )
            <div class="form-flex-box-text-item">
                <span>Street</span>
                <p>{{$lists->add_partner_entity_address_street }}</p>
            </div>
            @endif

            @if ( $lists->add_partner_entity_address_city )
            <div class="form-flex-box-text-item">
                <span>City</span>
                <p>{{$lists->add_partner_entity_address_city }}</p>
            </div>
            @endif

            @if ( $lists->add_partner_entity_address_state )
            <div class="form-flex-box-text-item">
                <span>State</span>
                <p>{{$lists->add_partner_entity_address_state }}</p>
            </div>
            @endif

            @if ( $lists->add_partner_entity_address_zipcode )
            <div class="form-flex-box-text-item">
                <span>Zip Code</span>
                <p>{{$lists->add_partner_entity_address_zipcode }}</p>
            </div>
            @endif

            <div class="form-btn-flex-between pt-4">
                <button type="button" class="form-cancel-btn"><a href="{{url('entity-list')}}" style="color:black">Home</a></button>
                 <button type="button" class="form-submit-btn"><a href="{{url('add-new-entry')}}" style="color:black">Add New Entity</a></button>
             </div>
        </div>
    </div>  
   
</section>
@endsection