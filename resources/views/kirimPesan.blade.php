@extends('layouts.main')

@section('content')
<!-- card -->
<div class="card">

    <div class="card-body">
      <!-- Stepper content -->
      <div class="bs-stepper-content">
        <form onSubmit="return false">
          <!-- Content one -->
          <div id="test-l-1" role="tabpanel" class="bs-stepper-pane fade"
            aria-labelledby="stepperFormtrigger1">
            <!-- heading -->
            <div class="mb-5">
              <h3 class="mb-1">Billing Information</h3>
              <p class="mb-0">Please fill all information below
              </p>
            </div>
            <!-- row -->
            <div class="row">
              <!-- input -->
              <div class="mb-3 col-md-6">
                <label class="form-label" for="firstName">First Name</label>
                <input type="text" class="form-control" placeholder="Enter first name" id="firstName">
              </div>
              <!-- input -->
              <div class="mb-3 col-md-6">
                <label class="form-label" for="lastName">Last Name</label>
                <input type="text" class="form-control" placeholder="Enter last name" id="lastName">
              </div>
              <!-- input -->
              <div class="mb-3 col-md-6">
                <label class="form-label" for="email">Email (Optional)</label>
                <input type="email" class="form-control" placeholder="Enter email address" id="email">
              </div>
              <!-- input -->
              <div class="mb-3 col-md-6">
                <label class="form-label" for="phone">Phone</label>
                <input type="text" class="form-control" placeholder="Enter phone number" id="phone">
              </div>
              <!-- input -->
              <div class="mb-3 col-12">
                <label class="form-label" for="address">Address</label>
                <input type="text" class="form-control" placeholder="Enter address" id="address">
              </div>
              <!-- input -->
              <div class="mb-3 col-12">
                <label class="form-label" for="town">Town / City</label>
                <input type="text" class="form-control" placeholder="Enter City" id="town">
              </div>
              <!-- input -->
              <div class="mb-3 col-12">
                <label class="form-label" for="state">State</label>
                <input type="text" class="form-control" placeholder="Enter State" id="state">
              </div>
              <!-- input -->
              <div class="mb-3 col-12">
                <label class="form-label" for="zip">Zip / Postal Code</label>
                <input type="text" class="form-control" placeholder="Zip / Postal Code" id="zip">
              </div>
              <!-- select -->
              <div class="mb-3 col-12">
                <label class="form-label">Country</label>
                <select class="form-select">
                  <option selected>Select Country</option>
                  <option value="1">India</option>
                  <option value="2">UK</option>
                  <option value="3">US</option>
                </select>
              </div>
              <!-- checkbox -->
              <div class="mb-3 col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="shipAddress">
                  <label class="form-check-label" for="shipAddress">
                    Ship to different address ?
                  </label>
                </div>
              </div>
            </div>

            <!-- Button -->
            <div class="d-flex justify-content-end">
              <button class="btn btn-primary" onclick="stepperForm.next()">
                Proceed to Shipping <i class="fe fe-shopping-bag ms-1"></i>
              </button>
            </div>
          </div>
          <!-- Content two -->
          <div id="test-l-2" role="tabpanel" class="bs-stepper-pane fade"
            aria-labelledby="stepperFormtrigger2">
            <!-- text -->
            <div class="mb-5">
              <h3 class="mb-1">Shipping Information</h3>
              <p class="mb-0">Fill the form below in order to send you the orders invoice.
              </p>
            </div>
            <!-- text -->
            <div class="d-flex justify-content-between align-items-center mb-2">
              <h4 class="mb-0">Saved Address</h4>
              <a href="#!" class="btn btn-outline-light text-dark" data-bs-toggle="modal"
                data-bs-target="#addNewAddress">Add new address</a>
            </div>
            <!-- row -->
            <div class="row">
              <div class="col-lg-6 col-12 mb-4">
                <!-- form -->
                <div class="border p-4 rounded-3">
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                      id="homeRadio">
                    <label class="form-check-label text-dark " for="homeRadio">
                      Home
                    </label>
                  </div>
                  <!-- address -->
                  <p class="mb-0">3812 Orchard Street<br>

                    Bloomington,<br>

                    Minnesota 55431,<br>

                    United States</p>
                </div>
              </div>
              <div class="col-lg-6 col-12 mb-4">
                <!-- input -->
                <div class="border p-4 rounded-3">
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                      id="officeRadio">
                    <label class="form-check-label text-dark " for="officeRadio">
                      Office
                    </label>
                  </div>
                  <!-- address -->
                  <p class="mb-0">3853 Coal Road<br>

                    Tannersville, <br>

                    Pennsylvania, 18372 <br>

                    United States</p>
                </div>
              </div>
            </div>
            <div>
              <!-- heading -->
              <h4 class="mb-4">Shipping Method</h4>
              <!-- card -->
              <div class="card card-bordered shadow-none mb-2">
                <!-- card body -->
                <div class="card-body">
                  <!-- form check -->
                  <div class="d-flex">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault"
                        id="freeDelivery">
                      <label class="form-check-label ms-2" for="freeDelivery">

                      </label>
                    </div>
                    <div>
                      <h5 class="mb-1"> Free Delivery</h5>
                      <span class="fs-6">Expected Delivery 3 to 5 Days</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- card -->
              <div class="card card-bordered shadow-none mb-2">
                <!-- card body -->
                <div class="card-body">
                  <!-- form check -->
                  <div class="d-md-flex">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault"
                        id="nextDelivery">
                      <label class="form-check-label ms-2 w-100" for="nextDelivery">

                      </label>

                    </div>
                    <div class="d-flex justify-content-between align-items-center w-100">
                      <div class="d-flex align-items-start">
                        <!-- img -->
                        <img src="../assets/images/svg/payment-logo-fedex.svg" alt="Image">
                        <!-- text -->
                        <div class="ms-2">
                          <h5 class="mb-1"> FedEx Next Day Delivery</h5>
                          <p class="mb-0 fs-6">No Delivery on Public Holidays</p>
                        </div>
                      </div>
                      <div>
                        <!-- heading -->
                        <h3 class="mb-0">$19.99
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- card -->
              <div class="card card-bordered shadow-none">
                <!-- card body -->
                <div class="card-body">
                  <div class="d-md-flex">
                    <div class="form-check">
                      <!-- input -->
                      <input class="form-check-input" type="radio" name="flexRadioDefault"
                        id="DHLExpress">
                      <label class="form-check-label ms-2 w-100" for="DHLExpress">

                      </label>
                    </div>
                    <div class="d-flex justify-content-between align-items-center w-100">
                      <!-- img -->
                      <div class="d-flex align-items-start">
                        <img src="../assets/images/svg/payment-logo-dhl.svg" alt="Image">
                        <!-- text -->
                        <div class="ms-2">
                          <h5 class="mb-1">DHL Express</h5>
                          <p class="mb-0 fs-6">1 Day Delivery</p>
                        </div>
                      </div>
                      <!-- text -->
                      <div>
                        <h3 class="mb-0">$8.99
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Button -->
            <div class="d-md-flex justify-content-between  mt-4">
              <button class="btn btn-outline-primary mb-2 mb-md-0" onclick="stepperForm.previous()">
                Back to Info
              </button>
              <!-- Button -->
              <button class="btn btn-primary" onclick="stepperForm.next()">
                Continue to Payment <i class="fe fe-credit-card ms-2"></i>
              </button>
            </div>
          </div>
          <!-- Content three -->
          <div id="test-l-3" role="tabpanel" class="bs-stepper-pane fade"
            aria-labelledby="stepperFormtrigger3">
            <!-- Card -->
            <div class="mb-5">
              <h3 class="mb-1">Payment selection</h3>
              <p class="mb-0">Please select and enter your billing information.
              </p>
            </div>
            <!-- Card -->
            <div class="card card-bordered shadow-none mb-2">
              <!-- card body -->
              <div class="card-body">
                <div class="d-flex">
                  <div class="form-check">
                    <!-- checkbox -->
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="paypal">
                    <label class="form-check-label ms-2" for="paypal">

                    </label>
                  </div>
                  <div>
                    <h5 class="mb-1"> Payment with Paypal</h5>
                    <p class="mb-0 fs-6">You will be redirected to PayPal website to complete your
                      purchase
                      securely.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- card -->
            <div class="card card-bordered shadow-none mb-2">
              <!-- card body -->
              <div class="card-body">
                <div class="d-flex mb-4">
                  <div class="form-check ">
                    <!-- input -->
                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                      id="creditdebitcard">
                    <label class="form-check-label ms-2" for="creditdebitcard">

                    </label>
                  </div>
                  <div>
                    <h5 class="mb-1"> Credit / Debit Card</h5>
                    <p class="mb-0 fs-6">Safe money transfer using your bank accou k account. We
                      support
                      Mastercard tercard, Visa, Discover and Stripe.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <!-- input -->
                    <div class="mb-3">
                      <label class="form-label" for="cc-mask">Card
                        Number

                      </label>
                      <div class="input-group">
                        <input type="text" class="form-control"  name="cc-mask" id="cc-mask"
                          data-inputmask="'mask': '9999 9999 9999 9999'" inputmode="numeric"
                          placeholder="xxxx-xxxx-xxxx-xxxx" required />


                      </div>
                      <small class="text-muted">Full name as displayed on card.</small>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <!-- input -->
                    <div class="mb-3 mb-lg-0">
                      <label class="form-label">Name on card </label>
                      <input type="text" class="form-control" placeholder="Enter your first name">
                    </div>
                  </div>
                  <div class="col-md-3 col-12">
                    <!-- input -->
                    <div class="mb-3  mb-lg-0">
                      <label class="form-label">Expiry date </label>
                      <input type="text" class="form-control flatpickr">
                    </div>
                  </div>
                  <div class="col-md-3 col-12">
                    <!-- input -->
                    <div class="mb-3  mb-lg-0">
                      <label for="cvv" class="form-label ">CVV Code
                        <a href="#!" class="texttooltip" data-template="trashOne">
                          <i data-feather="help-circle" class="icon-xs"></i>
                        </a>
                        </label>

                      <div id="trashOne" class="d-none">
                        <span>A 3 - digit number, typically printed on the back
                          of a card.</span>
                      </div>

                      <input type="password" class="cc-inputmask form-control" name="cvv" id="cvv"
                        placeholder="xxx" maxlength="3">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- card -->
            <div class="card card-bordered shadow-none mb-2">
              <!-- card body -->
              <div class="card-body">
                <!-- check input -->
                <div class="d-flex">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                      id="payoneer">
                    <label class="form-check-label ms-2" for="payoneer">

                    </label>
                  </div>
                  <div>
                    <h5 class="mb-1"> Pay with Payoneer</h5>
                    <p class="mb-0 fs-6">You will be redirected to Payoneer website to complete your
                      purchase securely.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- card -->
            <div class="card card-bordered shadow-none">
              <div class="card-body">
                <!-- check input -->
                <div class="d-flex">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                      id="cashonDelivery">
                    <label class="form-check-label ms-2" for="cashonDelivery">

                    </label>
                  </div>
                  <div>
                    <h5 class="mb-1"> Cash on Delivery</h5>
                    <p class="mb-0 fs-6">Pay with cash when your order is delivered.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Button -->
            <div class="d-flex justify-content-between">
              <!-- Button -->
              <button class="btn btn-outline-primary mt-3" onclick="stepperForm.previous()">
                Back to shipping
              </button>
              <!-- Button -->
              <button type="submit" class="btn btn-primary mt-3"
                onclick=" location.href='order-summary.html' ">
                Complete Order
              </button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection
