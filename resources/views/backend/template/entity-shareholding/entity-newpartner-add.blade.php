@extends('backend.inc.master')

@section('main-content')
    <!--// Main Area Start //-->
    <section class="panel-wrapper panel-center">
        @if (Session::has('success-message'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success-message') }}
            </div>
        @endif
        <div class="form-wrapper">
            <div class="form-heading">
                <h6>Entity New Partner Add</h6>
            </div>
            <form action="{{ url('entity-newpartner-add-submit') }}" method="POST" id="entity-newpartner-add-form">
                @csrf
                <!-- start--->
                <div class="form-content pb-0">
                    <div class="row mt-4">
                        <!-- from entity properties-->
                        <div class="col-lg-12">
                            <div class="form-flex-item-box order-error-select">
                                <label for="entity_select-list">Select Entity</label>
                                <select name="ENTITY_SELECT" class="form-select select-matcher-obj select2"
                                    id="entity_select-list" data-select2-id="entity_select-list_select"
                                    aria-label="Default select example">
                                    <optgroup label="Please Select Member" data-select2-id="entity_select-list_select"
                                        disabled>
                                        <option value="">Please Select</option>
                                        @foreach ($entitys as $entity)
                                            <option
                                                {{ $entity->ID == session()->get('entity', 'default') ? 'selected' : '' }}
                                                value="{{ $entity->ID }}">{{ $entity->ENTITY_NAME }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-flex-item-box order-error-select">
                                <label for="PROPERTY_SELECT">Select Property</label>
                                <select disabled name="PROPERTY_SELECT[]" class="form-select select-matcher-obj select2"
                                    id="property_select-list" data-select2-id="property_select-list_select"
                                    aria-label="Default select example" multiple="multiple">
                                    <optgroup label="Please Select Member" data-select2-id="property_select-list_select"
                                        disabled>
                                        <option value="">Please Select</option>
                                        @foreach ($propertys as $property)
                                            <option
                                                {{ Str::contains(session()->get('property', 'default'), $property->ID) ? 'selected' : '' }}
                                                value="{{ $property->ID }}"
                                                data-price="{{ $property->PURCHASE_PRICE }}">
                                                {{ $property->PROPERTY_ADDRESS }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-flex-item-box">
                                <label for="total_value">Total Value</label>
                                <input value="{{ session()->get('total', 'default') }}" type="text" class="form-control tpval" name="TOTAL_PROPERTIES_VALUE"
                                    id="TOTAL_PROPERTIES_VALUE"  readonly>
                            </div>
                        </div>
                        <!-- Add partner-->
                        <div class="col-lg-12">
                            <div class="form-flex-item-box order-error-select">
                                <label for="entity_select-list">Select Partner</label>
                                <select name="INVESTOR_ID" class="form-select select-matcher-obj select2"
                                    id="investor_select-list" data-select2-id="investor_select_list_select"
                                    aria-label="Default select example">
                                    <optgroup label="Please Select Investor" data-select2-id="investor_select-list_select">
                                        <option value="">Please Select Investor</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->ID }}" data-first="{{ $user->FIRST_NAME }}"
                                                data-Last="{{ $user->LAST_NAME }}">
                                                {{ $user->FIRST_NAME . ' ' . $user->LAST_NAME }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="First Name">First Name</label>
                                <input type="text" class="form-control fname" name="FIRST_NAME"
                                    value="{{ $user->FIRST_NAME }}" id="FIRST_NAME" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="Last Name">Last Name</label>
                                <input type="text" class="form-control lname" name="LAST_NAME"
                                    value="{{ $user->LAST_NAME }}" id="LAST_NAME" readonly>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="Total Share">Total Share</label>
                                <input type="text" class="form-control" name="TOTAL_SHARE" id="TOTAL_SHARE">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="Cash">Cash</label>
                                <input type="text" class="form-control getvalue" value="" name="CASH" id="CASH">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="Loan">Loan</label>
                                <input type="text" class="form-control" name="LOAN" id="LOAN">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="Shareholding">Shareholding</label>
                                <input type="text" step="any" class="form-control" name="SHAREHOLDING" id="SHAREHOLDING"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="Finder Fees">Finder Fees</label>
                                <input type="text" class="form-control getvalue" value="" name="FINDER_FEES"
                                    id="FINDER_FEES">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="Closing Fees">Closing Fees</label>
                                <input type="text" class="form-control getvalue" value="" name="CLOSING_FEES"
                                    id="CLOSING_FEES">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-flex-item-box">
                                <label for="Total Cash">Total Cash</label>
                                <input type="text" class="form-control" name="TOTAL_CASH" id="TOTAL_CASH" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-content pt-0">
                    <div class="form-btn-flex-between">
                        <button type="button" class="form-cancel-btn"><a href="{{ url()->previous() }}"
                                style="color:black">Cancel</a></button>
                        <button type="submit" class="form-submit-btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!--// Main Area End //-->