<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
    @error('name')
        <div class="error">{{ $message }}</div>
    @enderror
    
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
    @error('email')
        <div class="error">{{ $message }}</div>
    @enderror
    
    <input type="text" name="age" placeholder="Age" value="{{ old('age') }}">
    @error('age')
        <div class="error">{{ $message }}</div>
    @enderror
    
    <input type="password" name="password" placeholder="Password">
    @error('password')
        <div class="error">{{ $message }}</div>
    @enderror
    
    <input type="password" name="password_confirmation" placeholder="Confirm Password">
    
    <input type="file" name="avatar" accept="image/*">
    @error('avatar')
        <div class="error">{{ $message }}</div>
    @enderror
    
    <input type="text" name="product_name" placeholder="Product Name" value="{{ old('product_name') }}">
    @error('product_name')
        <div class="error">{{ $message }}</div>
    @enderror
    
    <input type="number" name="price" placeholder="Price" value="{{ old('price') }}">
    @error('price')
        <div class="error">{{ $message }}</div>
    @enderror
    
    <input type="url" name="website" placeholder="Website" value="{{ old('website') }}">
    @error('website')
        <div class="error">{{ $message }}</div>
    @enderror
    
    <input type="date" name="published_at" value="{{ old('published_at') }}">
    @error('published_at')
        <div class="error">{{ $message }}</div>
    @enderror
    
    <input type="date" name="start_date" value="{{ old('start_date') }}">
    @error('start_date')
        <div class="error">{{ $message }}</div>
    @enderror
    
    <input type="date" name="end_date" value="{{ old('end_date') }}">
    @error('end_date')
        <div class="error">{{ $message }}</div>
    @enderror

    <button type="submit">Submit</button>
</form>
