<html>
<head>
<h1><center>Update Student Record</center></h1>
<style type = "text/css">
.back 
{
    text-align : center;
    color : red;
    background : yellow;
    padding : 2px;
}
.update
{
    background-color: red;
    border: 3;
    color: yellow;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body bgcolor="#7FFFD4">
<form method="post" action="/update/{{ $students->id }}">
<table>
<tr>
<td><label>Enter the Student Name:</label></td>
<td><input type="text" name="name" id="name" value="{{ $students->name }}" min="2" max="40" required>
</td>
</tr>
<tr>
<td><label>Enter the Student Email-id:</label></td>
<td><input type="email" name="email" id="email" value="{{ $students->email }}" min="11" max="255" required></td>
</tr>
<tr>
<td><label>Enter the Gender:</label></td>
<td><input type="radio" @if($students->Gender == "Male") {{ "checked" }} @endif name="Gender" value="Male" required/>Male
<br />
<input type="radio" @if($students->Gender == "Female") {{ "checked" }} @endif name="Gender" value="Female" required/>Female</td>
</tr>
<tr>
<td><label>Enter the Department:</label></td>
<td>
<select name="Department" required>
<option disable value>select</option>
<option @if($students->Department == "Computer Science") {{ "selected = selected" }} @endif  
 value="Computer Science">Computer Science</option>
<option @if($students->Department == "Electronics") {{ "selected = selected" }} @endif  
 value="Electronics">Electronics</option>
<option @if($students->Department == "Mechanical") {{ "selected = selected" }} @endif  
 value="Mechanical">Mechanical</option>
<option @if($students->Department == "Civil") {{ "selected = selected" }} @endif  
 value="Civil">Civil</option>
<option @if($students->Department == "Electrical") {{ "selected = selected" }} @endif 
value="Electrical">Electrical</option>
<option @if($students->Department == "Aeronatics") {{ "selected = selected" }} @endif 
value="Aeronatics">Aeronatics</option>
<option @if($students->Department == "Chemical") {{ "selected = selected" }} @endif 
value="Chemical">Chemical</option>
<option @if($students->Department == "Metallurgy") {{ "selected = selected" }} @endif 
value="Metallurgy">Metallurgy</option>
<option @if($students->Department == "Medical electronics") {{ "selected = selected" }} @endif value="Medical electronics">Medical electronics</option>
</select>
</td>
</tr>
<tr>
<td><p>Enter your favourite Sports:</p>
<?php $SportsArray = explode(',', $students->Sports); ?>
<input type="checkbox" {{ (is_array($SportsArray) && in_array('Cricket', $SportsArray)) ? 'checked' : '' }}  name="Sports[]" value="Cricket" id="myCheckbox" />Cricket<br />
<input type="checkbox" {{ (is_array($SportsArray) && in_array('Football', $SportsArray)) ? 'checked' : '' }} name="Sports[]" value="Football" id="myCheckbox" checked />Football<br />
<input type="checkbox" {{ (is_array($SportsArray) && in_array('Badminton', $SportsArray)) ? 'checked' : '' }}  name="Sports[]" value="Badminton" id="myCheckbox"/>Badminton<br />
<input type="checkbox" {{ (is_array($SportsArray) && in_array('Chess', $SportsArray)) ? 'checked' : '' }} name="Sports[]" value="Chess" id="myCheckbox"/>Chess<br />
<input type="checkbox" {{ (is_array($SportsArray) && in_array('Carrom', $SportsArray)) ? 'checked' : '' }}  name="Sports[]" value="Carrom" id="myCheckbox"/>Carrom<br />
<input type="checkbox" {{ (is_array($SportsArray) && in_array('Basketball', $SportsArray)) ? 'checked' : '' }}  name="Sports[]" value="Basketball" id="myCheckbox"/>Basketball<br />
</td>
</tr>
<tr>
<td><label>Enter your favourite color:</label></td>
<td><?php $ColorsArray = explode(',', $students->Colors); ?>
<select name="Colors[]" multiple required>
<option disable value>select</option>
<option {{ (is_array($ColorsArray) && in_array('Red', $ColorsArray)) ? 'selected' : '' }}
 value="Red">Red</option>
<option  {{ (is_array($ColorsArray) && in_array('Orange', $ColorsArray)) ? 'selected' : '' }}
 value="Orange">Orange</option>
<option  {{ (is_array($ColorsArray) && in_array('Purple', $ColorsArray)) ? 'selected' : '' }}
 value="Purple">Purple</option>
<option {{ (is_array($ColorsArray) && in_array('Pink', $ColorsArray)) ? 'selected' : '' }}
 value="Pink">Pink</option>
<option  {{ (is_array($ColorsArray) && in_array('Green', $ColorsArray)) ? 'selected' : '' }}
 value="Green">Green</option>
<option {{ (is_array($ColorsArray) && in_array('Black', $ColorsArray)) ? 'selected' : '' }}
 value="Black">Black</option>
</select>
</td>
</tr>
<tr>
<td><label>Enter the marks of Physics</label></td>
<td><input type="text" pattern="\d*" name="Physics" id="Physics" value="{{ $students->Physics }}" min="1" max="3" required></td>
</tr>
<tr>
<td><label>Enter the marks of Chemistry</label></td>
<td><input type="text" pattern="\d*" name="Chemistry" id="Chemistry" value="{{ $students->Chemistry }}" min="1" max="3" required>
</td>
</tr>
<tr>
<td><label>Enter the marks of Maths</label></td>
<td><input type="text" pattern="\d*" name="Maths" id="Maths" value="{{ $students->Maths }}" min="1" max="3" required></td>
</tr>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
</table>
<input type="submit" name="update" id="update" value="UPDATE" class="update">
</form>
<a href="/"><button class="back">Back to index page</button></a>
</body>
</html>
