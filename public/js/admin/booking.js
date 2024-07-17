function getPhoneNo() {
    let phone_no = $("#phone").val();
    // console.log(phone_no);
    $.ajax({
        url: ajax_url("patient_details"), // Replace with your server URL
        contentType: "HTML",
        data: {
            phone_no: phone_no,
        },
        success: function (response) {
            let data = response.data;
            // console.log(data);
            // console.log("Success:", response.data);
            if (response.status == true) {
                $("#name").val(data.name);
                $("#age").val(data.age);
                $("#email").val(data.email);
                $("#email_secondary").val(data.email);
                $("#address").val(data.address);
                $("#pincode").val(data.pincode);
                $("#aadhar_number").val(data.aadhar_number);
                $("#passport_number").val(data.passport_number);
                $("#comment").val(data.comment);
                $("#phlebo_comment").val(data.phlebo_comment);
                $("#aadhar_number").val(data.aadhar_number);
                $("#area").val(data.area);
                $("#phone_secondary").val(data.phone_secondary);
                $("#city").val(data.city);
            }
        },
        error: function (xhr, status, error) {
            console.error("Error:", error);
        },
    });
}

//select test
$("#select_test").select2({
    width: "100%",
    placeholder: trans("Tests"),
    ajax: {
        url: ajax_url("get_tests"),
        processResults: function (data) {
            return {
                results: $.map(data, function (item) {
                    return {
                        text: item.test_name,
                        id: item.id,
                        // + " ( " + item.category.name + " )"
                    };
                }),
            };
        },
    },
});

{
    /* <td>
` +
  test.categories.map(item, () => {
      return item.name;
  }) +
  `
</td> */
}
$("#select_test").on("select2:select", function () {
    var test_id = $(this).val();
    if ($("#selected_tests").find("#test_" + test_id).length == 0) {
        $.ajax({
            url: ajax_url("get_test?test_id=" + test_id),
            beforeSend: function () {
                $(".preloader").show();
                $(".loader").show();
            },
            success: function (test) {
                // console.log(test);
                $("#selected_tests").append(
                    `
                <tr class="selected_test" id="test_` +
                        test.id +
                        `" default_price="` +
                        test.price +
                        `">
                         <input type="hidden" class="tests_id" name="tests_id[]" value="` +
                        test_id +
                        `">
                   <td>
                      ` +
                        test.test_name +
                        `
                      <input type="hidden" class="tests_id" name="tests[` +
                        test_id +
                        `][id]" value="` +
                        test_id +
                        `">
                      <input type="hidden" class="price" name="tests[` +
                        test_id +
                        `][price]" value="` +
                        test.price +
                        `">
                   </td>
                
                   <td class="test_price">
                      ` +
                        test.price +
                        `
                   </td>
                   <td>
                      <button type="button" class="btn btn-danger btn-sm delete_selected_row">
                         <i class="fa fa-trash"></i>
                      </button>
                   </td>
                </tr>
             `
                );
                calculate_total();
            },
            complete: function () {
                $(".preloader").hide();
                $(".loader").hide();
            },
        });
    } else {
        toastr_error(trans("This test already has been selected"));
    }
    $("#select_test").val(null).trigger("change");
});

function calculate_total() {
    //calculate subtotal
    var subtotal = 0;

    $(".price").each(function () {
        var price = parseFloat($(this).val());
        subtotal += parseFloat(price);
    });

    var Hardcopy = parseFloat($("#Hardcopy").val());
    var logistics_charges = parseFloat($("#logistics_charges").val());
    subtotal += Hardcopy;
    subtotal += logistics_charges;
    subtotal = parseFloat(subtotal).toFixed(2);

    $("#subtotal").val(subtotal);

    //calculate discount
    var discount = 0;

    discount = $("#discount").val();

    //calculate paid
    var paid = 0;
    // $("#payments_table .amount").each(function () {
    //     paid += parseFloat($(this).val());
    // });

    paid = parseFloat($("#payment_amount").val());

    paid = paid.toFixed(2);

    //calculate total
    var total = subtotal - discount;
    total + Hardcopy;
    console.log(subtotal);
    total = total.toFixed(2);

    $("#total").val(total);

    //calculate due
    $("#paid").val(paid);
    if (paid > total) {
        $("#payment_amount").val(0);
        toastr.warning(
            trans("Payment amount should be less than total price"),
            trans("warning")
        );
        calculate_total();
        return;
    }
    var due = total - paid;

    due = due.toFixed(2);
    // $("#payment_amount").val(due);
    $("#due").val(due);
}

$(document).on("click", ".delete_selected_row", function () {
    $(this).closest("tr").remove();
    calculate_total();
});

//calculations
$("#discount").on("change", function () {
    var discount = parseFloat($(this).val());
    var subtotal = parseFloat($("#subtotal").val());

    if (isNaN(discount) || discount <= 0) {
        $("#discount").val(0);
    }

    if (discount > subtotal) {
        toastr.error(
            trans("Discount should be less than subtotal"),
            trans("failed")
        );
        $("#discount").val(0);
    }

    calculate_total();
});
var payments_count = $("#payments_count").val();
// //add payment
// $(document).on("click", "#add_payment", function () {
//     console.log(payments_count);
//     payments_count++;

//     var date = new Date();
//     var current_year = date.getFullYear();
//     $(".new_datepicker").datepicker({
//         dateFormat: "yy-mm-dd",
//         changeYear: true,
//         changeMonth: true,
//         yearRange: "1900:" + current_year,
//     });

//     //select2 payment methods
//     $(".payment_method_id").select2({
//         width: "100%",
//         placeholder: trans("Select payment method"),
//         ajax: {
//             beforeSend: function () {
//                 $(".preloader").show();
//                 $(".loader").show();
//             },
//             url: ajax_url("get_payment_methods"),
//             processResults: function (data) {
//                 return {
//                     results: $.map(data, function (item) {
//                         return {
//                             text: item.name,
//                             id: item.id,
//                         };
//                     }),
//                 };
//             },
//             complete: function () {
//                 $(".preloader").hide();
//                 $(".loader").hide();
//             },
//         },
//     });
// });

var date = new Date();
var current_year = date.getFullYear();
$(".new_datepicker").datepicker({
    dateFormat: "yy-mm-dd",
    changeYear: true,
    changeMonth: true,
    yearRange: "1900:" + current_year,
});

//select2 payment methods
$(".payment_method_id").select2({
    width: "100%",
    placeholder: trans("Select payment method"),
    ajax: {
        beforeSend: function () {
            $(".preloader").show();
            $(".loader").show();
        },
        url: ajax_url("get_payment_methods"),
        processResults: function (data) {
            return {
                results: $.map(data, function (item) {
                    return {
                        text: item.name,
                        id: item.id,
                    };
                }),
            };
        },
        complete: function () {
            $(".preloader").hide();
            $(".loader").hide();
        },
    },
});

$(".payment_method_id").select2({
    width: "100%",
    placeholder: trans("Select payment method"),
    ajax: {
        beforeSend: function () {
            $(".preloader").show();
            $(".loader").show();
        },
        url: ajax_url("get_payment_methods"),
        processResults: function (data) {
            return {
                results: $.map(data, function (item) {
                    return {
                        text: item.name,
                        id: item.id,
                    };
                }),
            };
        },
        complete: function () {
            $(".preloader").hide();
            $(".loader").hide();
        },
    },
});

//change amount
$(document).on("change", ".amount", function () {
    var amount = parseFloat($(this).val());
    if (amount == "" || amount < 0) {
        $(this).val(0);
    }

    var total = parseFloat($("#total").val());
    var paid = 0;
    paid = parseFloat($("#payment_amount").val());
    if (paid > total) {
        $(this).val(0);
        toastr.warning(
            trans("Payment amount should be less than total price"),
            trans("warning")
        );
    }
    calculate_total();
});

$("#Hardcopy").on("change", function () {
    var Hardcopy = parseFloat($(this).val());

    if (isNaN(Hardcopy) || Hardcopy <= 0) {
        $("#Hardcopy").val(0);
    }

    calculate_total();
});

$("#logistics_charges").on("change", function () {
    var logistics_charges = parseFloat($(this).val());

    if (isNaN(logistics_charges) || logistics_charges <= 0) {
        $("#logistics_charges").val(0);
    }

    calculate_total();
});

$(".selectTwo").select2();

var today = new Date();
var dd = String(today.getDate()).padStart(2, "0");
var mm = String(today.getMonth() + 1).padStart(2, "0"); // January is 0!
var yyyy = today.getFullYear();

var todayFormatted = mm + "/" + dd + "/" + yyyy;

// Initialize date picker
$("#date").datepicker({
    format: "mm/dd/yyyy",
    autoclose: true,
    todayHighlight: true,
    startDate: todayFormatted,
});

// Populate 'to time' based on 'from time' selection
$("#timeslot_from").on("change", function () {
    var fromTime = $(this).val();
    var timeslotTo = $("#timeslot_to");

    // Define the time options
    var times = [
        "05:00 am",
        "05:30 am",
        "06:00 am",
        "06:30 am",
        "07:00 am",
        "07:30 am",
        "08:00 am",
        "08:30 am",
        "09:00 am",
        "09:30 am",
        "10:00 am",
        "10:30 am",
        "11:00 am",
        "11:30 am",
        "12:00 pm",
        "12:30 pm",
        "01:00 pm",
        "01:30 pm",
        "02:00 pm",
        "02:30 pm",
        "03:00 pm",
        "03:30 pm",
        "04:00 pm",
        "04:30 pm",
        "05:00 pm",
        "05:30 pm",
        "06:00 pm",
        "06:30 pm",
        "07:00 pm",
        "07:30 pm",
        "08:00 pm",
        "08:30 pm",
        "09:00 pm",
        "09:30 pm",
        "10:00 pm",
        "10:30 pm",
        "11:00 pm",
        "11:30 pm",
    ];

    // Find the index of the selected fromTime
    var index = times.indexOf(fromTime);
    if (index !== -1) {
        var availableTimes = times.slice(index + 1);
        timeslotTo.empty();
        timeslotTo.append('<option value="">Select To Time</option>');
        availableTimes.forEach(function (time) {
            timeslotTo.append(
                '<option value="' + time + '">' + time + "</option>"
            );
        });
    }
});
$("#booking").addClass("active");
//admin groups datatable
table = $("#groups_table").DataTable({
    buttons: [],
    processing: true,
    serverSide: true,
    order: [[1, "desc"]],
    select: false,
    ajax: {
        url: url("admin/get_booking"),
    },
    fixedHeader: false,
    columns: [
        {
            data: null,
            searchable: false,
            orderable: false,
            render: function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
            },
        },
        // { data: "id", sortable: true, orderable: true },
        { data: "status", sortable: true, orderable: true },
        { data: "reportDataTime", sortable: true, orderable: true },
        { data: "nameAndAge", sortable: false, orderable: false },
        { data: "contacts", sortable: false, orderable: false },
        { data: "total", orderable: false, sortable: false },
        { data: "due", orderable: false, sortable: false },
        { data: "payments", orderable: false, sortable: false },
        { data: "barcode", orderable: false, sortable: false },
        { data: "UpdateInfo", orderable: false, sortable: false },
    ],
});

table.on("draw", function () {
    $(".select2").select2();
});
function UpadteStatus(booking_id, status_id) {
    $.ajax({
        beforeSend: function () {
            $(".preloader").show();
            $(".loader").show();
        },
        url: url("admin/update_booking/status"),
        method: "POST",
        data: {
            booking_id: booking_id,
            status_id: status_id,
        },
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            console.log("Status updated successfully", response);
            // Assuming table variable is already defined and initialized
            $("#groups_table").DataTable().ajax.reload();
        },
        error: function (xhr, status, error) {
            console.error("Failed to update status", xhr, status, error);
        },
        complete: function () {
            $(".preloader").hide();
            $(".loader").hide();
        },
    });
}

function SubmitPaymentForm(booking_id) {
    var FormId = "PaymentForm_" + booking_id;
    var formElement = document.getElementById(FormId);
    if (!formElement) {
        console.error("Form element not found with id: " + FormId);
        return;
    }
    // Validation
    var paymentPhoto = formElement.querySelector('input[name="payment_photo"]');
    var paymentAmount = formElement.querySelector(
        'input[name="payment_amount"]'
    );
    var paymentMethod = formElement.querySelector(
        'select[name="payment_method_id"]'
    );

    if (!paymentPhoto.files.length) {
        alert("Please select a payment photo.");
        return;
    }

    if (!paymentAmount.value || paymentAmount.value <= 0) {
        alert("Please enter a valid payment amount.");
        return;
    }

    if (!paymentMethod.value) {
        alert("Please select a payment method.");
        return;
    }
    var formData = new FormData(formElement);
    formData.append("booking_id", booking_id);
    $.ajax({
        beforeSend: function () {
            $(".preloader").show();
            $(".loader").show();
        },
        url: url("admin/update_booking/payment"),
        method: "POST",
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            console.log("Payment information updated successfully", response);
            $("#groups_table").DataTable().ajax.reload();
            // alert("Payment information updated successfully!");
        },
        error: function (xhr, status, error) {
            console.error(
                "Failed to update payment information",
                xhr,
                status,
                error
            );
            alert("Failed to update payment information. Please try again.");
        },
        complete: function () {
            $(".preloader").hide();
            $(".loader").hide();
        },
    });
}

function SubmitUserInfoForm(booking_id) {
    var formElement = document.getElementById("UserInfoForm_" + booking_id);

    if (!formElement.checkValidity()) {
        formElement.reportValidity();
        return;
    }

    var formData = new FormData(formElement);

    $.ajax({
        beforeSend: function () {
            $(".preloader").show();
            $(".loader").show();
        },
        url: url("admin/update_booking/update_patient_info/") + booking_id,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            console.log("Booking info updated successfully", response);
            $("#groups_table").DataTable().ajax.reload();
        },
        error: function (xhr, status, error) {
            console.error("Failed to update booking info", xhr, status, error);
        },
        complete: function () {
            $(".preloader").hide();
            $(".loader").hide();
        },
    });
}
