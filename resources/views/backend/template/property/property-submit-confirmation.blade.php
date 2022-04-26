@extends('backend.inc.master')

@section('main-content')

<section class="panel-wrapper panel-center">

    @if(Session::has('success-message')) 
    <div class="alert alert-success" role="alert">
        {{Session::get('success-message')}}
      </div>
     @endif 
    <div class="form-wrapper">
        <div class="form-heading details-view-edit-wrap">
            <h6>Property  Details</h6>
            <a href="{{url('property-list-edit/'.$lists->id)}}" title="Edit Property"><i class="fa fa-edit"></i></a>
        </div>
        <div class="form-content">

            @if ( $lists->property_address )
                <div class="form-flex-box-text-item">
                    <span>Property Address</span>
                    <p>{{$lists->property_address}}</p>
                </div>
            @endif

            @if ( $lists->property_of_acres )
                <div class="form-flex-box-text-item">
                    <span># Of Acres</span>
                    <p>{{$lists->property_of_acres}}</p>
                </div>
            @endif

            @if ( $lists->property_map_right_url )
            <div class="form-flex-box-text-item">
                <span>Map Right Url</span>
                <p><a href="https://{{$lists->property_map_right_url}}" target="_blank">Map Right Url</a></p>
            </div>
            @endif

            @if ( $lists->property_contract_url )
            <div class="form-flex-box-text-item">
                <span>Contract</span>
                <p><a href="https://{{$lists->property_contract_url}}" target="_blank">Contract</a></p>
            </div>
            @endif

            @if ( $lists->property_survey_url )
            <div class="form-flex-box-text-item">
                <span>Survey Url</span>
                <p><a href="https://{{$lists->property_survey_url}}" target="_blank">Survey Url</a></p>
            </div>
            @endif

            @if ( $lists->property_closing_documents )
            <div class="form-flex-box-text-item">
                <span>Closing Documents</span>
                <p><a href="https://{{$lists->property_closing_documents}}" target="_blank">Closing Documents</a></p>
            </div>
            @endif

            @if ( $lists->property_appraisal )
            <div class="form-flex-box-text-item">
                <span>Appraisal</span>
                <p><a href="https://{{$lists->property_appraisal}}" target="_blank">Appraisal</a></p>
            </div>
            @endif

            @if ( $lists->property_phase_env_inspection )
            <div class="form-flex-box-text-item">
                <span>Phase Env Inspection</span>
                <p><a href="https://{{$lists->property_phase_env_inspection}}" target="_blank">Phase Env Inspection</a></p>
            </div>
            @endif

            @if ( $lists->property_attorney_feedback )
            <div class="form-flex-box-text-item">
                <span>Attorney Feedback</span>
                <p><a href="https://{{$lists->property_attorney_feedback}}" target="_blank">Attorney Feedback</a></p>
            </div>
            @endif

        </div>
        <div class="form-content">
            <div class="form-btn-flex-between pt-4">
                <a href="{{url()->previous() }}" class="form-cancel-btn">Cancel</a>
                 <button type="button" class="form-submit-btn"><a href="{{url('add-new-property')}}" style="color:black">Add New Property</a></button>
             </div>
        </div>
    </div>  
   
</section>
@endsection