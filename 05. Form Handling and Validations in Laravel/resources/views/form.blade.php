<h2>Forms Handling in laravel</h2>

@if($errors->all())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach   
    </ul>
@endif


<form action="{{ url("/form")}}" method="POST">
    @csrf
    <div>
        <input type="text" name="username" placeholder="username">
        <span>
            @error("username")
                {{ $message }}
            @enderror
        </span>
    </div>

    <div>
        <input type="email" name="email" placeholder="email">
        <span>
            @error("email")
                {{ $message }}
            @enderror
        </span>
    </div>

    <div>
        <input type="password" name="password" placeholder="password">
        <span>
            @error("password")
                {{ $message }}
            @enderror
        </span>
    </div>

    <div>
        <select name="country" id="">
            <option value="">Select Country</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Turkey">Turkey</option>
            <option value="Malaysia">Malaysia</option>
        </select>
        <span>
            @error("country")
                {{ $message }}
            @enderror
        </span>
    </div>

    <div>
        <label for="">Gender</label>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">female
        <span>
            @error("gender")
                {{ $message }}
            @enderror
        </span>
    </div>

    <div>
        <input type="number" name="age" placeholder="Enter age">
        <span>
            @error("age")
                {{ $message }}
            @enderror
        </span>
    </div>

    <div>
        <input type="date" name="dob" >
        <span>
            @error("dob")
                {{ $message }}
            @enderror
        </span>
    </div>

    <div>
        <input type="submit" value="submit">
    </div>
</form>

@isset($form)
    @foreach ($form as $key => $value)
        <li>{{ $key }}=> {{ $value }}</li>
    @endforeach
@endisset