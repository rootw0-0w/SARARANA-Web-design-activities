<div>
    <!-- Be present above all else. - Naval Ravikant -->
    <div>
        <a href={{ route('customers.create') }}>Create New Customer</a>
    </div>
    @foreach($customers as $customer)
    <div> 
        <h2><a href={{ route('customers.show', $customer->id)}}>{{ $customer->username }}<a></h2>
        <p>Email: {{ $customer->email }}</p>
        <p>Phone: {{ $customer->phone_number }}</p>
    </div>
    @endforeach
</div>