<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
    @error('name')
      {{ $message }}
    @enderror
    <input type="text" name="name" placeholder="Ism">
    <br>
  
    @error('email')
      {{ $message }}
    @enderror
    <input type="email" name="email" placeholder="Email">
    <br>
  
    @error('age')
      {{ $message }}
    @enderror
    <input type="number" name="age" placeholder="Yosh">
    <br>
  
    @error('product')
      {{ $message }}
    @enderror
    <label for="product">Mahsulot nomi:</label>
    <input type="text" name="product" placeholder="Mahsulot">
    <br>
  
    <label for="date">Sana:</label>
    <input type="date" name="date" placeholder="Sana">
    @error('date')
      {{ $message }}
    @enderror
    <br>
  
    <div>
      <label for="password">Parol:</label>
      <input type="password" name="password">
      @error('password')
        {{ $message }}
      @enderror
    </div>
  
    <div>
      <label for="password_confirmation">Parolni qayta kiriting:</label>
      <input type="password" name="password_confirmation">
    </div>
  
    <div>
      <label for="website">Veb-sahifa URL:</label>
      <input type="text" name="website">
      @error('website')
        {{ $message }}
      @enderror
    </div>
  
    <div>
      <label for="profile_image">Profil rasmi:</label>
      <input type="file" name="profile_image" accept="image/jpeg, image/png, image/jpg">
      @error('profile_image')
        {{ $message }}
      @enderror
    </div>

    <button type="submit">Yuborish</button>
</form>
