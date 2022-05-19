@extends('backend.inc.master')

@section('main-content')
<section class="panel-wrapper panel-center">
    <div class="form-wrapper">
        <div class="form-heading details-view-edit-wrap">
            <h6>Property Details</h6>
            <a href="{{url('property-list-edit/'.$lists->ID)}}" title="Edit Property"><i class="fa fa-edit"></i></a>
        </div>
        <div class="form-content">
           
        @if ( $lists->PROPERTY_ADDRESS )
                <div class="form-flex-box-text-item">
                    <span>Property Address</span>
                    <p>{{$lists->PROPERTY_ADDRESS}}</p>
                </div>
            @endif

            @if ( $lists->GOOGLE_COORDINATES )
                <div class="form-flex-box-text-item">
                    <span>Google Coordinates</span>
                    <p>{{$lists->GOOGLE_COORDINATES}}</p>
                </div>
            @endif

            @if ( $lists->ENTITY_COMPANY)
                <div class="form-flex-box-text-item">
                    <span>Company</span>
                    <p>{{$lists->entity_id->ENTITY_NAME}}</p>
                </div>
            @endif

            @if ( $lists->NO_OF_ACRES)
                <div class="form-flex-box-text-item">
                    <span>Number Of Acres</span>
                    <p>{{$lists->NO_OF_ACRES}}</p>
                </div>
            @endif

            @if ( $lists->MAP_URL )
            <div class="form-flex-box-text-item">
                <span>Map Right Url</span>
                <p><a href="{{$lists->MAP_URL}}" target="_blank" class="text-link-dark">Map Right Url</a></p>
            </div>
            @endif

            @if ( $lists->PROPERTY_DOCUMENTS )
                <div class="form-flex-box-text-item">
                    <span>Property Documents</span>
                    <p><a href="{{$lists->PROPERTY_DOCUMENTS}}" target="_blank" class="text-link-dark">Property Documents</a></p>
                </div>
            @endif

            

            @if ( $lists->PURCHASE_PRICE)
            <div class="form-flex-box-text-item">
                <span>Purchase Price</span>
                <p>{{$lists->PURCHASE_PRICE}}</p>
            </div>
            @endif

            
            @if ( $lists->COST_PER_ACRE )
            <div class="form-flex-box-text-item">
                <span>Per Acre Cost</span>
                <p>{{$lists->COST_PER_ACRE}}</p>
            </div>
            @endif

            @if ( $lists->POTENTIAL_PER_ACRE )
            <div class="form-flex-box-text-item">
                <span>Potential Per Acre</span>
                <p>{{$lists->POTENTIAL_PER_ACRE}}</p>
            </div>
            @endif

            @if ( $lists->POTENTIAL_MARKET_VALUE )
            <div class="form-flex-box-text-item">
                <span>Potential Market Value</span>
                <p>{{$lists->POTENTIAL_MARKET_VALUE}}</p>
            </div>
            @endif

            
        </div>
        <div class="form-content">
            <div class="form-btn-flex-between pt-2">
                <a href="{{url()->previous() }}" class="form-cancel-btn">Cancel</a>
                <a href="{{url('add-new-property')}}" class="form-submit-btn">Add Property</a>
             </div>
        </div>
    </div>  
   
</section>
@endsection