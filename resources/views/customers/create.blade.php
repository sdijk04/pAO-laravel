<h1>Add New Customer</h1>

<form action="/customers" method="post">
    
    <label for="name">Naam:</label>    
    <input type="text" name="name" autocomplete="off"><br>
    <label for="email">Email:</label>
    <input type="text" name="email" autocomplete="off"><br>

    @csrf

    <button>Add Customer</button>
</form>
@error('name') {{ $message }}@enderror