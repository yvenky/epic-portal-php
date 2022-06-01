@extends('backend.inc.master')

@section('main-content')
        
        <!--// Main Area Start //-->
        <main class="main-area" role="main">
            <h5>Add partners to Entity</h5><br>
        </main>
        <!--// Main Area End //-->
        <section class="panel-wrapper panel-full-width mt-resp-top">
                

            <div class="form-content">
                <form action="{{url('entity_properties-submit')}}" method="POST" id="add-new-property-form">
                    @csrf
                           
                        <div class="col-lg-6">
                            <div class="form-flex-item-box order-error-select">
                                <label for="entity_select-list">Select Entity</label>
                                    <select name="ENTITY_SELECT" class="form-select select-matcher-obj select2" id="entity_select-list"  data-select2-id="entity_select-list_select"  aria-label="Default select example">
                                    <optgroup label="Please Select Member" data-select2-id="entity_select-list_select">
                                        <option value="">Please Select</option>
                                        @foreach ( $users as $user ) 
                                            <option value="{{$user->ID}}">{{$user->ENTITY_NAME}}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>     
                        </div>
                        
                     

                        <div class="col-lg-6">
                            <div class="form-flex-item-box order-error-select">
                                <label for="PROPERTY_SELECT">Select Property</label>
                                    <select name="PROPERTY_SELECT[]" class="form-select select-matcher-obj select2" id="property_select-list"  data-select2-id="property_select-list_select"  aria-label="Default select example" multiple="multiple">
                                    <optgroup label="Please Select Member" data-select2-id="property_select-list_select">
                                        <option value="">Please Select</option>
                                        @foreach ( $lists as $list ) 
                                            <option value="{{$list->ID}}"  data-price="{{$list->PURCHASE_PRICE}}">{{$list->PROPERTY_ADDRESS}}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>     
                        </div>
               
                        
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="total_value">Total Value</label>            
                                <input type="text" class="form-control" name="TOTAL_PROPERTIES_VALUE" id="TOTAL_PROPERTIES_VALUE" readonly>                
                            </div>
                        </div>

                        <br>
                        
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="form-btn-flex-between float-end ">
                            <button type="submit" class="form-submit-btn ">Add Partner</button>
                        </div>
                        </div>
                    </div>
                </form>
    
            </div>

        </section>


        <section class="panel-wrapper panel-full-width mt-resp-top">
            <div class="form-wrapper">
                @if(Session::has('success-message-edit')) 
                <div class="alert alert-success" role="alert">
                    {{Session::get('success-message-edit')}} 
                  </div>
                 @endif 
                 @if(Session::has('success-message')) 
                 <div class="alert alert-success" role="alert">
                     {{Session::get('success-message')}}
                   </div>
                  @endif 
                  @if(Session::has('success-message-delete')) 
                  <div class="alert alert-success" role="alert">
                      {{Session::get('success-message-delete')}}
                    </div>
                   @endif 
                <div class="form-heading d-flex justify-content-between align-items-center">
                    <h6>Entity Shareholding Partner</h6>
                    <a href="{{url('/entity-newpartner-add')}}" class="dark-grey-btn">
                        Add Entity Partner
                    </a>
                </div>
                <div class="container-fluid table-container-wrap">
                    <div class="table-responsive">
                        <table id="expense_datatable" class="table table-striped table-bordered table-data-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Partner Name</th>
                                    <th>Total Share</th>
                                    <th>Share holding</th>
                                    <th>Cash</th>
                                    <th>Loan</th>
                                    <th>Finder Fees</th>
                                    <th>Closing Costs</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody class="view-icon-table">
                              
                                <tr>
                                    <td>id</td>
                                    <td>name</td>
                                    <td>name</td>
                                    <td>name</td>
                                    <td>name</td>
                                    <td>name</td>
                                    <td>name</td>
                                    <td>name</td>
                                 
                                    <td>
                                        <a href="#" class="table-view-btn">
                                            <i class="fa fa-eye"></i>
                                        </a>  
                                        <a href="#" class="table-edit-btn"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="table-delete-btn" data-bs-toggle="modal" data-bs-target="#delete-entity-partners-modal-id">
                                            <i class="fa fa-trash"></i>
                                        </a>                                                                     
                                        <div class="modal fade" id="delete-entity-partners-modal-id" tabindex="-1" aria-labelledby="delete-entity-partners-modalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content ">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i> </button>
                                                    <div class="modal-body">
                                                        <div class="modal-trash-icon">
                                                            <i class="fa fa-trash"></i>
                                                        </div>
                                                        <p>
                                                            Are you sure want to delete  <br>  ? 
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer form-btn-flex-between">
                                                        <button type="button" class="form-cancel-btn" data-bs-dismiss="modal">Cancel</button>
                                                        <a href="#" ><button type="button" class="form-submit-btn">Yes</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
        </section>


@endsection