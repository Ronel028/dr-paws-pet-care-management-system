@component('vendor.mail.html.message')
    <center>
        <h4>Dr. Paws</h4>
        <h4>Appointment Detail</h4>
    </center>
    <h4><b>Reference # : <span>{{ $ref_number }}</span></b></h4>
    <h4><b>Client Name : <span>{{ $client_name }}</span></b></h4>
    <h4><b>Contact # : <span>{{ $contact_no }}</span></b></h4>
    <h4><b>Email : <span>{{ $email }}</span></b></h4>
    <h4><b>Pet Name : <span>{{ $pet_name }}</span></b></h4>
    <h4><b>Service : <span>{{ $service }}</span></b></h4>
    <h4><b>Appointment Date : <span>{{ $appointment_date }}</span></b></h4>
@endcomponent
