
function getPhoneNo(){
    let phone_no = $('#phone').val();
    console.log(phone_no);
    $.ajax({
        url: ajax_url('patient_details'), // Replace with your server URL
        contentType: 'HTML',
        data: {
            'phone_no':phone_no
        },
        success: function(response) {
            let data = response.data;
            console.log('Success:', response.data);
            $('#name').val(data.name);
            $('#age').val(data.age);
            $('#email').val(data.email);
            $('#address').val(data.address);
            $('#pincode').val(data.pincode);
            $('#aadhar_number').val(data.aadhar_number);
            $('#passport_number').val(data.passport_number);
            $('#comment').val(data.comment);
            $('#phlebo_comment').val(data.phlebo_comment);

        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
        }
    });
}
