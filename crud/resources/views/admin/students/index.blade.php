{{ Session::get('message') }}
<html>
<head>
<h1><center> Student Record</center></h1>
<style type = "text/css">
.delete
{
    background-color: #008000;
    border: 3;
    color: yellow;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.edit
{
    background-color: #0000FF;
    border: 3;
    color: yellow;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.create
{
    background-color: #DC143C;
    border: 3;
    color: yellow;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.error
{
    color : red;
    font : bold;
}
</style>
</head>
<body bgcolor="	#FFDAB9">
<table align="center" width="90%" border="5">
<tr>
<td>Name</td>
<td>Email-id</td>
<td>Gender</td>
<td>Department</td>
<td>Sports</td>
<td>Colors</td>
<td>Physics</td>
<td>Chemistry</td>
<td>Maths</td>
</tr>
@foreach($students as $value) 
<tr>
<td>{{ $value->name }}</td>
<td>{{ $value->email }}</td>
<td>{{ $value->Gender }}</td>
<td>{{ $value->Department }}</td>
<td>{{ $value->Sports }}</td>
<td>{{ $value->Colors }}</td>
<td>{{ $value->Physics }}</td>
<td>{{ $value->Chemistry }}</td>
<td>{{ $value->Maths }}</td>
<td>
<a href="/delete/{{ $value->id }}"><button class="delete">Delete</button>
</a>
&nbsp
<a href="/edit/{{ $value->id }}"><button class="edit">Edit</button>
</a>
</td>
</tr>
@endforeach
</body>
</table>
<a href="/create"><button class="create">Add a new Student</button>
</html>