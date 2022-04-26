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
            <h6>Edit Property</h6>
        </div>
        <div class="form-content">
            <form action="{{url('property-list-update/'.$lists->id)}}" method="POST" id="add-new-property-form">
                @csrf
                @method('PUT')

                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_address">Property Address </label>
                            <input type="text" class="form-control" name="property_address" value="{{$lists->property_address}}"  id="property_address">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_of_acres"># Of Acres</label>
                            <input type="text" class="form-control" name="property_of_acres" value="{{$lists->property_of_acres}}" id="property_of_acres">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_map_right_url">Map Right Url</label>
                            <input type="text" class="form-control" name="property_map_right_url" value="{{$lists->property_map_right_url}}" id="property_map_right_url">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_contract_url">Contract</label>
                            <input type="text" class="form-control" name="property_contract_url" value="{{$lists->property_contract_url}}" id="property_contract_url">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_survey_url">Survey Url</label>
                            <input type="text" class="form-control" name="property_survey_url" value="{{$lists->property_survey_url}}" id="property_survey_url">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_closing_documents">Closing Documents</label>
                            <input type="text" class="form-control" name="property_closing_documents" value="{{$lists->property_closing_documents}}" id="property_closing_documents">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_appraisal">Appraisal</label>
                            <input type="text" class="form-control" name="property_appraisal" value="{{$lists->property_appraisal}}" id="property_appraisal">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-flex-item-box">
                            <label for="property_phase_env_inspection">Phase Env Inspection</label>
                            <input type="text" class="form-control" name="property_phase_env_inspection" value="{{$lists->property_phase_env_inspection}}" id="property_phase_env_inspection">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-flex-item-box">
                            <label for="property_attorney_feedback">Attorney Feedback</label>
                            <input type="text" class="form-control" name="property_attorney_feedback" value="{{$lists->property_attorney_feedback}}" id="property_attorney_feedback">
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