<div>
    <!-- Be present above all else. - Naval Ravikant -->
    <div>
        <a href={{ route('customers.create') }}>Create New Customer</a>
    </div>
    @foreach($customers as $customer)
    <div> 
        <h2>{{ $customer->username }}</h2>
        <p>Email: {{ $customer->email }}</p>
        <p>Phone: {{ $customer->phone_number }}</p>
    </div>
    @endforeach
</div>