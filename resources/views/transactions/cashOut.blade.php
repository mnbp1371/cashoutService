@extends('home', ['title' => __('transactions')])
@section('content')


    <div class="card-body">

        <form method="post" action="{{route('cashOutCall')}}">
            @csrf
            <div class="form-group">
                <label for="order_id">order_id</label>
                <input type="text" class="form-control" id="order_id" placeholder="order_id" name="order_id">
            </div>

            <div class="form-group">
                <label for="national_code">national_code</label>
                <input type="text" class="form-control" id="national_code" placeholder="national_code" name="national_code">
            </div>

            <div class="form-group">
                <label for="owner_name">owner_name</label>
                <input type="text" class="form-control" id="owner_name" placeholder="owner_name" name="owner_name">
            </div>

            <div class="form-group">
                <label for="phone">phone</label>
                <input type="text" class="form-control" id="phone" placeholder="phone" name="phone">
            </div>

            <div class="form-group">
                <label for="birthday">birthday</label>
                <input type="text" class="form-control" id="birthday" placeholder="birthday" name="birthday">
            </div>

            <div class="form-group">
                <label for="iban">iban</label>
                <input type="text" class="form-control" id="iban" placeholder="iban" name="iban">
            </div>

            <div class="form-group">
                <label for="wallet_number">wallet_number</label>
                <input type="text" class="form-control" id="wallet_number" placeholder="wallet_number" name="wallet_number">
            </div>

            <div class="form-group">
                <label for="amount">amount</label>
                <input type="text" class="form-control" id="amount" placeholder="amount" name="amount">
            </div>

            <div class="form-group">
                <label for="description">description</label>
                <input type="text" class="form-control" id="description" placeholder="description" name="description">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
