@extends("landing.template")

@section("content")
    <div class="container py-5">
        <h1>Order Form</h1>
        <form action="{{ route("cart.store") }}" method="POST">
            @csrf
            <input
                type="hidden"
                name="catalogue_id"
                value="{{ $catalogue->catalogue_id }}"
            />
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    required
                />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    required
                />
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">
                    Phone Number
                </label>
                <input
                    type="text"
                    class="form-control"
                    id="phone_number"
                    name="phone_number"
                    required
                />
            </div>
            <div class="mb-3">
                <label for="wedding_date" class="form-label">
                    Wedding Date
                </label>
                <input
                    type="date"
                    class="form-control"
                    id="wedding_date"
                    name="wedding_date"
                    required
                />
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input
                    type="text"
                    class="form-control"
                    id="status"
                    name="status"
                    value="pending"
                    readonly
                />
            </div>
            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
    </div>
@endsection
