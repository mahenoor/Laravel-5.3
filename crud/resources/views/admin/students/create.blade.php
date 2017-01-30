@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
<html>
<head>
<h1>Create a new Student Record</h1>
<style type = "text/css">
.insert 
{
    background-color: red;
    border: 3;
    color: yellow;
    padding: 10px 10px 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.back 
{
    text-align : center;
    color : red;
    border: 3;
    background : yellow;
    padding : 4px 8px;
}
</style>
</head>
<body bgcolor="#7FFFD4">
<form method="post" action="/store">
<table>
<tr>
<td><label>Enter the Student Name:</label></td>
<td><input type="text" name="name" id="name" min="2" max="40" value="{{ old('name') }}" required></td>
</tr>
<tr>
<td><label>Enter the Student Email-id:</label></td>
<td><input type="email" name="email" id="email" min="11" max="255" value="{{ old('email') }}" required ></td>
</tr>
<tr>
<td><label>Enter the Gender:</label></td>
<td><input type="radio" @if(old('Gender') == "Male") {{ 'checked' }} @endif" name="Gender" 
 value="Male" required/>Male
</br>
<input type="radio" @if(old('Gender') == "Female") {{ 'checked' }} @endif name="Gender"
 value="Female" required/>Female</td>
</tr>
<tr>
<td><label>Enter the Department:</label></td>
<td><select name="Department" required>
<option disable selected value>select</option>
<option @if(old('Department') == "Computer Science") {{ 'selected' }} @endif" value="Computer Science">Computer Science</option>
<option @if(old('Department') == "Electronics") {{ 'selected' }} @endif" value="Electronics">Electronics</option>
<option @if(old('Department') == "Mechanical") {{ 'selected' }} @endif" value="Mechanical">Mechanical</option>
<option @if(old('Department') == "Civil") {{ 'selected' }} @endif" value="Civil">Civil</option>
<option @if(old('Department') == "Electrical") {{ 'selected' }} @endif" value="Electrical">Electrical</option>
<option @if(old('Department') == "Aeronatics") {{ 'selected' }} @endif" value="Aeronatics">Aeronatics</option>
<option @if(old('Department') == "Chemical") {{ 'selected' }} @endif" value="Chemical">Chemical</option>
<option @if(old('Department') == "Metallurgy") {{ 'selected' }} @endif" value="Metallurgy">Metallurgy</option>
<option @if(old('Department') == "Medical electronics") {{ 'selected' }} @endif" value="Medical electronics">Medical electronics</option>
</select>
</td>
</tr>
<tr>
<td><p>Enter your favourite Sports:</p>
<input type="checkbox" {{ (is_array(old('Sports')) && in_array('Cricket', old('Sports'))) ? 'checked' : '' }} name="Sports[]" value="Cricket" id="myCheckbox" />Cricket<br />
<input type="checkbox" {{ (is_array(old('Sports')) && in_array('Football', old('Sports'))) ? 'checked' : '' }} name="Sports[]" value="Football" id="myCheckbox"/>Football<br />
<input type="checkbox" {{ (is_array(old('Sports')) && in_array('Badminton', old('Sports'))) ? 'checked' : '' }} name="Sports[]" value="Badminton" id="myCheckbox"/>Badminton<br />
<input type="checkbox" {{ (is_array(old('Sports')) && in_array('Chess', old('Sports'))) ? 'checked' : '' }} name="Sports[]" value="Chess" id="myCheckbox"/>Chess<br />
<input type="checkbox" {{ (is_array(old('Sports')) && in_array('Carrom', old('Sports'))) ? 'checked' : '' }} name="Sports[]" value="Carrom" id="myCheckbox"/>Carrom<br />
<input type="checkbox" {{ (is_array(old('Sports')) && in_array('Basketball', old('Sports'))) ? 'checked' : '' }} name="Sports[]" value="Basketball" id="myCheckbox"/>Basketball<br />
</td>
</tr>
<tr>
<td><label>Enter your favourite Color:</label>
<td><select name="Colors[]" multiple required>
<option disable selected value>select</option>
<option {{ (is_array(old('Colors')) && in_array('Red', old('Colors'))) ? 'selected' : '' }}  
 value="Red">Red</option>
<option {{ (is_array(old('Colors')) && in_array('Orange', old('Colors'))) ? 'selected' : '' }} 
 value="Orange">Orange</option>
<option {{ (is_array(old('Colors')) && in_array('Purple', old('Colors'))) ? 'selected' : '' }} 
 value="Purple">Purple</option>
<option {{ (is_array(old('Colors')) && in_array('Pink', old('Colors'))) ? 'selected' : '' }} 
 value="Pink">Pink</option>
<option {{ (is_array(old('Colors')) && in_array('Green', old('Colors'))) ? 'selected' : '' }} 
 value="Green">Green</option>
<option {{ (is_array(old('Colors')) && in_array('Black', old('Colors'))) ? 'selected' : '' }} 
 value="Black">Black</option>
</select>
</td>
</tr>
<tr>
<td><label>Enter the marks of Physics</label></td>
<td><input type="text" pattern="\d*" name="Physics" id="Physics" min="1" max="3" 
 value="{{ old('Physics') }}" ></td>
</tr>
<tr>
<td><label>Enter the marks of Chemistry</label></td>
<td><input type="text" pattern="\d*" name="Chemistry" id="Chemistry" min="1" max="3" 
 value="{{ old('Chemistry') }}" ></td>
</tr>
<tr>
<td><label>Enter the marks of Maths</label></td>
<td><input type="text" pattern="\d*" name="Maths" id="Maths" min="1" max="3"
 value="{{ old('Maths') }}"></td>
</tr>

<input type="hidden" name="_token" value="{{ csrf_token() }}">
</table>
<input type="submit" name="submit" id="submit" value="SUBMIT" class="insert">
</form>
<a href="/"><button class="back">Back to index page</button></a>
</body>
</html>
