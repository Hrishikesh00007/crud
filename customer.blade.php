<h1>Customers Details</h1>
@foreach ($data as $id => $customer)
    <h3>Name: {{ $customer->name }}</h3>
    <h3>Email: {{ $customer->email }}</h3>
    <h3>Mobile: {{ $customer->mobile }}</h3>
    <h3>City: {{ $customer->city }}</h3>
@endforeach