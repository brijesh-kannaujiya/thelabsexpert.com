(function ($) {
    "use strict";

    //active
    $("#coupon").addClass("active");
    $("#all_settings_link").addClass("active");
    $("#all_settings").addClass("menu-open");

    //categories datatable

    table = $("#coupons_table").DataTable({
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
        ajax: {
            url: url("admin/coupon"),
        },
        fixedHeader: true,
        columns: [
            {
                data: "bulk_checkbox",
                searchable: false,
                sortable: false,
                orderable: false,
            },
            {
                data: null,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                },
                sortable: false,
                orderable: false,
            },
            // { data: "id", sortable: false, orderable: false },
            { data: "name", sortable: false, orderable: false },
            { data: "value", sortable: false, orderable: false },
            {
                data: "action",
                searchable: false,
                orderable: false,
                sortable: false,
            }, //action
        ],
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

    //delete coupon
    $(document).on("click", ".delete_coupon", function (e) {
        e.preventDefault();
        var el = $(this);
        swal(
            {
                title: trans("Are you sure to delete coupon ?"),
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: trans("Delete"),
                cancelButtonText: trans("Cancel"),
                closeOnConfirm: false,
            },
            function () {
                $(el).parent().submit();
            }
        );
    });
})(jQuery);
