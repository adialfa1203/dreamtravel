@extends('admin_travel.layout.tampilan')
@section('/tambah', 'active')
@section('content')
<head>
    <input[type="text"] {
        appearance: textfield;
        -webkit-appearance: textfield;
        -moz-appearance: textfield;
    }>
</head>
<body>

    <div class="container">


      
        <!-- SmartWizard html -->
        <form id="smartwizard" dir="rtl-" action="" method="POST">
          @csrf
            <ul class="nav nav-progress">
                <li class="nav-item">
                    <a class="nav-link" href="#step-1">
                        <div class="num">1</div>
                          Travel
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#step-2">
                        <span class="num">2</span>
                          Fasilitas                    
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#step-3">
                        <span class="num">3</span>
                        Harga
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#step-4">
                        <span class="num">4</span>
                        Tujuan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#step-5">
                        <span class="num">5</span>
                        Pemberangkatan
                    </a>
                </li>
            </ul>

            <div class="tab-content overflow-y-scroll" id="tab-konten" style="height: auto">
                <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                    <form id="form-1" class="row row-cols-1 ms-5 me-5 needs-validation" novalidate>
                        <div class="col">
                            <label for="plat" class="form-label">No Plat</label>
                            <input type="number" class="form-control" id="plat" name="plat" required>
                            <div class="valid-feedback">
                                bagus
                            </div>
                            <div class="invalid-feedback">
                                Tolong masukan data.
                            </div>
                        </div>
                        <div class="col">
                            <label for="nama_kendaraan" class="form-label">Nama Kendaraan</label>
                            <input type="text" class="form-control" id="nama_kendaraan" name="nama_kendaraan" required>
                            <div class="valid-feedback">
                                bagus
                            </div>
                            <div class="invalid-feedback">
                                Tolong masukan data
                            </div>
                        </div>
                        <div class="col">
                            <label for="kategori" class="form-label">Kategori Kendaraan</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" required>
                            <div class="valid-feedback">
                                bagus
                            </div>
                            <div class="invalid-feedback">
                                Tolong masukan data
                            </div>
                        </div>          
                        <div class="col">
                            <label for="foto" class="form-label">Foto Kendaraan</label>
                            <input type="file" class="form-control" id="foto" name="foto" required>
                            <div class="valid-feedback">
                                bagus
                            </div>
                            <div class="invalid-feedback">
                                Tolong masukan data
                            </div>
                        </div>
                    </form>
                </div>
                <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                    <form id="form-2" class="row row-cols-1 ms-5 me-5 needs-validation" novalidate>
                        
                            <div class="customer_records">
                                <div class="col">
                                    <label for="nama_fasilitas" class="form-label">Fasilitas</label>
                                    <input type="text" class="form-control" id="nama_fasilitas" name="nama_fasilitas" required>
                                </div>
                              
                          
                              <a class="extra-fields-customer" href="#">Tambah Fasilitas</a>
                            </div>
                          
                            <div class="customer_records_dynamic"></div>
                    </form>
                </div>
                <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                    <form id="form-3" class="row row-cols-1 ms-5 me-5 needs-validation" novalidate>
                    <div class="col">
                        <label for="dewasa" class="form-label">Harga Dewasa</label>
                        <input type="number" class="form-control" id="dewasa" name="dewasa" required>
                    </div>
                    <div class="col">
                      <label for="anak" class="form-label">Harga Anak-Anak</label>
                      <input type="number" class="form-control" id="anak" name="anak" required>
                      <div class="valid-feedback">
                          bagus
                      </div>
                      <div class="invalid-feedback">
                          Tolong masukan data
                      </div>
                  </div>
                    </form>
                </div>
                <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4" style="height: auto">
                  <form id="form-4" class="row row-cols-1 ms-5 me-5 needs-validation" novalidate>
                    <div class="col">
                        <label for="tujuan" class="form-label">Tujuan</label>
                        <input type="text" class="form-control" id="tujuan" name="tujuan" required>
                        <div class="valid-feedback">
                          bagus
                      </div>
                      <div class="invalid-feedback">
                          Tolong masukan data
                      </div>
                    </div>
                    <div class="col">
                        <label for="beangkat" class="form-label">Area Penjemputan</label>
                        <input type="text" class="form-control" id="berangkat" name="berangkat" required>
                        <div class="valid-feedback">
                          bagus
                      </div>
                      <div class="invalid-feedback">
                          Tolong masukan data
                      </div>
                    </div>
                    {{-- <div class="col">
                        <label for="validationCustom02" class="form-label">Jam</label>
                        <input type="number" class="form-control" id="last-name" name="dewasa" required>
                        <div class="valid-feedback">
                          bagus
                      </div>
                      <div class="invalid-feedback">
                          Tolong masukan data
                      </div>
                    </div> --}}
                    </form>
                </div>
                <div id="step-5" class="tab-pane" role="tabpanel" aria-labelledby="step-5" style="height: auto">
                  <form id="form-5" class="row row-cols-1 ms-5 me-5 needs-validation" novalidate>
                    <div class="col">
                        <label for="pemberangkatan" class="form-label">Pemberangkatan</label>
                        <input type="date" class="form-control" id="pemberangkatan" name="pemberangkatan" required>
                        <div class="valid-feedback">
                          bagus
                      </div>
                      <div class="invalid-feedback">
                          Tolong masukan data
                      </div>
                    </div>
                    <div class="col">
                        <label for="jam" class="form-label">Jam</label>
                        <input type="time" class="form-control" id="jam" name="jam" required>
                        <div class="valid-feedback">
                          bagus
                      </div>
                      <div class="invalid-feedback">
                          Tolong masukan data
                      </div>
                    </div>
                    {{-- <div class="col">
                        <label for="validationCustom02" class="form-label">Jam</label>
                        <input type="number" class="form-control" id="last-name" name="dewasa" required>
                        <div class="valid-feedback">
                          bagus
                      </div>
                      <div class="invalid-feedback">
                          Tolong masukan data
                      </div>
                    </div> --}}
                    </form>
                </div>
              </form>

            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
        </div>

        
        <br /> &nbsp;
    </div>

    <!-- Confirm Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Order Placed</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Congratulations! Your order is placed.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="closeModal()">Ok, close and reset</button>
                </div>
            </div>
        </div>
      </form>

@endsection

@section('script')
    <script>
 $('#tab-konten').css('height', 'auto')
  console.log(location.href)
const myModal = new bootstrap.Modal(document.getElementById('confirmModal'));


function onCancel() { 
  // Reset wizard
  $('#smartwizard').smartWizard("reset");

  // Reset form
  document.getElementById("form-1").reset();
  document.getElementById("form-2").reset();
  document.getElementById("form-3").reset();
  document.getElementById("form-4").reset();
}

function onConfirm() {
  let form = document.getElementById('form-4');
  if (form) {
    if (!form.checkValidity()) {
      form.classList.add('was-validated');
      $('#smartwizard').smartWizard("setState", [3], 'error');
      $("#smartwizard").smartWizard('fixHeight');
      return false;
    }
    
    myModal.show();
  }
}

function closeModal() {
  // Reset wizard
  $('#smartwizard').smartWizard("reset");

  // Reset form
  document.getElementById("form-1").reset();
  document.getElementById("form-2").reset();
  document.getElementById("form-3").reset();
  document.getElementById("form-4").reset();

  myModal.hide();
}

function showConfirm() {
  const name = $('#first-name').val() + ' ' + $('#last-name').val();
  const products = $('#sel-products').val();
  const shipping = $('#address').val() + ' ' + $('#state').val() + ' ' + $('#zip').val();
  let html = `<h4 class="mb-3-">Customer Details</h4>
          <hr class="my-2">
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label class="col-form-label">Name</label>
            </div>
            <div class="col-auto">
              <span class="form-text-">${name}</span>
            </div>
          </div>

          <h4 class="mt-3">Products</h4>
          <hr class="my-2">
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <span class="form-text-">${products}</span>
            </div>
          </div>

          <h4 class="mt-3">Shipping</h4>
          <hr class="my-2">
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <span class="form-text-">${shipping}</span>
            </div>
          </div>`;
  $("#order-details").html(html);
  $('#smartwizard').smartWizard("fixHeight"); 
}

$(function() {
    // Leave step event is used for validating the forms
    $("#smartwizard").on("leaveStep", function(e, anchorObject, currentStepIdx, nextStepIdx, stepDirection) {
        // Validate only on forward movement  
        if (stepDirection == 'forward') {
          let form = document.getElementById('form-' + (currentStepIdx + 1));
          if (form) {
            if (!form.checkValidity()) {
              form.classList.add('was-validated');
              $('#smartwizard').smartWizard("setState", [currentStepIdx], 'error');
              $("#smartwizard").smartWizard('fixHeight');
              return false;
            }
            $('#smartwizard').smartWizard("unsetState", [currentStepIdx], 'error');
          }
        }
    });

    // Step show event
    $("#smartwizard").on("showStep", function(e, anchorObject, stepIndex, stepDirection, stepPosition) {
        $("#prev-btn").removeClass('disabled').prop('disabled', false);
        $("#next-btn").removeClass('disabled').prop('disabled', false);
        if(stepPosition === 'first') {
            $("#prev-btn").addClass('disabled').prop('disabled', true);
        } else if(stepPosition === 'last') {
            $("#next-btn").addClass('disabled').prop('disabled', true);
        } else {
            $("#prev-btn").removeClass('disabled').prop('disabled', false);
            $("#next-btn").removeClass('disabled').prop('disabled', false);
        }

        // Get step info from Smart Wizard
        let stepInfo = $('#smartwizard').smartWizard("getStepInfo");
        $("#sw-current-step").text(stepInfo.currentStep + 1);
        $("#sw-total-step").text(stepInfo.totalSteps);

        if (stepPosition == 'last') {
          showConfirm();
          $("#btnFinish").prop('disabled', false);
        } else {
          $("#btnFinish").prop('disabled', true);
        }

        // Focus first name
        if (stepIndex == 1) {
          setTimeout(() => {
            $('#first-name').focus();
          }, 0);
        }
    });

    // Smart Wizard
    $('#smartwizard').smartWizard({
        selected: 0,
        // autoAdjustHeight: false,
        theme: 'dots', // basic, arrows, square, round, dots
        transition: {
          animation:'none'
        },
        toolbar: {
          showNextButton: true, // show/hide a Next button
          showPreviousButton: true, // show/hide a Previous button
          position: 'bottom', // none/ top/ both bottom
          extraHtml: `<button class="btn btn-success" id="btnFinish" disabled onclick="onConfirm()">Complete Order</button>
                      <button class="btn btn-danger" id="btnCancel" onclick="onCancel()">Cancel</button>`
        },
        anchor: {
            enableNavigation: true, // Enable/Disable anchor navigation 
            enableNavigationAlways: false, // Activates all anchors clickable always
            enableDoneState: true, // Add done state on visited steps
            markPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
            unDoneOnBackNavigation: true, // While navigate back, done state will be cleared
            enableDoneStateNavigation: true // Enable/Disable the done state navigation
        },
    });

    $("#state_selector").on("change", function() {
        $('#smartwizard').smartWizard("setState", [$('#step_to_style').val()], $(this).val(), !$('#is_reset').prop("checked"));
        return true;
    });

    $("#style_selector").on("change", function() {
        $('#smartwizard').smartWizard("setStyle", [$('#step_to_style').val()], $(this).val(), !$('#is_reset').prop("checked"));
        return true;
    });

    

});

function addInput() {
        const container = document.getElementById("form-2");
        const inputDiv = document.createElement("col");
  
        inputDiv.innerHTML = `
       
                   
                      <div class="col">
                        <label for="validationCustom02" class="form-label">Fasilitas</label>
                        <input type="text" class="form-control" id="last-name" value="" required>
                        <div class="valid-feedback">
                            bagus
                        </div>
                        <div class="invalid-feedback">
                            Tolong masukan data
                        </div>
                    </div>
                    <div class="col">
                      <label for="validationCustom02" class="form-label">Jumlah</label>
                      <input type="text" class="form-control" id="last-name" value="" required>
                      <div class="valid-feedback">
                          bagus
                      </div>
                      <div class="invalid-feedback">
                          Tolong masukan data
                      </div>
                  </div>
                    
                
        `;  
        container.appendChild(inputDiv);
        document.getElementById('tab-konten').style.height = "auto"
      }
    </script>
    <script>
    $('.extra-fields-customer').click(function() {
  $('.customer_records').clone().appendTo('.customer_records_dynamic');
  $('.customer_records_dynamic .customer_records').addClass('single remove');
  $('.single .extra-fields-customer').remove();
  $('.single').append('<a href="#" class="remove-field btn-remove-customer">Hapus Fasilitas</a>');
  $('.customer_records_dynamic > .single').attr("class", "remove");
  
  $('.customer_records_dynamic input').each(function() {
    var count = 0;
    var fieldname = $(this).attr("name");
    $(this).attr('name', fieldname + count );
    count++;
  });
  
  // $('#step-2').load(location.href + '#step-2')
  $('#tab-konten').css('height', 'auto')
  console.log(location.href)
});

$(document).on('click', '.remove-field', function(e) {
  $(this).parent('.remove').remove();
  e.preventDefault();
});
    </script>
</body>
 @endsection
