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
                        text:
                            item.test_name + " ( " + item.category.name + " )",
                        id: item.id,
                    };
                }),
            };
        },
    },
});

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
                   <td>
                      ` +
                        test.category.name +
                        `
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

//admin groups datatable
table = $("#groups_table").DataTable({
    lengthMenu: [
        [10, 25, 50, 100, 500, 1000, -1],
        [10, 25, 50, 100, 500, 1000, "All"],
    ],
    dom:
        "<'row'<'col-sm-4'l><'col-sm-4'B><'col-sm-4'f>>" +
        "<'row'<'col-sm-12'tr>>" +
        "<'row'<'col-sm-4'i><'col-sm-8'p>>",
    buttons: [],
    processing: true,
    serverSide: true,
    order: [[1, "desc"]],
    ajax: {
        url: url("admin/get_booking"),
        data: function (data) {
            data.filter_status = $("#filter_status").val();
            data.filter_barcode = $("#filter_barcode").val();
            data.filter_date = $("#filter_date").val();
            data.filter_created_by = $("#filter_created_by").val();
            data.filter_contract = $("#filter_contract").val();
        },
    },
    // orderCellsTop: true,
    fixedHeader: true,
    columns: [
        { data: "id", sortable: true, orderable: true },
        { data: "status", sortable: true, orderable: true },
        { data: "reportDataTime", sortable: true, orderable: true },
        { data: "nameAndAge", sortable: false, orderable: false },
        { data: "contacts", sortable: false, orderable: false },
        { data: "total", orderable: false, sortable: false },
        { data: "payments", orderable: false, sortable: false },
        { data: "barcode", orderable: false, sortable: false },
        { data: "UpdateInfo", orderable: false, sortable: false },
        // { data: "subtotal", orderable: false, sortable: false },
        // { data: "discount", orderable: false, sortable: false },

        // { data: "paid", orderable: false, sortable: false },
        // { data: "due", orderable: false, sortable: false },
        // { data: "created_at", sortable: true, orderable: true },
        // { data: "done", searchable: false, orderable: false, sortable: false }, //done
        // {
        //     data: "action",
        //     searchable: false,
        //     orderable: false,
        //     sortable: false,
        // }, //action
    ],
    // footerCallback: function (row, data, start, end, display) {
    //     var api = this.api(),
    //         data;

    //     // Remove the formatting to get integer data for summation
    //     var intVal = function (i) {
    //         return typeof i === "string"
    //             ? i.replace(/[\$,]/g, "") * 1
    //             : typeof i === "number"
    //             ? i
    //             : 0;
    //     };

    //     // Summary
    //     var subtotal = api
    //         .column(7)
    //         .data()
    //         .reduce(function (a, b) {
    //             return intVal(a) + intVal(b);
    //         }, 0);

    //     var discount = api
    //         .column(8)
    //         .data()
    //         .reduce(function (a, b) {
    //             return intVal(a) + intVal(b);
    //         }, 0);

    //     var total = api
    //         .column(9)
    //         .data()
    //         .reduce(function (a, b) {
    //             return intVal(a) + intVal(b);
    //         }, 0);

    //     var paid = api
    //         .column(10)
    //         .data()
    //         .reduce(function (a, b) {
    //             return intVal(a) + intVal(b);
    //         }, 0);

    //     var due = api
    //         .column(11)
    //         .data()
    //         .reduce(function (a, b) {
    //             return intVal(a) + intVal(b);
    //         }, 0);

    //     console.log(subtotal, total, discount);

    //     // Total over this page
    //     $("#summary_subtotal").html(formated_price(Math.round(subtotal, 2)));
    //     $("#summary_discount").html(formated_price(Math.round(discount, 2)));
    //     $("#summary_total").html(formated_price(Math.round(total, 2)));
    //     $("#summary_paid").html(formated_price(Math.round(paid, 2)));
    //     $("#summary_due").html(formated_price(Math.round(due, 2)));
    // },
    drawCallback: function (settings) {
        var row_id = [];
        this.api()
            .cells(null, 0)
            .every(function () {
                row_id.push(this.data());
            });
    },
    language: {
        sEmptyTable: trans("No data available in table"),
        sInfo:
            trans("Showing") +
            " _START_ " +
            trans("to") +
            " _END_ " +
            trans("of") +
            " _TOTAL_ " +
            trans("records"),
        sInfoEmpty:
            trans("Showing") +
            " 0 " +
            trans("to") +
            " 0 " +
            trans("of") +
            " 0 " +
            trans("records"),
        sInfoFiltered:
            "(" +
            trans("filtered") +
            " " +
            trans("from") +
            " _MAX_ " +
            trans("total") +
            " " +
            trans("records") +
            ")",
        sInfoPostFix: "",
        sInfoThousands: ",",
        sLengthMenu: trans("Show") + " _MENU_ " + trans("records"),
        sLoadingRecords: trans("Loading..."),
        sProcessing: trans("Processing..."),
        sSearch: trans("Search") + ":",
        sZeroRecords: trans("No matching records found"),
        oPaginate: {
            sFirst: trans("First"),
            sLast: trans("Last"),
            sNext: trans("Next"),
            sPrevious: trans("Previous"),
        },
    },
});
